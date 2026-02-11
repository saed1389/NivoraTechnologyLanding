<div class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 mb-20 text-center animate-slide-up">
        <span class="text-estonia-blue font-bold tracking-wider uppercase text-sm">The Squad</span>
        <h1 class="font-display font-bold text-5xl lg:text-6xl mt-3 mb-6">Meet the Experts</h1>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            A diverse group of thinkers, builders, and problem solvers united by a passion for technology.
        </p>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach([
                ['name' => 'Kristjan Mägi', 'role' => 'CEO & Founder', 'img' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'],
                ['name' => 'Laura Kask', 'role' => 'CTO', 'img' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'],
                ['name' => 'Martin Sepp', 'role' => 'Lead AI Engineer', 'img' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'],
                ['name' => 'Eva Tamm', 'role' => 'Product Designer', 'img' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'],
            ] as $member)
                <div class="group relative">
                    <div class="glass-morphism-card rounded-3xl overflow-hidden">
                        <div class="relative h-80 overflow-hidden">
                            <div class="absolute inset-0 bg-estonia-blue/20 mix-blend-overlay z-10"></div>
                            <img src="{{ $member['img'] }}" alt="{{ $member['name'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                            <div class="absolute bottom-0 left-0 right-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 z-20 flex justify-center gap-4 bg-white/90 backdrop-blur-sm">
                                <a href="#" class="text-gray-600 hover:text-estonia-blue"><i class="fab fa-linkedin text-xl"></i></a>
                                <a href="#" class="text-gray-600 hover:text-black"><i class="fab fa-github text-xl"></i></a>
                                <a href="#" class="text-gray-600 hover:text-blue-400"><i class="fab fa-twitter text-xl"></i></a>
                            </div>
                        </div>
                        <div class="p-6 text-center relative z-20 bg-white">
                            <h3 class="text-xl font-bold font-display text-gray-900">{{ $member['name'] }}</h3>
                            <p class="text-estonia-blue font-medium text-sm mt-1">{{ $member['role'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
