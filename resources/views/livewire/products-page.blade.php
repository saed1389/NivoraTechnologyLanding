<div class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 mb-20 text-center animate-slide-up relative">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-gradient-to-r from-blue-200/40 via-estonia-blue/20 to-blue-200/40 blur-[70px] rounded-full -z-10 pointer-events-none"></div>
        <span class="text-estonia-blue font-bold tracking-wider uppercase text-sm">{{ __('all.innovation_lab') }}</span>
        <h1 class="font-display font-bold text-5xl lg:text-6xl mt-3 mb-6">{{ __('all.digital_products') }}</h1>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            {{ __('all.products_desc') }}
        </p>
    </div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-8">

            <div class="glass-morphism-card rounded-3xl overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="bg-gradient-to-br from-estonia-blue to-blue-600 p-8 h-48 flex items-center justify-center">
                    <i class="fas fa-cube text-white text-6xl opacity-80 group-hover:scale-110 transition-transform"></i>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-2xl font-bold font-display">{{ __('all.prod_core_title') }}</h3>
                        <span class="bg-blue-100 text-estonia-blue text-xs font-bold px-2 py-1 rounded-md">{{ __('all.prod_tag_saas') }}</span>
                    </div>
                    <p class="text-gray-600 mb-6">
                        {{ __('all.prod_core_desc') }}
                    </p>
                    <ul class="text-sm text-gray-500 space-y-2 mb-8">
                        <li class="flex gap-2"><i class="fas fa-check text-green-500"></i> {{ __('all.feat_multitenant') }}</li>
                        <li class="flex gap-2"><i class="fas fa-check text-green-500"></i> {{ __('all.feat_stripe') }}</li>
                        <li class="flex gap-2"><i class="fas fa-check text-green-500"></i> {{ __('all.feat_api') }}</li>
                    </ul>
                    <button class="w-full btn-secondary-modern justify-center">{{ __('all.view_details') }}</button>
                </div>
            </div>
            <div class="glass-morphism-card rounded-3xl overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="bg-gradient-to-br from-purple-600 to-indigo-600 p-8 h-48 flex items-center justify-center">
                    <i class="fas fa-robot text-white text-6xl opacity-80 group-hover:scale-110 transition-transform"></i>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-2xl font-bold font-display">{{ __('all.prod_bot_title') }}</h3>
                        <span class="bg-purple-100 text-purple-600 text-xs font-bold px-2 py-1 rounded-md">{{ __('all.prod_tag_ai') }}</span>
                    </div>
                    <p class="text-gray-600 mb-6">
                        {{ __('all.prod_bot_desc') }}
                    </p>
                    <ul class="text-sm text-gray-500 space-y-2 mb-8">
                        <li class="flex gap-2"><i class="fas fa-check text-green-500"></i> {{ __('all.feat_gpt4') }}</li>
                        <li class="flex gap-2"><i class="fas fa-check text-green-500"></i> {{ __('all.feat_vector') }}</li>
                        <li class="flex gap-2"><i class="fas fa-check text-green-500"></i> {{ __('all.feat_247') }}</li>
                    </ul>
                    <button class="w-full btn-secondary-modern justify-center">{{ __('all.view_details') }}</button>
                </div>
            </div>
            <div class="glass-morphism-card rounded-3xl overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="bg-gradient-to-br from-gray-800 to-black p-8 h-48 flex items-center justify-center">
                    <i class="fas fa-shield-alt text-white text-6xl opacity-80 group-hover:scale-110 transition-transform"></i>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-2xl font-bold font-display">{{ __('all.prod_secure_title') }}</h3>
                        <span class="bg-gray-100 text-gray-800 text-xs font-bold px-2 py-1 rounded-md">{{ __('all.prod_tag_sec') }}</span>
                    </div>
                    <p class="text-gray-600 mb-6">
                        {{ __('all.prod_secure_desc') }}
                    </p>
                    <ul class="text-sm text-gray-500 space-y-2 mb-8">
                        <li class="flex gap-2"><i class="fas fa-check text-green-500"></i> {{ __('all.feat_aes') }}</li>
                        <li class="flex gap-2"><i class="fas fa-check text-green-500"></i> {{ __('all.feat_eu_region') }}</li>
                        <li class="flex gap-2"><i class="fas fa-check text-green-500"></i> {{ __('all.feat_logs') }}</li>
                    </ul>
                    <button class="w-full btn-secondary-modern justify-center">{{ __('all.view_details') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>
