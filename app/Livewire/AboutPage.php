<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('About Us - Nivora Technology')]
class AboutPage extends Component
{
    public function render()
    {
        return view('livewire.about-page');
    }
}
