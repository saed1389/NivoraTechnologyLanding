<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Our Services - Nivora Technology')]
class ServicesPage extends Component
{
    public function render()
    {
        return view('livewire.services-page');
    }
}
