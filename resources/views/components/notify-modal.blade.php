<div id="notify-modal" class="fixed inset-0 z-[60] hidden items-center justify-center p-4" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="notify-modal-title">
    <div id="notify-modal-backdrop" class="absolute inset-0 bg-brand-navy/80 backdrop-blur-sm"></div>

    <div class="relative w-full max-w-md bg-white rounded-2xl shadow-2xl overflow-hidden animate-[notifyIn_0.2s_ease-out]">
        <div class="bg-brand-navy px-6 py-5 flex items-center justify-between">
            <h2 id="notify-modal-title" class="text-lg font-semibold text-white">Get notified</h2>
            <button type="button" id="notify-modal-close" class="w-8 h-8 inline-flex items-center justify-center rounded-lg text-white/70 hover:text-white hover:bg-white/10 transition-colors duration-200" aria-label="Close">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <div id="notify-modal-body" class="p-6">
            <p class="text-sm text-brand-navy/70 mb-6">
                We're building something amazing. Leave your details and we'll notify you when it launches.
            </p>

            <form id="notify-form" class="space-y-5" novalidate>
                <div>
                    <label for="notify-name" class="block text-sm font-medium text-brand-navy mb-1.5">Name</label>
                    <input type="text" id="notify-name" name="name" autocomplete="name" placeholder="Your name" required
                        class="w-full px-4 py-3 text-sm text-brand-navy bg-brand-light border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-brand-orange transition-all duration-200 placeholder:text-brand-navy/40">
                    <p class="notify-error mt-1.5 text-xs text-red-600 hidden" data-for="name"></p>
                </div>

                <div>
                    <label for="notify-email" class="block text-sm font-medium text-brand-navy mb-1.5">Email</label>
                    <input type="email" id="notify-email" name="email" autocomplete="email" placeholder="you@example.com" required
                        class="w-full px-4 py-3 text-sm text-brand-navy bg-brand-light border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-brand-orange transition-all duration-200 placeholder:text-brand-navy/40">
                    <p class="notify-error mt-1.5 text-xs text-red-600 hidden" data-for="email"></p>
                </div>

                <div>
                    <label for="notify-phone" class="block text-sm font-medium text-brand-navy mb-1.5">Phone <span class="text-brand-navy/40 font-normal">(optional)</span></label>
                    <input type="tel" id="notify-phone" name="phone" autocomplete="tel" placeholder="+234 800 000 0000"
                        class="w-full px-4 py-3 text-sm text-brand-navy bg-brand-light border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-brand-orange transition-all duration-200 placeholder:text-brand-navy/40">
                    <p class="notify-error mt-1.5 text-xs text-red-600 hidden" data-for="phone"></p>
                </div>

                <button type="submit" id="notify-submit" class="w-full inline-flex items-center justify-center gap-2 px-8 py-3.5 text-sm font-semibold text-white bg-brand-orange rounded-xl hover:bg-orange-600 disabled:opacity-60 disabled:cursor-not-allowed transition-all duration-200 shadow-lg hover:shadow-xl">
                    <svg id="notify-submit-icon" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                    <span>Notify Me</span>
                </button>
            </form>
        </div>
    </div>
</div>

@push('styles')
    @keyframes notifyIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }
@endpush
