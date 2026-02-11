<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Nivora Technology' }} - IT Consulting Estonia</title>

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

<div id="custom-cursor" class="custom-cursor"></div>
<div id="cursor-dot" class="cursor-dot"></div>

<nav id="navbar" class="fixed w-full top-0 z-40 transition-all duration-500 bg-white/80 backdrop-blur-md border-b border-white/20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex items-center">
                <a href="{{ route('home') }}" wire:navigate class="logo-text text-2xl">
                    <span class="text-estonia-blue font-display font-bold">Nivora</span>
                    <span class="text-gray-900 font-display font-bold">Technology</span>
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-2">
                @foreach([
                    ['label' => 'Home', 'route' => 'home'],
                    ['label' => 'About', 'route' => 'about'],
                    ['label' => 'Services', 'route' => 'services'],
                    ['label' => 'Products', 'route' => 'products'],
                    ['label' => 'Team', 'route' => 'team'],
                ] as $link)
                    <a href="{{ route($link['route']) }}" wire:navigate class="nav-link-modern {{ request()->routeIs($link['route']) ? 'text-estonia-blue bg-estonia-blue/5' : '' }}">
                        {{ $link['label'] }}
                    </a>
                @endforeach

                <a href="{{ route('contact') }}" wire:navigate class="btn-modern-nav ml-4">
                    <span>Contact</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>

                <div class="ml-4 flex items-center gap-2 text-sm font-semibold">
                    <a href="/change-locale/en" class="{{ app()->getLocale() == 'en' ? 'text-estonia-blue' : 'text-gray-400 hover:text-gray-600' }}">EN</a>
                    <span class="text-gray-300">|</span>
                    <a href="/change-locale/et" class="{{ app()->getLocale() == 'et' ? 'text-estonia-blue' : 'text-gray-400 hover:text-gray-600' }}">ET</a>
                </div>
            </div>

            <button id="mobile-menu-btn" class="md:hidden glass-morphism rounded-xl p-3 text-gray-900 hover:bg-gray-100 transition">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 shadow-xl absolute w-full left-0 top-20">
        <div class="p-6 space-y-4 flex flex-col">
            @foreach([
                ['label' => 'Home', 'route' => 'home'],
                ['label' => 'About', 'route' => 'about'],
                ['label' => 'Services', 'route' => 'services'],
                ['label' => 'Products', 'route' => 'products'],
                ['label' => 'Team', 'route' => 'team'],
            ] as $link)
                <a href="{{ route($link['route']) }}"
                   wire:navigate
                   class="block p-3 rounded-lg hover:bg-estonia-light hover:text-estonia-blue font-medium transition-colors {{ request()->routeIs($link['route']) ? 'bg-estonia-light text-estonia-blue' : 'text-gray-600' }}">
                    {{ $link['label'] }}
                </a>
            @endforeach
            <a href="{{ route('contact') }}" wire:navigate class="block p-3 rounded-lg bg-estonia-blue text-white text-center font-bold mt-4">
                Contact Us
            </a>
            <div class="flex justify-center gap-4 pt-4 border-t border-gray-100 mt-2">
                <a href="/change-locale/en" class="{{ app()->getLocale() == 'en' ? 'text-estonia-blue font-bold' : 'text-gray-500' }}">English</a>
                <a href="/change-locale/et" class="{{ app()->getLocale() == 'et' ? 'text-estonia-blue font-bold' : 'text-gray-500' }}">Estonian</a>
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
                    <span class="text-estonia-blue">Nivora</span> <span class="text-gray-900">Technology</span>
                </div>
                <p class="text-gray-600 mb-6 max-w-sm">
                    Building digital excellence in Estonia. We transform complex challenges into elegant digital solutions.
                </p>
            </div>
            <div>
                <h3 class="font-bold mb-4">Company</h3>
                <ul class="space-y-2 text-gray-600">
                    <li><a href="{{ route('about') }}" wire:navigate class="hover:text-estonia-blue">About</a></li>
                    <li><a href="{{ route('team') }}" wire:navigate class="hover:text-estonia-blue">Team</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-4">Contact</h3>
                <ul class="space-y-2 text-gray-600">
                    <li>info@nivora.ee</li>
                    <li>Tallinn, Estonia</li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-100 pt-8 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} Nivora Technology.
        </div>
    </div>
</footer>

<script src="{{ asset('front/assets/js/script-modern.js') }}"></script>
@livewireScripts
</body>
</html>
