<div class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 mb-20 text-center animate-slide-up relative">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-gradient-to-r from-blue-200/40 via-estonia-blue/20 to-blue-200/40 blur-[70px] rounded-full -z-10 pointer-events-none"></div>
        <span class="text-estonia-blue font-bold tracking-wider uppercase text-sm">{{ __('all.expertise') }}</span>
        <h1 class="font-display font-bold text-5xl lg:text-6xl mt-3 mb-6">{{ __('all.tech_capabilities') }}</h1>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            {{ __('all.tech_cap_desc') }}
        </p>
    </div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8 space-y-24">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1">
                <div class="w-16 h-16 bg-purple-100 text-purple-600 rounded-2xl flex items-center justify-center text-3xl mb-6">
                    <i class="fas fa-brain"></i>
                </div>
                <h2 class="text-3xl font-display font-bold mb-4">{{ __('all.service_ai_title') }}</h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    {{ __('all.service_ai_desc') }}
                </p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-3"><i class="fas fa-check text-purple-600"></i> <span>{{ __('all.feature_llm') }}</span></li>
                    <li class="flex items-center gap-3"><i class="fas fa-check text-purple-600"></i> <span>{{ __('all.feature_bots') }}</span></li>
                    <li class="flex items-center gap-3"><i class="fas fa-check text-purple-600"></i> <span>{{ __('all.feature_data') }}</span></li>
                </ul>
                <a href="{{ route('contact') }}" wire:navigate class="btn-primary-modern bg-purple-600">{{ __('all.btn_build_ai') }}</a>
            </div>
            <div class="order-1 lg:order-2">
                <div class="glass-morphism-card p-2 rounded-3xl bg-purple-50 border-purple-100 transform hover:scale-105 transition-transform duration-500">
                    <img src="{{ asset('front/images/al-interface.jpg') }}" alt="AI Interface" class="rounded-2xl w-full">
                </div>
            </div>
        </div>
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="order-1">
                <div class="glass-morphism-card p-2 rounded-3xl bg-blue-50 border-blue-100 transform hover:scale-105 transition-transform duration-500">
                    <img src="{{ asset('front/images/dashboard.jpg') }}" alt="Dashboard Dashboard" class="rounded-2xl w-full">
                </div>
            </div>
            <div class="order-2">
                <div class="w-16 h-16 bg-blue-100 text-estonia-blue rounded-2xl flex items-center justify-center text-3xl mb-6">
                    <i class="fas fa-layer-group"></i>
                </div>
                <h2 class="text-3xl font-display font-bold mb-4">{{ __('all.service_soft_title') }}</h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    {{ __('all.service_soft_desc') }}
                </p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-3"><i class="fas fa-check text-estonia-blue"></i> <span>{{ __('all.feature_saas') }}</span></li>
                    <li class="flex items-center gap-3"><i class="fas fa-check text-estonia-blue"></i> <span>{{ __('all.feature_legacy') }}</span></li>
                    <li class="flex items-center gap-3"><i class="fas fa-check text-estonia-blue"></i> <span>{{ __('all.feature_api') }}</span></li>
                </ul>
            </div>
        </div>
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1">
                <div class="w-16 h-16 bg-green-100 text-green-600 rounded-2xl flex items-center justify-center text-3xl mb-6">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h2 class="text-3xl font-display font-bold mb-4">{{ __('all.service_mobile_title') }}</h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    {{ __('all.service_mobile_desc') }}
                </p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-3"><i class="fas fa-check text-green-600"></i> <span>{{ __('all.feature_cross') }}</span></li>
                    <li class="flex items-center gap-3"><i class="fas fa-check text-green-600"></i> <span>{{ __('all.feature_native') }}</span></li>
                    <li class="flex items-center gap-3"><i class="fas fa-check text-green-600"></i> <span>{{ __('all.feature_aso') }}</span></li>
                </ul>
            </div>
            <div class="order-1 lg:order-2">
                <div class="glass-morphism-card p-2 rounded-3xl bg-green-50 border-green-100 transform hover:scale-105 transition-transform duration-500">
                    <img src="{{ asset('front/images/mobile-app.jpg') }}" alt="Mobile App" class="rounded-2xl w-full">
                </div>
            </div>
        </div>
    </div>
</div>
