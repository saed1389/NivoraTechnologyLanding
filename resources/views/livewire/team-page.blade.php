<div class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 mb-20 text-center animate-slide-up relative">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-gradient-to-r from-blue-200/40 via-estonia-blue/20 to-blue-200/40 blur-[70px] rounded-full -z-10 pointer-events-none"></div>
        <span class="text-estonia-blue font-bold tracking-wider uppercase text-sm">{{ __('all.the_squad') }}</span>
        <h1 class="font-display font-bold text-5xl lg:text-6xl mt-3 mb-6">{{ __('all.meet_experts') }}</h1>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            {{ __('all.team_intro_desc') }}
        </p>
    </div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach([
                ['name' => 'Sait Ekmekçibaşı', 'role' => __('all.role1'), 'img' => asset('front/images/team/sait-ekmekcibasi.jpg')],
                ['name' => 'Seray Mübarek', 'role' => __('all.role2'), 'img' => asset('front/images/team/serai-mubarek.jpg')],
                ['name' => 'Barış Sırım', 'role' => __('all.role3'), 'img' => asset('front/images/team/baris-sirim.jpg')],
                ['name' => 'Elif Ekmekçibaşı', 'role' => __('all.role4'), 'img' => asset('front/images/team/elif-ekmekcibasi.jpg')],
            ] as $member)
                <div class="group relative">
                    <div class="glass-morphism-card rounded-3xl overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="relative h-80 overflow-hidden">
                            <div class="absolute inset-0 bg-estonia-blue/20 mix-blend-overlay z-10 transition-opacity duration-300 group-hover:opacity-0"></div>
                            <img loading="lazy" src="{{ $member['img'] }}" alt="{{ $member['name'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute bottom-0 left-0 right-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 z-20 flex justify-center gap-4 bg-white/90 backdrop-blur-sm">
                                <a href="#" class="text-gray-600 hover:text-estonia-blue transition-colors"><i class="fab fa-linkedin text-xl"></i></a>
                                <a href="#" class="text-gray-600 hover:text-black transition-colors"><i class="fab fa-github text-xl"></i></a>
                                <a href="#" class="text-gray-600 hover:text-blue-400 transition-colors"><i class="fab fa-twitter text-xl"></i></a>
                            </div>
                        </div>
                        <div class="p-6 text-center relative z-20 bg-white border-t border-gray-50">
                            <h3 class="text-xl font-bold font-display text-gray-900">{{ $member['name'] }}</h3>
                            <p class="text-estonia-blue font-medium text-sm mt-1">{{ $member['role'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
