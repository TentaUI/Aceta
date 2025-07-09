<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home')]
class Home extends Component
{
    /**
     * @return View
     */

    #[Layout('components.layouts.app')]
    public function render() : View
    {
        return view('index');
    }
}
