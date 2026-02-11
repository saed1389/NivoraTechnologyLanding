<div class="pt-32 pb-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 mb-20 text-center animate-slide-up relative">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-gradient-to-r from-blue-200/40 via-estonia-blue/20 to-blue-200/40 blur-[70px] rounded-full -z-10 pointer-events-none"></div>
        <span class="text-estonia-blue font-bold tracking-wider uppercase text-sm">{{ __('all.our_story') }}</span>
        <h1 class="font-display font-bold text-5xl lg:text-6xl mt-3 mb-6">
            {{ __('all.born_in') }} <span class="text-transparent bg-clip-text bg-gradient-to-r from-estonia-blue to-black">{{ __('all.digital_estonia') }}</span>
        </h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
            {{ __('all.team_description') }}
        </p>
    </div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center mb-24">
            <div class="relative group">
                <div class="absolute inset-0 bg-estonia-blue/10 rounded-3xl transform rotate-3 transition-transform group-hover:rotate-6"></div>
                <img src="{{ asset('front/images/about.jpg') }}" alt="Office collaboration" class="relative rounded-3xl shadow-2xl z-10 w-full object-cover h-[500px]">
            </div>
            <div class="space-y-6">
                <h2 class="text-3xl font-display font-bold">{{ __('all.bridging_innovation') }}</h2>
                <p class="text-gray-600 leading-relaxed">
                    {{ __('all.founder_premise') }}
                </p>
                <p class="text-gray-600 leading-relaxed">
                    {{ __('all.engineering_outcomes') }}
                </p>
                <div class="grid grid-cols-2 gap-6 pt-6">
                    <div class="p-4 bg-gray-50 rounded-xl border border-gray-100">
                        <div class="text-estonia-blue text-2xl mb-2"><i class="fas fa-check-circle"></i></div>
                        <h4 class="font-bold">{{ __('all.zero_debt') }}</h4>
                        <p class="text-xs text-gray-500 mt-1">{{ __('all.clean_code') }}</p>
                    </div>
                    <div class="p-4 bg-gray-50 rounded-xl border border-gray-100">
                        <div class="text-estonia-blue text-2xl mb-2"><i class="fas fa-rocket"></i></div>
                        <h4 class="font-bold">{{ __('all.speed_to_market') }}</h4>
                        <p class="text-xs text-gray-500 mt-1">{{ __('all.rapid_deployment') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-estonia-blue rounded-[3rem] p-12 lg:p-16 text-white text-center">
            <div class="grid md:grid-cols-3 gap-12 divide-y md:divide-y-0 md:divide-x divide-white/20">
                <div class="p-4">
                    <div class="text-5xl font-display font-bold mb-2">15+</div>
                    <div class="text-blue-100 uppercase tracking-widest text-sm">{{ __('all.years_business') }}</div>
                </div>
                <div class="p-4">
                    <div class="text-5xl font-display font-bold mb-2">50+</div>
                    <div class="text-blue-100 uppercase tracking-widest text-sm">{{ __('all.enterprise_projects') }}</div>
                </div>
                <div class="p-4">
                    <div class="text-5xl font-display font-bold mb-2">10M+</div>
                    <div class="text-blue-100 uppercase tracking-widest text-sm">{{ __('all.lines_code') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
