<?php

namespace App\Services;

use Illuminate\Support\Stringable;
use Symfony\Component\Yaml\Yaml;

class MarkdownParser
{
    protected array $meta = [];

    /**
     * @var string
     */
    protected string $body = '';

    /**
     * @param  string $markdown
     */
    public function __construct(protected string $markdown)
    {
        //
    }

    /**
     * @param  string $key
     * @return mixed
     */
    public function meta(string $key) : mixed
    {
        if (blank($this->meta)) {
            return $this->parse()->meta[$key] ?? null;
        }

        return $this->meta[$key] ?? null;
    }

    /**
     * @return Stringable
     */
    public function body() : Stringable
    {
        if (blank($this->body)) {
            $this->parse()->body;
        }

        return str($this->body);
    }

    /**
     * @return MarkdownParser
     */
    public function parse() : self
    {
        $this->meta = [];
        $this->body = $this->getMarkdownContent();

        if (preg_match('/^---\s*(.*?)\s*---\s*(.*)$/s', $this->getMarkdownContent(), $matches)) {
            $this->meta = Yaml::parse($matches[1]);
            $this->body = $matches[2];
        }

        return $this;
    }

    /**
     * @return string
     */
    protected function getMarkdownContent() : string
    {
        if (is_file($this->markdown)) {
            return file_get_contents($this->markdown);
        }

        return $this->markdown;
    }
}
