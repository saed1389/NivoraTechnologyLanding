<div class="pt-32 pb-20 relative">
    <div class="absolute top-20 right-0 -z-10 opacity-50">
        <div class="blob blob-2"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16">

            <div class="space-y-8 animate-slide-up">
                <span class="text-estonia-blue font-bold tracking-wider uppercase text-sm">Get in touch</span>
                <h1 class="font-display font-bold text-5xl lg:text-6xl">
                    Let's Start <br>
                    <span class="text-gradient">Your Project</span>
                </h1>
                <p class="text-xl text-gray-600">
                    Ready to transform your ideas into reality? Fill out the form or reach us via email.
                </p>

                <div class="space-y-6 pt-8">
                    <div class="flex items-center gap-6 p-4 bg-white/60 backdrop-blur-sm rounded-2xl border border-white/50 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-estonia-blue text-white rounded-full flex items-center justify-center text-xl shadow-lg shadow-blue-500/30">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Email Us</p>
                            <a href="mailto:info@nivora.ee" class="text-gray-600 hover:text-estonia-blue">info@nivora.ee</a>
                        </div>
                    </div>

                    <div class="flex items-center gap-6 p-4 bg-white/60 backdrop-blur-sm rounded-2xl border border-white/50 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-gray-800 text-white rounded-full flex items-center justify-center text-xl shadow-lg shadow-gray-500/30">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Visit Us</p>
                            <p class="text-gray-600">Rotermanni 6, 10111 Tallinn, Estonia</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="glass-morphism-card rounded-3xl p-8 lg:p-10 relative">

                @if($success)
                    <div class="absolute inset-0 bg-white/95 backdrop-blur-md z-20 rounded-3xl flex flex-col items-center justify-center text-center p-8 animate-slide-up">
                        <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center text-green-500 text-3xl mb-4 shadow-lg">
                            <i class="fas fa-check"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Message Sent!</h3>
                        <p class="text-gray-600">Thank you for contacting us. We will get back to you shortly.</p>
                        <button wire:click="$set('success', false)" class="mt-6 text-estonia-blue font-bold hover:underline">Send another</button>
                    </div>
                @endif

                <form wire:submit="submit" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="form-label">Name</label>
                            <input wire:model="name" type="text" class="form-input-modern @error('name') border-red-500 @enderror" placeholder="John Doe">
                            @error('name') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="form-label">Email</label>
                            <input wire:model="email" type="email" class="form-input-modern @error('email') border-red-500 @enderror" placeholder="john@company.com">
                            @error('email') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div>
                        <label class="form-label">Subject</label>
                        <input wire:model="subject" type="text" class="form-input-modern @error('subject') border-red-500 @enderror" placeholder="Project Inquiry">
                        @error('subject') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="form-label">Message</label>
                        <textarea wire:model="message" rows="5" class="form-input-modern resize-none @error('message') border-red-500 @enderror" placeholder="Tell us about your project..."></textarea>
                        @error('message') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn-primary-modern w-full justify-center group" wire:loading.attr="disabled">
                        <span wire:loading.remove>Send Message</span>
                        <span wire:loading><i class="fas fa-spinner fa-spin mr-2"></i> Sending...</span>
                        <i class="fas fa-paper-plane ml-2 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" wire:loading.remove></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
