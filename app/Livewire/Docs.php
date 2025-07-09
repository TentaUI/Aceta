<?php

namespace App\Livewire;

use App\Services\MarkdownParser;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Stringable;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Docs extends Component
{
    protected MarkdownParser $service;

    /**
     * @return void
     */
    public function mount() : void
    {
        $file = base_path(request()->path() . '.mdx');

        if (! file_exists($file)) {
            abort(404);
        }

        $this->service = new MarkdownParser($file);
    }

    /**
     * @return Stringable
     */
    public function content() : Stringable
    {
        return $this->service->parse()->body()->markdown();
    }

    /**
     * @return View
     */
    #[Layout('components.layouts.app')]
    public function render() : View
    {
        return view('docs')->title($this->service->meta('title'));
    }
}
