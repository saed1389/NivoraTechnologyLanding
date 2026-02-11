<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Our Team - Nivora Technology')]
class TeamPage extends Component
{
    public function render()
    {
        return view('livewire.team-page');
    }
}
