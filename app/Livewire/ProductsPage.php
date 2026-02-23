<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class ProductsPage extends Component
{
    /**
     * Mount the component and share SEO data with the layout.
     */
    public function mount(): void
    {
        view()->share([
            'metaTitle'       => __('all.products_title'),
            'metaDescription' => __('all.products_description'),
            'metaKeywords'    => __('all.products_keywords'),
            'robots'          => 'index, follow',
            'ogType'          => 'website',
            'ogImage'         => asset('front/images/favicon/apple-touch-icon.png')
        ]);
    }

    /**
     * Dynamic title for Livewire client‑side navigation.
     */
    #[Title('products_title')]
    public function title(): string
    {
        return __('all.products_title') . ' - ' . __('all.IT Consulting Estonia');
    }

    /**
     * Render the view.
     */
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.products-page');
    }
}
