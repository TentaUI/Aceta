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
     * @var string
     */
    public string $editURL;

    /**
     * @return void
     */
    public function mount() : void
    {
        $path = $path = request()->path() . '.mdx';
        $file = base_path($path);

        if (! file_exists($file)) {
            abort(404);
        }

        $this->markdown = new MarkdownParser($file)->render();

        $this->editURL = config('tenta.repository.url') . '/edit/' . config('tenta.repository.branch') . '/' . $path;
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
