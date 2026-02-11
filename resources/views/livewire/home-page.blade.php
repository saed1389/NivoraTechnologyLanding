<div>
    <section class="relative min-h-screen flex items-center pt-20 overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <div class="blob blob-1"></div>
            <div class="blob blob-2"></div>
            <div class="blob blob-3"></div>
            <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20 w-full relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8 animate-slide-up">
                    <div class="inline-block">
                        <div class="glass-morphism px-4 py-2 rounded-full inline-flex items-center gap-2 border border-blue-100/20">
                            <span class="relative flex h-3 w-3">
                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-estonia-blue opacity-75"></span>
                              <span class="relative inline-flex rounded-full h-3 w-3 bg-estonia-blue"></span>
                            </span>
                            <span class="text-sm font-bold tracking-wide text-estonia-blue uppercase">Estonian Innovation</span>
                        </div>
                    </div>

                    <h1 class="font-display font-bold text-5xl sm:text-6xl lg:text-7xl leading-[1.1] tracking-tight text-gray-900">
                        Transforming <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-estonia-blue to-blue-400">
                            Digital Future
                        </span>
                    </h1>

                    <p class="text-xl text-gray-600 leading-relaxed max-w-lg">
                        We build high-performance software, scalable cloud architectures, and intelligent AI Agents that drive business growth.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="{{ route('contact') }}" wire:navigate class="btn-primary-modern group justify-center">
                            <span>Start Your Project</span>
                            <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                        </a>
                        <a href="{{ route('services') }}" wire:navigate class="btn-secondary-modern justify-center group">
                            <span>Our Expertise</span>
                            <i class="fas fa-code ml-2 text-gray-400 group-hover:text-estonia-blue transition-colors"></i>
                        </a>
                    </div>

                    <div class="grid grid-cols-3 gap-8 pt-8 border-t border-gray-200/50">
                        <div>
                            <div class="text-3xl font-display font-bold text-gray-900">50+</div>
                            <div class="text-sm text-gray-500 font-medium uppercase tracking-wide mt-1">Projects</div>
                        </div>
                        <div>
                            <div class="text-3xl font-display font-bold text-gray-900">100%</div>
                            <div class="text-sm text-gray-500 font-medium uppercase tracking-wide mt-1">Success</div>
                        </div>
                        <div>
                            <div class="text-3xl font-display font-bold text-gray-900">5yr</div>
                            <div class="text-sm text-gray-500 font-medium uppercase tracking-wide mt-1">Experience</div>
                        </div>
                    </div>
                </div>

                <div class="relative hidden lg:block h-[600px] w-full">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-md">

                        <div class="glass-morphism-card absolute top-0 left-12 w-full p-6 rounded-3xl opacity-60 scale-90 -rotate-6 z-0">
                            <div class="h-4 w-1/3 bg-gray-200 rounded mb-4"></div>
                            <div class="space-y-2">
                                <div class="h-3 w-full bg-gray-100 rounded"></div>
                                <div class="h-3 w-5/6 bg-gray-100 rounded"></div>
                            </div>
                        </div>

                        <div class="glass-morphism-card absolute top-8 -left-4 w-full p-6 rounded-3xl opacity-80 scale-95 rotate-3 z-10">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-10 h-10 rounded-full bg-blue-100"></div>
                                <div class="h-4 w-1/2 bg-gray-200 rounded"></div>
                            </div>
                            <div class="space-y-3">
                                <div class="h-20 w-full bg-blue-50/50 rounded-xl border border-blue-100"></div>
                                <div class="flex gap-2">
                                    <div class="h-8 w-20 bg-gray-100 rounded-lg"></div>
                                    <div class="h-8 w-20 bg-gray-100 rounded-lg"></div>
                                </div>
                            </div>
                        </div>

                        <div class="glass-morphism-card relative w-full p-8 rounded-3xl z-20 hover:-translate-y-2 transition-transform duration-500 shadow-2xl shadow-blue-900/10">
                            <div class="flex justify-between items-start mb-8">
                                <div class="icon-modern bg-estonia-blue text-white">
                                    <i class="fas fa-robot text-xl"></i>
                                </div>
                                <span class="px-3 py-1 rounded-full bg-purple-100 text-purple-700 text-xs font-bold uppercase tracking-wider">AI Powered</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Next-Gen Agents</h3>
                            <p class="text-gray-600 mb-6">Automating complex workflows with intelligent AI agents that work 24/7.</p>
                            <div class="w-full bg-gray-100 rounded-full h-2 overflow-hidden">
                                <div class="bg-estonia-blue h-full w-[85%] rounded-full"></div>
                            </div>
                            <div class="flex justify-between mt-2 text-xs text-gray-500 font-medium">
                                <span>Efficiency</span>
                                <span>99%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 border-y border-gray-100 bg-white/50 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-6">
            <p class="text-center text-sm font-semibold text-gray-400 uppercase tracking-widest mb-8">Powered by Modern Technology</p>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                <i class="fab fa-laravel text-4xl hover:text-red-600 transition-colors" title="Laravel"></i>
                <i class="fas fa-brain text-4xl hover:text-purple-600 transition-colors" title="OpenAI / AI"></i> <i class="fab fa-react text-4xl hover:text-blue-400 transition-colors" title="React"></i>
                <i class="fab fa-vuejs text-4xl hover:text-green-500 transition-colors" title="Vue.js"></i>
                <i class="fab fa-aws text-4xl hover:text-orange-500 transition-colors" title="AWS"></i>
                <i class="fab fa-docker text-4xl hover:text-blue-600 transition-colors" title="Docker"></i>
            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-50/50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-estonia-blue font-bold tracking-wider uppercase text-sm">What We Do</span>
                <h2 class="font-display font-bold text-4xl mt-3 mb-6">Comprehensive IT Solutions</h2>
                <p class="text-gray-600">We don't just write code; we solve business problems through technology and AI.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-600 to-estonia-blue rounded-3xl -rotate-1 translate-y-2 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="glass-morphism-card p-8 rounded-3xl relative bg-white hover:-translate-y-2 transition-transform duration-300 h-full border border-gray-100">
                        <div class="w-14 h-14 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h3 class="text-xl font-bold font-display mb-3">AI Agents</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">Intelligent bots that automate customer support, data analysis, and complex workflows 24/7.</p>
                        <a href="{{ route('services') }}" wire:navigate class="text-sm font-bold text-gray-900 group-hover:text-purple-600 transition-colors">Read more &rarr;</a>
                    </div>
                </div>

                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-estonia-blue to-blue-600 rounded-3xl -rotate-1 translate-y-2 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="glass-morphism-card p-8 rounded-3xl relative bg-white hover:-translate-y-2 transition-transform duration-300 h-full border border-gray-100">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-estonia-blue flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="text-xl font-bold font-display mb-3">Custom Software</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">Tailor-made web applications built with Laravel to fit your exact business workflows.</p>
                        <a href="{{ route('services') }}" wire:navigate class="text-sm font-bold text-gray-900 group-hover:text-estonia-blue transition-colors">Read more &rarr;</a>
                    </div>
                </div>

                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-estonia-blue to-blue-600 rounded-3xl -rotate-1 translate-y-2 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="glass-morphism-card p-8 rounded-3xl relative bg-white hover:-translate-y-2 transition-transform duration-300 h-full border border-gray-100">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-estonia-blue flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-mobile-screen"></i>
                        </div>
                        <h3 class="text-xl font-bold font-display mb-3">Mobile Apps</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">High-performance native and cross-platform mobile applications for iOS and Android.</p>
                        <a href="{{ route('services') }}" wire:navigate class="text-sm font-bold text-gray-900 group-hover:text-estonia-blue transition-colors">Read more &rarr;</a>
                    </div>
                </div>

                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-estonia-blue to-blue-600 rounded-3xl -rotate-1 translate-y-2 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="glass-morphism-card p-8 rounded-3xl relative bg-white hover:-translate-y-2 transition-transform duration-300 h-full border border-gray-100">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-estonia-blue flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h3 class="text-xl font-bold font-display mb-3">Cloud Solutions</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">Secure cloud infrastructure, migration services, and DevOps automation.</p>
                        <a href="{{ route('services') }}" wire:navigate class="text-sm font-bold text-gray-900 group-hover:text-estonia-blue transition-colors">Read more &rarr;</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1 relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-estonia-blue to-blue-400 rounded-[2.5rem] rotate-3 opacity-20 blur-lg"></div>
                    <div class="relative rounded-[2rem] overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1531746790731-6c087fecd65a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                             alt="AI Technology"
                             class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700">
                        <div class="absolute bottom-0 left-0 right-0 p-8 bg-gradient-to-t from-black/80 to-transparent">
                            <p class="text-white font-medium text-lg">"The future is automated."</p>
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2 space-y-6">
                    <span class="text-estonia-blue font-bold tracking-wider uppercase text-sm">Why Choose Nivora</span>
                    <h2 class="font-display font-bold text-4xl lg:text-5xl">
                        World-Class Engineering <br>
                        <span class="text-gray-400">From e-Estonia</span>
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Based in Tallinn, the digital capital of Europe, we bring the Estonian mindset of efficiency, innovation, and digital-first thinking to every project.
                    </p>

                    <ul class="space-y-4 pt-4">
                        @foreach(['AI-Driven Development', 'Transparent Process', 'Agile Methodologies', 'GDPR Compliance Experts'] as $item)
                            <li class="flex items-center gap-3">
                                <div class="w-6 h-6 rounded-full bg-estonia-light flex items-center justify-center text-estonia-blue text-xs">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="font-medium text-gray-700">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <div class="pt-6">
                        <a href="{{ route('about') }}" wire:navigate class="text-estonia-blue font-bold hover:gap-4 gap-2 inline-flex items-center transition-all">
                            Learn more about us <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-5xl mx-auto px-6 lg:px-8">
            <div class="relative rounded-[3rem] overflow-hidden bg-gradient-to-br from-estonia-blue to-blue-900 px-6 py-20 text-center text-white shadow-2xl">
                <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-5 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
                <div class="absolute bottom-0 right-0 w-64 h-64 bg-blue-400 opacity-20 rounded-full translate-x-1/2 translate-y-1/2 blur-3xl"></div>

                <div class="relative z-10">
                    <h2 class="font-display font-bold text-4xl md:text-5xl mb-6">Ready to Innovate?</h2>
                    <p class="text-blue-100 text-lg max-w-2xl mx-auto mb-10">
                        Let's discuss how AI Agents and custom software can help your business thrive.
                        Free consultation, no strings attached.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="{{ route('contact') }}" wire:navigate class="bg-white text-estonia-blue px-8 py-4 rounded-xl font-bold text-lg hover:shadow-lg hover:scale-105 transition-all">
                            Book a Call
                        </a>
                        <a href="{{ route('team') }}" wire:navigate class="bg-blue-800/50 backdrop-blur-sm border border-blue-400/30 text-white px-8 py-4 rounded-xl font-bold text-lg hover:bg-blue-800/70 transition-all">
                            Meet the Team
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
