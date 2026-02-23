<div class="pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 -z-10 h-full w-full bg-white">
        <div class="absolute h-full w-full bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px] [mask-image:radial-gradient(ellipse_50%_50%_at_50%_50%,#000_70%,transparent_100%)]"></div>
        <div class="absolute top-1/2 left-0 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-r from-blue-100/40 via-estonia-blue/10 to-blue-100/40 blur-[100px] rounded-full"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16">
            <div class="space-y-8 animate-slide-up">
                <span class="text-estonia-blue font-bold tracking-wider uppercase text-sm">{{ __('all.get_in_touch') }}</span>
                <h1 class="font-display font-bold text-5xl lg:text-6xl">
                    {{ __('all.lets_start') }} <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-estonia-blue to-blue-500">{{ __('all.your_project') }}</span>
                </h1>
                <p class="text-xl text-gray-600">
                    {{ __('all.contact_desc') }}
                </p>
                <div class="space-y-6 pt-8">
                    <div class="flex items-center gap-6 p-4 bg-white/60 backdrop-blur-sm rounded-2xl border border-white/50 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-estonia-blue text-white rounded-full flex items-center justify-center text-xl shadow-lg shadow-blue-500/30">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">{{ __('all.email_us') }}</p>
                            <a href="mailto:info@nivoratechnology.ee" class="text-gray-600 hover:text-estonia-blue">info@nivoratechnology.ee</a>
                            <a href="mailto:info@nivoratechnology.com" class="text-gray-600 hover:text-estonia-blue">info@nivoratechnology.com</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-6 p-4 bg-white/60 backdrop-blur-sm rounded-2xl border border-white/50 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-gray-800 text-white rounded-full flex items-center justify-center text-xl shadow-lg shadow-gray-500/30">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">{{ __('all.visit_us') }}</p>
                            <p class="text-gray-600">Harju maakond, Tallinn, Põhja-Tallinna linnaosa, Telliskivi tn 57, 10412, Tallinn, Estonia</p>
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
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ __('all.msg_sent') }}</h3>
                        <p class="text-gray-600">{{ __('all.msg_thank_you') }}</p>
                        <button wire:click="$set('success', false)" class="mt-6 text-estonia-blue font-bold hover:underline">{{ __('all.send_another') }}</button>
                    </div>
                @endif
                <form wire:submit="submit" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">{{ __('all.label_name') }}</label>
                            <input wire:model="name" type="text" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-estonia-blue/20 focus:border-estonia-blue transition-all @error('name') border-red-500 @enderror" placeholder="{{ __('all.placeholder_name') }}">
                            @error('name') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">{{ __('all.label_email') }}</label>
                            <input wire:model="email" type="email" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-estonia-blue/20 focus:border-estonia-blue transition-all @error('email') border-red-500 @enderror" placeholder="{{ __('all.placeholder_email') }}">
                            @error('email') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">{{ __('all.label_subject') }}</label>
                        <input wire:model="subject" type="text" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-estonia-blue/20 focus:border-estonia-blue transition-all @error('subject') border-red-500 @enderror" placeholder="{{ __('all.placeholder_subject') }}">
                        @error('subject') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">{{ __('all.label_message') }}</label>
                        <textarea wire:model="message" rows="5" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 resize-none focus:outline-none focus:ring-2 focus:ring-estonia-blue/20 focus:border-estonia-blue transition-all @error('message') border-red-500 @enderror" placeholder="{{ __('all.placeholder_message') }}"></textarea>
                        @error('message') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="w-full bg-estonia-blue text-white font-bold py-4 rounded-xl shadow-lg shadow-blue-500/30 hover:shadow-blue-500/40 hover:-translate-y-1 transition-all duration-300 flex items-center justify-center group" wire:loading.attr="disabled">
                        <span wire:loading.remove>{{ __('all.btn_send') }}</span>
                        <span wire:loading><i class="fas fa-spinner fa-spin mr-2"></i> {{ __('all.btn_sending') }}</span>
                        <i class="fas fa-paper-plane ml-2 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" wire:loading.remove></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
