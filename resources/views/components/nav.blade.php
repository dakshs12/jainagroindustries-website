<nav x-data="{ mobileMenuOpen: false }" class="sticky top-0 w-full z-50 bg-brand-white shadow-md border-b border-gray-200">
    <div class="max-w-[1600px] w-full mx-auto px-4 sm:px-6 lg:px-8 xl:px-12">
        
        <div class="flex justify-between items-center h-20 lg:h-24">
            
            {{-- BRAND LOGO & TITLE --}}
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center gap-2.5 sm:gap-3.5 lg:gap-4 group">
                    
                    <img class="h-12 sm:h-14 lg:h-16 w-auto drop-shadow-sm transition-transform duration-300 group-hover:scale-105" 
                         src="{{ asset('images/main-logo.png') }}" 
                         alt="Jain Agro Industries Logo Mark">
                    
                    <div class="flex flex-col justify-center border-l-2 border-brand-gold/30 pl-2.5 sm:pl-3 lg:pl-4">
                        <span class="font-serif font-bold text-brand-charcoal text-base sm:text-xl lg:text-2xl xl:text-3xl tracking-wide leading-none whitespace-nowrap">
                            JAIN AGRO INDUSTRIES
                        </span>
                        <span class="font-sans font-bold text-brand-gold text-[9px] sm:text-[10px] lg:text-xs uppercase tracking-[0.2em] lg:tracking-[0.25em] mt-1 lg:mt-1.5 whitespace-nowrap">
                            Since 1981
                        </span>
                    </div>
                </a>
            </div>

            {{-- DESKTOP LINKS (Fluid and responsive) --}}
            <div class="hidden lg:flex items-center gap-4 xl:gap-8 flex-shrink-0">
                <a href="/" class="group relative py-2 text-brand-charcoal hover:text-brand-green font-sans font-bold text-xs xl:text-sm uppercase tracking-wider transition-colors whitespace-nowrap">
                    Home
                    <span class="absolute bottom-0 left-0 w-full h-[2px] bg-brand-green origin-left scale-x-0 transition-transform duration-300 ease-out group-hover:scale-x-100"></span>
                </a>
                
                <a href="/about" class="group relative py-2 text-brand-charcoal hover:text-brand-green font-sans font-bold text-xs xl:text-sm uppercase tracking-wider transition-colors whitespace-nowrap">
                    About Us
                    <span class="absolute bottom-0 left-0 w-full h-[2px] bg-brand-green origin-left scale-x-0 transition-transform duration-300 ease-out group-hover:scale-x-100"></span>
                </a>
                
                <a href="/products" class="group relative py-2 text-brand-charcoal hover:text-brand-green font-sans font-bold text-xs xl:text-sm uppercase tracking-wider transition-colors whitespace-nowrap">
                    Products
                    <span class="absolute bottom-0 left-0 w-full h-[2px] bg-brand-green origin-left scale-x-0 transition-transform duration-300 ease-out group-hover:scale-x-100"></span>
                </a>
                
                <a href="/contact" class="group relative py-2 text-brand-charcoal hover:text-brand-green font-sans font-bold text-xs xl:text-sm uppercase tracking-wider transition-colors whitespace-nowrap">
                    Contact Us
                    <span class="absolute bottom-0 left-0 w-full h-[2px] bg-brand-green origin-left scale-x-0 transition-transform duration-300 ease-out group-hover:scale-x-100"></span>
                </a>
                
                <a href="/contact" class="ml-1 xl:ml-2 bg-brand-charcoal text-white px-5 xl:px-7 py-2.5 xl:py-3 rounded-full font-sans font-bold text-xs xl:text-sm uppercase tracking-wider hover:bg-brand-green transition-all shadow-sm hover:shadow-md whitespace-nowrap flex-shrink-0">
                    Get Quote
                </a>
            </div>

            {{-- MOBILE / TABLET MENU TOGGLE BUTTON --}}
            <div class="flex items-center lg:hidden pl-2">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="text-brand-charcoal hover:text-brand-green focus:outline-none p-1">
                    <svg class="h-7 w-7 sm:h-8 sm:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" style="display: none;" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- MOBILE MENU DROPDOWN --}}
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform -translate-y-2"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         class="lg:hidden bg-brand-white shadow-xl absolute top-full left-0 w-full border-t border-gray-100" 
         style="display: none;">
        <div class="px-4 pt-2 pb-6 space-y-2">
            <a href="/" class="block px-3 py-3 text-brand-charcoal font-sans font-bold text-sm sm:text-base uppercase tracking-wider hover:text-brand-green hover:bg-gray-50 border-l-4 border-transparent hover:border-brand-green transition-all">Home</a>
            <a href="/about" class="block px-3 py-3 text-brand-charcoal font-sans font-bold text-sm sm:text-base uppercase tracking-wider hover:text-brand-green hover:bg-gray-50 border-l-4 border-transparent hover:border-brand-green transition-all">About Us</a>
            <a href="/products" class="block px-3 py-3 text-brand-charcoal font-sans font-bold text-sm sm:text-base uppercase tracking-wider hover:text-brand-green hover:bg-gray-50 border-l-4 border-transparent hover:border-brand-green transition-all">Products</a>
            <a href="/contact" class="block px-3 py-3 text-brand-charcoal font-sans font-bold text-sm sm:text-base uppercase tracking-wider hover:text-brand-green hover:bg-gray-50 border-l-4 border-transparent hover:border-brand-green transition-all">Contact Us</a>
            
            <a href="/contact" class="block px-3 py-3.5 mt-3 text-center bg-brand-charcoal text-white font-sans font-bold text-sm sm:text-base uppercase tracking-wider rounded-full hover:bg-brand-green shadow-sm">
                Get Quote
            </a>
        </div>
    </div>
</nav>