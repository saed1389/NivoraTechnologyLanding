<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Our Products - Nivora Technology')]
class ProductsPage extends Component
{
    public function render()
    {
        return view('livewire.products-page');
    }
}
