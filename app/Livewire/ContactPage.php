<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

class ContactPage extends Component
{
    #[Validate('required|min:3')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required')]
    public $subject = '';

    #[Validate('required|min:10')]
    public $message = '';

    public $success = false;

    /**
     * Mount the component and share SEO data with the layout.
     */
    public function mount(): void
    {
        view()->share([
            'metaTitle'       => __('all.contact_title'),
            'metaDescription' => __('all.contact_description'),
            'metaKeywords'    => __('all.contact_keywords'),
            'robots'          => 'index, follow',
            'ogType'          => 'website',
            'ogImage'         => asset('front/images/favicon/apple-touch-icon.png')
        ]);
    }

    /**
     * Dynamic title for Livewire client‑side navigation.
     */
    #[Title('contact_title')]
    public function title(): string
    {
        return __('all.contact_title') . ' - ' . __('all.IT Consulting Estonia');
    }

    public function submit(): void
    {
        $this->validate();

        // Simulation of delay
        sleep(1);

        $this->success = true;
        $this->reset(['name', 'email', 'subject', 'message']);
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.contact-page');
    }
}
