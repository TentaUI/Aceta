<?php

namespace App\Livewire;

use App\Services\MarkdownParser;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Docs extends Component
{
    protected MarkdownParser $markdown;

    /**
     * @return void
     */
    public function mount() : void
    {
        $file = base_path(request()->path() . '.mdx');

        if (! file_exists($file)) {
            abort(404);
        }

        $this->markdown = new MarkdownParser($file)->render();
    }

    /**
     * @return View
     */
    #[Layout('components.layouts.app')]
    public function render() : View
    {
        return view('docs')->title($this->markdown->meta('title'));
    }

    /**
     * @return MarkdownParser
     */
    public function markdown() : MarkdownParser
    {
        return $this->markdown;
    }
}
