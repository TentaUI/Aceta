<?php

namespace App\Services;

use DOMDocument;
use DOMXPath;
use Illuminate\Support\Str;

class TableOfContent
{
    public array $tocs = [];

    /**
     * @var string
     */
    public string $html = '';

    /**
     * @param  string $html Raw HTML
     */
    public function __construct(string $html)
    {
        $this->parse($html);
    }

    /**
     *  Parse the html
     *
     * @param  string $html
     */
    public function parse(string $html) : void
    {
        $dom = new DOMDocument;

        // suppress warnings from malformed html
        libxml_use_internal_errors(true);

        // load and convert html content
        $dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));
        libxml_clear_errors();

        $xpath = new DOMXPath($dom);

        // select all h1, h2, and h3 elements
        $headings = $xpath->query('//h1 | //h2 | //h3');

        $flatTOC = [];

        // loop through each heading and extract data
        foreach ($headings as $heading) {
            $tag = strtolower($heading->nodeName);       // e.g., h1, h2, h3
            $level = (int) substr($tag, 1);              // extract heading level
            $label = $heading->textContent;              // heading text

            // generate slugified id if not present
            if (! $heading->hasAttribute('id')) {
                $id = Str::slug($label);
                $heading->setAttribute('id', $id);
            } else {
                $id = $heading->getAttribute('id');
            }

            // add to a flat toc list
            $flatTOC[] = [
                'id'    => $id,
                'label' => $label,
                'level' => $level,
            ];
        }

        // build nested toc from a flat list
        $this->tocs = $this->buildTOC($flatTOC);

        // extract updated html body content
        $body = $dom->getElementsByTagName('body')->item(0);
        $html = '';
        foreach ($body?->childNodes as $child) {
            $html .= $dom->saveHTML($child);
        }

        $this->html = $html;
    }

    /**
     * build nested structure from flat list
     *
     * @param  array $items
     * @return array
     */
    protected function buildTOC(array $items) : array
    {
        $stacks = [];   // track current heading levels
        $result = [];   // final nested toc

        foreach ($items as $item) {
            // add children key to node
            $node = $item + ['children' => []];

            // pop from stack until correct parent is found
            while (! empty($stacks) && $item['level'] <= end($stacks)['level']) {
                array_pop($stacks);
            }

            // if stack is empty, this is a top-level item
            if (empty($stacks)) {
                $result[] = $node;
                $stacks[] = &$result[array_key_last($result)];
            } else {
                // add as child to the last item in stack
                $parent = &$stacks[array_key_last($stacks)];
                $parent['children'][] = $node;
                $stacks[] = &$parent['children'][array_key_last($parent['children'])];
            }
        }

        return $result;
    }
}
