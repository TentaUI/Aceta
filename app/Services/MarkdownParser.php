<?php

namespace App\Services;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Str;
use Symfony\Component\Yaml\Yaml;

/**
 * A service class for parsing markdown content with front matter metadata support.
 *
 * This class handles parsing of markdown files or content that may contain YAML front matter,
 * processes Blade directives within the markdown, and converts the content to HTML with
 * table of contents generation.
 */
class MarkdownParser
{
    public array $meta = [];

    /**
     * @var string
     */
    public string $body = '';

    /**
     * @var string
     */
    public string $html = '';

    /**
     * @var array
     */
    public array $tocs = [];

    /**
     * Initialize the markdown parser with content or file path.
     *
     * @param  string $markdown The markdown content string or file path to parse
     */
    public function __construct(protected string $markdown)
    {
        //
    }

    /**
     * Retrieve a specific metadata value from the front matter.
     *
     * This method extracts metadata from YAML front matter at the beginning of the markdown content.
     * If the content hasn't been parsed yet, it will trigger parsing automatically.
     *
     * @param  string $key The metadata key to retrieve
     * @return mixed The metadata value for the given key, or null if not found
     */
    public function meta(string $key) : mixed
    {
        if (blank($this->meta)) {
            $this->parse();
        }

        $value = $this->meta[$key] ?? null;

        if ($key === 'date' && $value !== null) {
            try {
                if (is_numeric($value)) {
                    return Carbon::createFromTimestamp((int) $value);
                }

                return Carbon::parse($value);
            } catch (\Exception $e) {
                return $value;
            }
        }

        return $value;
    }

    /**
     * Get the markdown body content without front matter.
     *
     * Returns the main markdown content after removing any YAML front matter.
     * If the content hasn't been parsed yet, it will trigger parsing automatically.
     *
     * @return string The markdown body content
     */
    public function body() : string
    {
        if (blank($this->body)) {
            $this->parse();
        }

        return $this->body;
    }

    /**
     * Render the markdown content to HTML with table of contents generation.
     *
     * This method processes the markdown body through Blade rendering (to handle any Blade directives),
     * converts the result to HTML, and generates a table of contents from the headings.
     *
     * @return self
     */
    public function render() : MarkdownParser
    {
        // convert markdown content(with blade directives) into html
        $html =
            $this->markdownToHtmlWithLang(
                Blade::render($this->body()),
            );

        // initialize table of content service with parsed html
        $service = new TableOfContent($html);

        // store generated toc and modified html
        $this->tocs = $service->tocs;
        $this->html = $service->html;

        return $this;
    }

    /**
     * Parse the markdown content to separate front matter from body content.
     *
     * This method analyzes the markdown content to extract YAML front matter (if present)
     * and separate it from the main markdown body. Front matter should be enclosed
     * between triple dashes (---) at the beginning of the content.
     *
     * @return self
     */
    public function parse() : self
    {
        $this->meta = [];
        $this->body = $this->getContent();

        if (preg_match('/^---\s*(.*?)\s*---\s*(.*)$/s', $this->getContent(), $matches)) {
            $this->meta = Yaml::parse($matches[1]);
            $this->body = $matches[2];
        }

        return $this;
    }

    /**
     * Get the raw content from file or return the markdown string.
     *
     * This method determines whether the markdown property is a file path or direct content.
     * If it's a valid file path, it reads and returns the file contents.
     * Otherwise, it returns the markdown string directly.
     *
     * @return string The raw markdown content
     */
    protected function getContent() : string
    {
        if (is_file($this->markdown)) {
            return file_get_contents($this->markdown);
        }

        return $this->markdown;
    }

    /**
     * @param  string $markdown
     * @return string
     */
    private function markdownToHtmlWithLang(string $markdown) : string
    {
        $markdown = preg_replace_callback('/```(\w+)?\n([\s\S]*?)```/m', static function ($matches) {
            $lang = $matches[1] ?? 'plaintext';
            $code = htmlspecialchars($matches[2]);

            return sprintf('<pre><code class="lang-%s">%s</code></pre>', $lang, $code);
        },
            $markdown,
        );

        return Str::markdown($markdown);
    }
}
