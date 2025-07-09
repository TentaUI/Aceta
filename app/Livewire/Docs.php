<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home')]
class Docs extends Component
{
    public function render()
    {
        return view('docs');
    }
}
