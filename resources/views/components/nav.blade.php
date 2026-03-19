<nav x-data="{ mobileMenuOpen: false }" class="sticky top-0 w-full z-50 bg-brand-white shadow-md border-b border-gray-200">
    <div class="max-w-[1600px] w-full mx-auto px-4 sm:px-6 lg:px-12 xl:px-20">
        
        <div class="flex justify-between items-center h-20 lg:h-28">
            
            <div class="flex-shrink-0 flex items-center overflow-hidden">
                <a href="/" class="flex items-center gap-3 sm:gap-4 group">
                    
                    <img class="h-14 sm:h-16 lg:h-20 w-auto drop-shadow-sm transition-transform duration-300 group-hover:scale-105" src="{{ asset('images/main-logo.png') }}" alt="Jain Agro Industries Logo Mark">
                    
                    <div class="flex flex-col justify-center border-l-2 border-brand-gold/30 pl-3 lg:pl-4">
                        <span class="font-serif font-bold text-brand-charcoal text-lg sm:text-2xl lg:text-3xl tracking-wide lg:tracking-wider leading-none whitespace-nowrap">
                            JAIN AGRO INDUSTRIES
                        </span>
                        <span class="font-sans font-bold text-brand-gold text-[10px] sm:text-xs lg:text-sm uppercase tracking-[0.2em] lg:tracking-[0.25em] mt-1 lg:mt-2">
                            Since 1981
                        </span>
                    </div>
                </a>
            </div>

            <div class="hidden xl:flex xl:items-center xl:space-x-10">
                <a href="/" class="group relative py-2 text-brand-charcoal hover:text-brand-green font-sans font-bold text-base uppercase tracking-wider transition-colors">
                    Home
                    <span class="absolute bottom-0 left-0 w-full h-[3px] bg-brand-green origin-left scale-x-0 transition-transform duration-300 ease-out group-hover:scale-x-100"></span>
                </a>
                
                <a href="/about" class="group relative py-2 text-brand-charcoal hover:text-brand-green font-sans font-bold text-base uppercase tracking-wider transition-colors">
                    About Us
                    <span class="absolute bottom-0 left-0 w-full h-[3px] bg-brand-green origin-left scale-x-0 transition-transform duration-300 ease-out group-hover:scale-x-100"></span>
                </a>
                
                <a href="/products" class="group relative py-2 text-brand-charcoal hover:text-brand-green font-sans font-bold text-base uppercase tracking-wider transition-colors">
                    Products
                    <span class="absolute bottom-0 left-0 w-full h-[3px] bg-brand-green origin-left scale-x-0 transition-transform duration-300 ease-out group-hover:scale-x-100"></span>
                </a>
                
                <a href="/contact" class="group relative py-2 text-brand-charcoal hover:text-brand-green font-sans font-bold text-base uppercase tracking-wider transition-colors">
                    Contact Us
                    <span class="absolute bottom-0 left-0 w-full h-[3px] bg-brand-green origin-left scale-x-0 transition-transform duration-300 ease-out group-hover:scale-x-100"></span>
                </a>
                
                <a href="/contact" class="ml-4 bg-brand-charcoal text-white px-8 py-3.5 rounded-full font-sans font-bold text-base uppercase tracking-wider hover:bg-brand-green transition-colors shadow-sm hover:shadow-md">
                    Get Quote
                </a>
            </div>

            <div class="flex items-center xl:hidden pl-2">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="text-brand-charcoal hover:text-brand-green focus:outline-none">
                    <svg class="h-8 w-8 sm:h-9 sm:w-9" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" style="display: none;" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform -translate-y-2"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         class="xl:hidden bg-brand-white shadow-xl absolute top-full left-0 w-full border-t border-gray-100" 
         style="display: none;">
        <div class="px-4 pt-2 pb-6 space-y-2">
            <a href="/" class="block px-3 py-3.5 text-brand-charcoal font-sans font-bold text-base uppercase tracking-wider hover:text-brand-green hover:bg-gray-50 border-l-4 border-transparent hover:border-brand-green transition-all">Home</a>
            <a href="/about" class="block px-3 py-3.5 text-brand-charcoal font-sans font-bold text-base uppercase tracking-wider hover:text-brand-green hover:bg-gray-50 border-l-4 border-transparent hover:border-brand-green transition-all">About Us</a>
            <a href="/products" class="block px-3 py-3.5 text-brand-charcoal font-sans font-bold text-base uppercase tracking-wider hover:text-brand-green hover:bg-gray-50 border-l-4 border-transparent hover:border-brand-green transition-all">Products</a>
            <a href="/contact" class="block px-3 py-3.5 text-brand-charcoal font-sans font-bold text-base uppercase tracking-wider hover:text-brand-green hover:bg-gray-50 border-l-4 border-transparent hover:border-brand-green transition-all">Contact Us</a>
            
            <a href="/contact" class="block px-3 py-4 mt-4 text-center bg-brand-charcoal text-white font-sans font-bold text-base uppercase tracking-wider rounded-full hover:bg-brand-green shadow-sm">
                Get Quote
            </a>
        </div>
    </div>
</nav>