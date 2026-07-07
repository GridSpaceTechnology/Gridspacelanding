<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-lg transition-all duration-300 border-b border-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">

            <div class="flex-shrink-0">
                <a href="/" class="flex items-center gap-2.5">
                    <img src="{{ asset('images/logo.jpeg') }}" alt="GridSpace" class="h-8 w-auto">
                    <span class="text-2xl font-bold tracking-tight text-brand-navy">Grid<span class="text-brand-orange">Space</span></span>
                </a>
            </div>

            <div class="hidden lg:flex items-center gap-1">
                <a href="#how-it-works" class="relative px-4 py-2 text-sm font-medium text-brand-navy/80 hover:text-brand-orange transition-colors duration-200 after:absolute after:bottom-0 after:left-4 after:right-4 after:h-0.5 after:bg-brand-orange after:scale-x-0 after:origin-left after:transition-transform after:duration-200 hover:after:scale-x-100">How It Works</a>
                <a href="#marketplace" class="relative px-4 py-2 text-sm font-medium text-brand-navy/80 hover:text-brand-orange transition-colors duration-200 after:absolute after:bottom-0 after:left-4 after:right-4 after:h-0.5 after:bg-brand-orange after:scale-x-0 after:origin-left after:transition-transform after:duration-200 hover:after:scale-x-100">Marketplace</a>
                <a href="#about" class="relative px-4 py-2 text-sm font-medium text-brand-navy/80 hover:text-brand-orange transition-colors duration-200 after:absolute after:bottom-0 after:left-4 after:right-4 after:h-0.5 after:bg-brand-orange after:scale-x-0 after:origin-left after:transition-transform after:duration-200 hover:after:scale-x-100">About</a>
            </div>

            <div class="hidden lg:flex items-center gap-3">
                <a href="#become-host" class="px-4 py-2 text-sm font-medium text-brand-navy/80 hover:text-brand-orange transition-colors duration-200">Become a Host</a>
                <a href="#register" class="inline-flex items-center gap-2 px-6 py-2.5 text-sm font-semibold text-white bg-[#EB5333] rounded-lg hover:bg-white hover:text-[#EB5333] border-2 border-[#EB5333] transition-all duration-200 shadow-sm hover:shadow-md">
                    Register
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

            <button id="menu-toggle" class="lg:hidden relative w-10 h-10 rounded-lg text-brand-navy hover:text-brand-orange hover:bg-brand-light transition-colors duration-200" aria-label="Toggle menu">
                <span id="menu-icon-open" class="absolute inset-0 flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </span>
                <span id="menu-icon-close" class="absolute inset-0 flex items-center justify-center hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </span>
            </button>

        </div>
    </div>

    <div id="mobile-menu" class="hidden lg:hidden border-t border-gray-100 bg-white/95 backdrop-blur-lg">
        <div class="px-4 py-5 space-y-1">
            <a href="#how-it-works" class="block px-4 py-3 text-sm font-medium text-brand-navy/80 hover:text-brand-orange hover:bg-brand-light rounded-lg transition-colors duration-200">How It Works</a>
            <a href="#marketplace" class="block px-4 py-3 text-sm font-medium text-brand-navy/80 hover:text-brand-orange hover:bg-brand-light rounded-lg transition-colors duration-200">Marketplace</a>
            <a href="#about" class="block px-4 py-3 text-sm font-medium text-brand-navy/80 hover:text-brand-orange hover:bg-brand-light rounded-lg transition-colors duration-200">About</a>
            <hr class="my-2 border-gray-100">
            <a href="#become-host" class="block px-4 py-3 text-sm font-medium text-brand-navy/80 hover:text-brand-orange hover:bg-brand-light rounded-lg transition-colors duration-200">Become a Host</a>
            <a href="#register" class="block text-center px-4 py-3 text-sm font-semibold text-white bg-[#EB5333] rounded-lg hover:bg-white hover:text-[#EB5333] border-2 border-[#EB5333] transition-all duration-200 mt-2">
                Register
            </a>
        </div>
    </div>
</nav>
