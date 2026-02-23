<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0072CE">
    <meta name="robots" content="{{ $robots ?? 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' }}">
    <title>{{ $metaTitle ?? ($title ?? 'Nivora Technology OÜ') }} - {{ __('all.IT Consulting Estonia') }}</title>
    <meta name="description" content="{{ $metaDescription ?? __('all.Default meta description for Nivora Technology – IT consulting and software development in Estonia.') }}">
    <meta name="keywords" content="{{ $metaKeywords ?? 'IT consulting, software development, Estonia, AI agents, cloud solutions' }}">
    <meta name="author" content="Nivora Technology OÜ">
    <link rel="canonical" href="{{ $canonical ?? url()->current() }}">
    <?php
    $locales = ['en', 'et', 'ru'];
    $currentPath = request()->path();
    ?>
    <?php foreach($locales as $lang): ?>
    <link rel="alternate" hreflang="{{ $lang }}" href="{{ url($lang . '/' . preg_replace('/^(en|et|ru)\//', '', $currentPath)) }}" />
    <?php endforeach; ?>
    <link rel="alternate" hreflang="x-default" href="{{ url('en/' . preg_replace('/^(en|et|ru)\//', '', $currentPath)) }}" />
    <meta property="og:type" content="{{ $ogType ?? 'website' }}">
    <meta property="og:url" content="{{ $canonical ?? url()->current() }}">
    <meta property="og:title" content="{{ $metaTitle ?? ($title ?? 'Nivora Technology OÜ') }} - {{ __('all.IT Consulting Estonia') }}">
    <meta property="og:description" content="{{ $metaDescription ?? __('all.Nivora Technology – IT consulting and software development in Estonia.') }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('front/images/favicon/apple-touch-icon.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Nivora Technology OÜ">
    <meta property="og:locale" content="{{ str_replace('-', '_', app()->getLocale()) }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ $canonical ?? url()->current() }}">
    <meta name="twitter:title" content="{{ $metaTitle ?? ($title ?? 'Nivora Technology OÜ') }} - {{ __('all.IT Consulting Estonia') }}">
    <meta name="twitter:description" content="{{ $metaDescription ?? __('all.Nivora Technology – IT consulting and software development in Estonia.') }}">
    <meta name="twitter:image" content="{{ $ogImage ?? asset('front/images/og-image.jpg') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('front/images/favicon/site.webmanifest') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'estonia-blue': '#0072CE',
                        'estonia-dark': '#012e55',
                        'estonia-light': '#E8F4FD',
                    },
                    fontFamily: {
                        'sans': ['Inter', 'sans-serif'],
                        'display': ['Space Grotesk', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'slide-up': 'slideUp 0.5s ease-out',
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="{{ asset('front/assets/css/styles-modern.css') }}">

    @livewireStyles
</head>
<body class="font-sans bg-gray-50 text-gray-900 overflow-x-hidden selection:bg-estonia-blue selection:text-white">

<?php
$navLinks = [
    ['label' => __('all.Home'), 'route' => 'home'],
    ['label' => __('all.About'), 'route' => 'about'],
    ['label' => __('all.Services'), 'route' => 'services'],
    ['label' => __('all.Products'), 'route' => 'products'],
    ['label' => __('all.Team'), 'route' => 'team'],
];
?>

<div id="custom-cursor" class="custom-cursor" aria-hidden="true"></div>
<div id="cursor-dot" class="cursor-dot" aria-hidden="true"></div>

<nav id="navbar" class="fixed w-full top-0 z-40 transition-all duration-500 bg-white/80 backdrop-blur-md border-b border-white/20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex items-center">
                <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-2" aria-label="Nivora Technology OÜ Home">
                    <img src="{{ asset('front/images/logo.png') }}" alt="Nivora Technology OÜ Logo" class="h-10 md:h-12 w-auto object-contain"/>
                </a>
            </div>
            <div class="hidden md:flex items-center space-x-2">
                <?php foreach($navLinks as $link): ?>
                <a href="{{ route($link['route']) }}" wire:navigate class="nav-link-modern {{ request()->routeIs($link['route']) ? 'text-estonia-blue bg-estonia-blue/5' : '' }}">
                    {{ $link['label'] }}
                </a>
                <?php endforeach; ?>
                <a href="{{ route('contact') }}" wire:navigate class="btn-modern-nav ml-4">
                    <span>{{ __('all.Contact Us') }}</span>
                    <i class="fas fa-arrow-right ml-2" aria-hidden="true"></i>
                </a>

                <div class="flex justify-center border-gray-100"
                     x-data="{
                             open: false,
                             locale: '{{ app()->getLocale() }}',
                             flags: {
                                 'en': '{{ asset('front/images/flag/gb.png') }}',
                                 'et': '{{ asset('front/images/flag/ee.png') }}',
                                 'ru': '{{ asset('front/images/flag/ru.png') }}'
                             },
                             names: {
                                 'en': 'English',
                                 'et': 'Estonian',
                                 'ru': 'Russian'
                             }
                         }">
                    <div class="relative w-32">
                        <button x-on:click="open = !open" x-on:click.outside="open = false" aria-haspopup="listbox" :aria-expanded="open" aria-label="Select Language" class="w-full appearance-none bg-gray-50 border border-gray-200 text-gray-700 py-2 px-3 rounded-lg flex items-center justify-between hover:bg-white hover:border-estonia-blue transition-all duration-300">
                            <div class="flex items-center gap-2">
                                <img :src="flags[locale]" class="w-5 h-auto rounded-sm shadow-sm object-cover" alt="Current Language Flag">
                                <span x-text="names[locale]" class="font-medium text-sm"></span>
                            </div>
                            <i class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-300" :class="{'rotate-180': open}" aria-hidden="true"></i>
                        </button>
                        <div
                            x-show="open"
                            role="listbox"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-[-10px]"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-[-10px]"
                            class="absolute top-full right-0 w-40 mt-2 bg-white border border-gray-100 rounded-xl shadow-xl overflow-hidden z-50"
                            style="display: none;"
                        >
                            <div class="py-1">
                                <a href="/change-locale/en" role="option" class="flex items-center gap-3 px-4 py-2 hover:bg-blue-50 hover:text-estonia-blue transition-colors group">
                                    <img src="https://flagcdn.com/w40/gb.png" class="w-5 h-auto rounded-sm shadow-sm opacity-80 group-hover:opacity-100" alt="English Flag">
                                    <span class="text-sm font-medium">English</span>
                                </a>
                                <a href="/change-locale/et" role="option" class="flex items-center gap-3 px-4 py-2 hover:bg-blue-50 hover:text-estonia-blue transition-colors group">
                                    <img src="https://flagcdn.com/w40/ee.png" class="w-5 h-auto rounded-sm shadow-sm opacity-80 group-hover:opacity-100" alt="Estonian Flag">
                                    <span class="text-sm font-medium">Estonian</span>
                                </a>
                                <a href="/change-locale/ru" role="option" class="flex items-center gap-3 px-4 py-2 hover:bg-blue-50 hover:text-estonia-blue transition-colors group">
                                    <img src="https://flagcdn.com/w40/ru.png" class="w-5 h-auto rounded-sm shadow-sm opacity-80 group-hover:opacity-100" alt="Russian Flag">
                                    <span class="text-sm font-medium">Russian</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button id="mobile-menu-btn" aria-label="Toggle navigation menu" aria-expanded="false" class="md:hidden glass-morphism rounded-xl p-3 text-gray-900 hover:bg-gray-100 transition">
                <i class="fas fa-bars text-xl" aria-hidden="true"></i>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 shadow-xl absolute w-full left-0 top-20">
        <div class="p-6 space-y-4 flex flex-col">
            <?php foreach($navLinks as $link): ?>
            <a href="{{ route($link['route']) }}" wire:navigate class="block p-3 rounded-lg hover:bg-estonia-light hover:text-estonia-blue font-medium transition-colors {{ request()->routeIs($link['route']) ? 'bg-estonia-light text-estonia-blue' : 'text-gray-600' }}">
                {{ $link['label'] }}
            </a>
            <?php endforeach; ?>
            <a href="{{ route('contact') }}" wire:navigate class="block p-3 rounded-lg bg-estonia-blue text-white text-center font-bold mt-4">
                {{ __('all.Contact Us') }}
            </a>

            <div class="flex justify-center pt-4 border-t border-gray-100 mt-2"
                 x-data="{
                         open: false,
                         locale: '{{ app()->getLocale() }}',
                         flags: {
                             'en': '{{ asset('front/images/flag/gb.png') }}',
                             'et': '{{ asset('front/images/flag/ee.png') }}',
                             'ru': '{{ asset('front/images/flag/ru.png') }}'
                         },
                         names: {
                             'en': 'English',
                             'et': 'Estonian',
                             'ru': 'Russian'
                         }
                     }">
                <div class="relative w-full max-w-xs">
                    <div
                        x-show="open"
                        x-on:click.outside="open = false"
                        role="listbox"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-2"
                        class="absolute bottom-full left-0 w-full mb-2 bg-white border border-gray-100 rounded-xl shadow-xl overflow-hidden z-50"
                        style="display: none;"
                    >
                        <div class="py-1">
                            <a href="/change-locale/en" role="option" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 hover:text-estonia-blue transition-colors">
                                <img src="{{ asset('front/images/flag/gb.png') }}" class="w-6 rounded-sm shadow-sm" alt="English Flag">
                                <span class="font-medium">English</span>
                            </a>
                            <a href="/change-locale/et" role="option" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 hover:text-estonia-blue transition-colors">
                                <img src="{{ asset('front/images/flag/ee.png') }}" class="w-6 rounded-sm shadow-sm" alt="Estonian Flag">
                                <span class="font-medium">Estonian</span>
                            </a>
                            <a href="/change-locale/ru" role="option" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 hover:text-estonia-blue transition-colors">
                                <img src="{{ asset('front/images/flag/ru.png') }}" class="w-6 rounded-sm shadow-sm" alt="Russian Flag">
                                <span class="font-medium">Russian</span>
                            </a>
                        </div>
                    </div>
                    <button x-on:click="open = !open" aria-haspopup="listbox" :aria-expanded="open" aria-label="Select Language" class="w-full bg-gray-50 border border-gray-200 text-gray-700 py-2 px-4 rounded-lg flex items-center justify-between hover:bg-white hover:border-estonia-blue transition-all">
                        <div class="flex items-center gap-3">
                            <img :src="flags[locale]" class="w-6 rounded-sm shadow-sm" alt="Current Language Flag">
                            <span x-text="names[locale]" class="font-medium"></span>
                        </div>
                        <i class="fas fa-chevron-up text-xs text-gray-400" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>

<main>
    {{ $slot }}
</main>

<footer class="bg-white pt-16 pb-8 border-t border-gray-100 relative mt-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid md:grid-cols-4 gap-8 mb-12">
            <div class="md:col-span-2">
                <div class="text-3xl font-display font-bold mb-4">
                    <img src="{{ asset('front/images/logo.png') }}" alt="Nivora Technology OÜ Logo" class="h-10 md:h-12 w-auto object-contain"/>
                </div>
                <p class="text-gray-600 mb-6 max-w-sm">
                    {{ __('all.footer description') }}
                </p>
            </div>
            <div>
                <h3 class="font-bold mb-4">{{ __('all.Company') }}</h3>
                <ul class="space-y-2 text-gray-600">
                    <li><a href="{{ route('about') }}" wire:navigate class="hover:text-estonia-blue">{{ __('all.About') }}</a></li>
                    <li><a href="{{ route('team') }}" wire:navigate class="hover:text-estonia-blue">{{ __('all.Team') }}</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-4">{{ __('all.Contact') }}</h3>
                <ul class="space-y-2 text-gray-600">
                    <li><a href="mailto:info@nivoratechnology.ee" class="hover:text-estonia-blue">info@nivoratechnology.ee</a></li>
                    <li><a href="mailto:info@nivoratechnology.com" class="hover:text-estonia-blue">info@nivoratechnology.com</a></li>
                    <li><address class="not-italic">Harju maakond, Tallinn, Põhja-Tallinna linnaosa, Telliskivi tn 57, 10412, Tallinn, Estonia</address></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-100 pt-8 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} Nivora Technology OÜ.
        </div>
    </div>
</footer>

<script src="{{ asset('front/assets/js/script-modern.js') }}" defer></script>
@livewireScripts
</body>
</html>
