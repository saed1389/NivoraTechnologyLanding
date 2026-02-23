<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class TeamPage extends Component
{
    /**
     * Mount the component and share SEO data with the layout.
     */
    public function mount(): void
    {
        view()->share([
            'metaTitle'       => __('all.team_title'),
            'metaDescription' => __('all.team_description'),
            'metaKeywords'    => __('all.team_keywords'),
            'robots'          => 'index, follow',
            'ogType'          => 'website',
            'ogImage'         => asset('front/images/favicon/apple-touch-icon.png')
        ]);
    }

    /**
     * Dynamic title for Livewire client‑side navigation.
     */
    #[Title('team_title')]
    public function title(): string
    {
        return __('all.team_title') . ' - ' . __('all.IT Consulting Estonia');
    }

    /**
     * Render the view.
     */
    public function render()
    {
        return view('livewire.team-page');
    }
}
