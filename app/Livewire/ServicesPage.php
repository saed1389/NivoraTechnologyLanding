<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class ServicesPage extends Component
{
    /**
     * Mount the component and share SEO data with the layout.
     */
    public function mount(): void
    {
        view()->share([
            'metaTitle'       => __('all.services_title'),
            'metaDescription' => __('all.services_description'),
            'metaKeywords'    => __('all.services_keywords'),
            'robots'          => 'index, follow',
            'ogType'          => 'website',
            'ogImage'         => asset('front/images/favicon/apple-touch-icon.png')
        ]);
    }

    /**
     * Dynamic title for Livewire client‑side navigation.
     */
    #[Title('services_title')]
    public function title(): string
    {
        return __('all.services_title') . ' - ' . __('all.IT Consulting Estonia');
    }

    /**
     * Render the view.
     */
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.services-page');
    }
}
