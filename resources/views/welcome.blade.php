<x-layouts.app>
    <section class="relative w-full aspect-[4/3] sm:aspect-video md:aspect-auto md:h-[calc(100vh-80px)] lg:h-[calc(100vh-96px)] flex flex-col items-center justify-center bg-[#111] overflow-hidden">
        
        <div class="absolute inset-0 w-full h-full z-0">
            <div class="swiper heroSwiper h-full w-full">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide relative">
                        <img src="{{ asset('images/slider1.png') }}" class="absolute inset-0 w-full h-full object-cover object-center" alt="Jain Agro Industries">
                        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>
                    </div>

                    <div class="swiper-slide relative">
                        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover object-center">
                            <source src="{{ asset('images/ship.MP4') }}" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>
                    </div>

                </div>
            </div>
        </div>

        <div class="relative z-10 flex flex-col items-center justify-center text-center px-4 w-full h-full pointer-events-none">
            
            <h1 class="text-white font-serif text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-bold tracking-tight mb-2 md:mb-6 drop-shadow-lg leading-tight">
                Indian Origin. <br class="md:hidden"> Global Standards.
            </h1>
            
            <p class="mt-1 md:mt-4 text-xs sm:text-base md:text-xl text-gray-200 font-sans max-w-3xl drop-shadow-md mb-4 md:mb-10 px-2 line-clamp-2 md:line-clamp-none">
                A heritage agricultural enterprise delivering premium pulses, grains, and industrial processing since 1981.
            </p>
            
            <div class="flex flex-row gap-3 md:gap-4 pointer-events-auto">
                <a href="/products" class="bg-brand-green text-white px-4 py-2 md:px-8 md:py-3.5 rounded-md font-sans font-medium hover:bg-brand-gold transition-all duration-300 shadow-lg text-xs md:text-lg">
                    Explore Products
                </a>
                <a href="/contact" class="bg-transparent border border-white md:border-2 text-white px-4 py-2 md:px-8 md:py-3.5 rounded-md font-sans font-medium hover:bg-white hover:text-brand-charcoal transition-all duration-300 shadow-lg text-xs md:text-lg">
                    Get a Quote
                </a>
            </div>
            
        </div>
    </section>

    <section class="relative py-24 md:py-32 bg-[#0B1511] overflow-hidden">
        
        <!-- Background Facility Image: Crisp, unblurred with balanced cinematic overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/welcome_bg.png') }}" class="w-full h-full object-cover object-center" alt="Jain Agro Industries Facility">
            <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/45 to-black/75"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-black/60"></div>
            <!-- Smooth bottom transition to next section -->
            <div class="absolute -bottom-[2px] left-0 right-0 h-16 md:h-24 bg-gradient-to-t from-[#FCF8F2] to-transparent pointer-events-none"></div>
        </div>

        <div class="relative z-10 max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-12 xl:px-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">

                <!-- Left Column: Headlines, Legacy callout, first paragraph & Desktop CTA -->
                <div class="lg:col-span-7 gs-reveal">
                    <div class="inline-flex items-center gap-3 mb-4">
                        <span class="w-10 h-[2px] bg-brand-gold"></span>
                        <span class="text-brand-gold font-sans uppercase tracking-[0.25em] text-xs font-bold">JAIN AGRO INDUSTRIES</span>
                    </div>

                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl lg:text-5xl xl:text-6xl font-bold text-white mb-6 tracking-wide leading-tight drop-shadow-lg">
                        Rooted in Trust. <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#D4AF37] via-[#F3E5AB] to-[#D4AF37]">
                            Driven by Precision <br class="sm:hidden">Since 1981.
                        </span>
                    </h2>

                    <p class="font-serif text-lg sm:text-xl text-[#F3E5AB] italic mb-6 leading-relaxed drop-shadow">
                        The Legacy of Jain Traders, Badnagar. The Foundation of Jain Agro Industries.
                    </p>

                    <p class="font-sans text-base sm:text-lg text-gray-200 leading-relaxed font-light mb-8 drop-shadow">
                        Built on the longstanding market presence of Jain Traders, Badnagar, Jain Agro Industries brings together generations of agricultural trading expertise and an expanding portfolio of businesses.
                    </p>

                    <!-- Desktop button (balances the left column height) -->
                    <div class="hidden lg:block pt-2">
                        <a href="/about" class="inline-flex items-center gap-3 bg-brand-green hover:bg-brand-gold text-white px-7 py-3.5 rounded-lg font-sans font-semibold tracking-wider text-sm uppercase transition-all duration-300 shadow-xl hover:shadow-brand-gold/25 hover:scale-[1.02] group">
                            <span>Explore Our Story</span>
                            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Agricultural commodities trade & international ambition -->
                <div class="lg:col-span-5 relative gs-reveal-delayed">
                    <div class="hidden lg:block absolute left-0 top-0 w-1 h-full bg-brand-gold/60 rounded-full"></div>
                    
                    <div class="lg:pl-10 space-y-6">
                        <div class="w-16 h-1 bg-brand-gold mb-6 rounded-full lg:hidden"></div>
                        
                        <p class="font-sans text-base sm:text-lg text-gray-100 leading-relaxed drop-shadow">
                            A prominent stockist of agricultural commodities, with <span class="font-semibold text-white">Kabuli Chana</span> at the heart of our trade, we combine established market relationships and strategic sourcing with large-scale stocking, procurement, processing and storage capabilities.
                        </p>

                        <p class="font-sans text-base sm:text-lg text-gray-200 leading-relaxed drop-shadow">
                            From our roots in <span class="text-brand-gold font-medium">Badnagar</span> to our growing ambitions in international markets, we continue to build on a legacy defined by <span class="font-semibold text-white">trust, market understanding and an unwavering commitment to quality</span>.
                        </p>

                        <!-- Mobile button (positioned after all paragraphs) -->
                        <div class="lg:hidden pt-4">
                            <a href="/about" class="inline-flex items-center justify-center w-full sm:w-auto gap-3 bg-brand-green hover:bg-brand-gold text-white px-7 py-3.5 rounded-lg font-sans font-semibold tracking-wider text-sm uppercase transition-all duration-300 shadow-xl hover:shadow-brand-gold/25 group">
                                <span>Explore Our Story</span>
                                <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-[#FCF8F2] border-y border-[#F0EBE1] overflow-hidden">
        
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mb-16 text-center">
            <h3 class="font-serif text-3xl md:text-4xl font-bold text-brand-charcoal tracking-wide">Our Business Units</h3>
            <div class="w-16 h-1 bg-brand-gold mx-auto mt-5 rounded-full opacity-90"></div>
        </div>
        
        <div class="swiper businessUnitsSwiper w-full px-4">
            <div class="swiper-wrapper items-center">
                
                <div class="swiper-slide flex justify-center">
                    <img src="{{ asset('images/garvit-logo.png') }}" class="h-32 md:h-40 lg:h-48 w-auto object-contain transition-transform duration-300 hover:scale-110 cursor-pointer drop-shadow-sm" alt="Garvit Enterprises">
                </div>

                <div class="swiper-slide flex justify-center">
                    <img src="{{ asset('images/jain-traders-logo.png') }}" class="h-32 md:h-40 lg:h-48 w-auto object-contain transition-transform duration-300 hover:scale-110 cursor-pointer drop-shadow-sm" alt="Jain Traders">
                </div>

                <div class="swiper-slide flex justify-center">
                    <img src="{{ asset('images/manojkumar-rajkumar-logo.png') }}" class="h-32 md:h-40 lg:h-48 w-auto object-contain transition-transform duration-300 hover:scale-110 cursor-pointer drop-shadow-sm" alt="Manojkumar Rajkumar">
                </div>

                <div class="swiper-slide flex justify-center">
                    <img src="{{ asset('images/sortex-logo.png') }}" class="h-32 md:h-40 lg:h-48 w-auto object-contain transition-transform duration-300 hover:scale-110 cursor-pointer drop-shadow-sm" alt="Jain Sortex Plants">
                </div>

                <div class="swiper-slide flex justify-center">
                    <img src="{{ asset('images/warehouse-logo.png') }}" class="h-32 md:h-40 lg:h-48 w-auto object-contain transition-transform duration-300 hover:scale-110 cursor-pointer drop-shadow-sm" alt="Jain Warehouses">
                </div>

                <div class="swiper-slide flex justify-center">
                    <img src="{{ asset('images/cold-storage-logo.png') }}" class="h-32 md:h-40 lg:h-48 w-auto object-contain transition-transform duration-300 hover:scale-110 cursor-pointer drop-shadow-sm" alt="Jain Coldstorages">
                </div>

            </div>
        </div>
    </section>

    <section class="w-full py-12 md:py-24 bg-[#FCF8F2]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
            <div class="text-center mb-8 md:mb-16">
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-[#1A2F24]">
                    Key <span class="text-[#D4AF37]">Features</span>
                </h2>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-3 gap-3 md:gap-8">
            
                <div class="bg-white p-4 md:p-8 rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.03)] border border-gray-50 flex flex-col items-center text-center group hover:shadow-[0_10px_30px_rgba(212,175,55,0.1)] transition-all duration-300">
                    <div class="w-10 h-10 md:w-16 md:h-16 rounded-full bg-[#D4AF37]/10 flex items-center justify-center mb-3 md:mb-6 text-[#D4AF37] group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5 md:w-8 md:h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                    </div>
                    <h3 class="text-sm md:text-xl font-serif font-bold text-[#1A2F24] mb-1 md:mb-3 leading-tight">6 Key Hubs</h3>
                    <p class="text-[10px] md:text-sm text-gray-500 font-sans leading-snug md:leading-relaxed">Procurement locations across the fertile Malwa–Nimar Region.</p>
                </div>

                <div class="bg-white p-4 md:p-8 rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.03)] border border-gray-50 flex flex-col items-center text-center group hover:shadow-[0_10px_30px_rgba(212,175,55,0.1)] transition-all duration-300">
                    <div class="w-10 h-10 md:w-16 md:h-16 rounded-full bg-[#D4AF37]/10 flex items-center justify-center mb-3 md:mb-6 text-[#D4AF37] group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5 md:w-8 md:h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M11.636 21.05a10.998 10.998 0 004.29-10.428A10.99 10.99 0 0015.346 3h-4.692A10.99 10.99 0 004.29 10.622a10.998 10.998 0 004.29 10.428" /><path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8" /></svg>
                    </div>
                    <h3 class="text-sm md:text-xl font-serif font-bold text-[#1A2F24] mb-1 md:mb-3 leading-tight">Direct Sourcing</h3>
                    <p class="text-[10px] md:text-sm text-gray-500 font-sans leading-snug md:leading-relaxed">A strong, direct farm sourcing network ensuring traceability.</p>
                </div>

                <div class="bg-white p-4 md:p-8 rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.03)] border border-gray-50 flex flex-col items-center text-center group hover:shadow-[0_10px_30px_rgba(212,175,55,0.1)] transition-all duration-300">
                    <div class="w-10 h-10 md:w-16 md:h-16 rounded-full bg-[#D4AF37]/10 flex items-center justify-center mb-3 md:mb-6 text-[#D4AF37] group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5 md:w-8 md:h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71-.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    </div>
                    <h3 class="text-sm md:text-xl font-serif font-bold text-[#1A2F24] mb-1 md:mb-3 leading-tight">In-House Sortex</h3>
                    <p class="text-[10px] md:text-sm text-gray-500 font-sans leading-snug md:leading-relaxed">Advanced in-house sortex processing for unmatched purity.</p>
                </div>

                <div class="bg-white p-4 md:p-8 rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.03)] border border-gray-50 flex flex-col items-center text-center group hover:shadow-[0_10px_30px_rgba(212,175,55,0.1)] transition-all duration-300">
                    <div class="w-10 h-10 md:w-16 md:h-16 rounded-full bg-[#D4AF37]/10 flex items-center justify-center mb-3 md:mb-6 text-[#D4AF37] group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5 md:w-8 md:h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" /></svg>
                    </div>
                    <h3 class="text-sm md:text-xl font-serif font-bold text-[#1A2F24] mb-1 md:mb-3 leading-tight">700 MT / Day</h3>
                    <p class="text-[10px] md:text-sm text-gray-500 font-sans leading-snug md:leading-relaxed">High-volume precision grading with strict uniformity.</p>
                </div>

                <div class="bg-white p-4 md:p-8 rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.03)] border border-gray-50 flex flex-col items-center text-center group hover:shadow-[0_10px_30px_rgba(212,175,55,0.1)] transition-all duration-300">
                    <div class="w-10 h-10 md:w-16 md:h-16 rounded-full bg-[#D4AF37]/10 flex items-center justify-center mb-3 md:mb-6 text-[#D4AF37] group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5 md:w-8 md:h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" /></svg>
                    </div>
                    <h3 class="text-sm md:text-xl font-serif font-bold text-[#1A2F24] mb-1 md:mb-3 leading-tight">Infrastructure</h3>
                    <p class="text-[10px] md:text-sm text-gray-500 font-sans leading-snug md:leading-relaxed">20,000 MT Cold Storage & 10,000 MT Warehousing capacity.</p>
                </div>

                <div class="bg-white p-4 md:p-8 rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.03)] border border-gray-50 flex flex-col items-center text-center group hover:shadow-[0_10px_30px_rgba(212,175,55,0.1)] transition-all duration-300">
                    <div class="w-10 h-10 md:w-16 md:h-16 rounded-full bg-[#D4AF37]/10 flex items-center justify-center mb-3 md:mb-6 text-[#D4AF37] group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5 md:w-8 md:h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" /></svg>
                    </div>
                    <h3 class="text-sm md:text-xl font-serif font-bold text-[#1A2F24] mb-1 md:mb-3 leading-tight">Global Supply</h3>
                    <p class="text-[10px] md:text-sm text-gray-500 font-sans leading-snug md:leading-relaxed">Reliable execution and timely deliveries across the world.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 md:py-32 bg-[#FCF8F2] relative overflow-hidden">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 relative">
            
            <div class="text-center mb-20 relative z-10">
                <h2 class="font-serif text-4xl md:text-5xl lg:text-6xl font-bold text-brand-charcoal mb-4">
                    Our <span class="text-brand-gold">Process</span>
                </h2>
                <p class="font-sans text-lg text-brand-charcoal/70 max-w-2xl mx-auto">
                    From seed to shipment, our integrated execution guarantees quality at every stage.
                </p>
            </div>

            <div class="relative wrap-timeline">
                
                <div class="absolute left-[38px] md:left-1/2 top-0 bottom-0 w-1 bg-gray-200 transform md:-translate-x-1/2 rounded-full z-0"></div>
                
                <div id="timeline-progress" class="absolute left-[38px] md:left-1/2 top-0 w-1 bg-brand-gold transform md:-translate-x-1/2 rounded-full h-0 origin-top z-10"></div>

                <div class="timeline-item relative flex flex-col md:flex-row items-stretch justify-between mb-16 md:mb-24 w-full gs-timeline-item pl-24 md:pl-0">
                    
                    <div class="md:hidden absolute left-[24px] w-8 h-8 rounded-full bg-white border-4 border-gray-200 flex items-center justify-center mt-[30px] z-20 timeline-node transition-colors duration-500">
                        <span class="w-2.5 h-2.5 rounded-full bg-gray-200 node-inner transition-colors duration-500"></span>
                    </div>

                    <div class="w-full md:w-[45%] md:pl-12 order-1 md:order-3 gs-timeline-image flex flex-col justify-center">
                        <div class="relative w-full h-56 md:h-[400px] rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.06)] border border-gray-100 group">
                            <img src="https://images.unsplash.com/photo-1574943320219-553eb213f72d?q=80&w=800&auto=format&fit=crop" alt="Procurement and Warehouse" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>
                    </div>

                    <div class="hidden md:flex absolute left-1/2 w-12 h-12 rounded-full bg-white border-4 border-gray-200 items-center justify-center transform -translate-x-1/2 z-20 timeline-node transition-colors duration-500">
                        <span class="w-4 h-4 rounded-full bg-gray-200 node-inner transition-colors duration-500"></span>
                    </div>

                    <div class="w-full md:w-[45%] md:pr-12 order-2 md:order-1 mt-6 md:mt-0 flex flex-col justify-center">
                        <div class="bg-white p-8 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 relative text-left card-content h-full flex flex-col justify-center">
                            <div class="hidden md:block absolute top-1/2 -right-3 w-6 h-6 bg-white border-t border-r border-gray-100 transform -translate-y-1/2 rotate-45"></div>

                            <div class="flex items-center gap-4 mb-6 pb-4 border-b border-gray-100">
                                <span class="w-10 h-10 rounded-full bg-brand-gold/10 text-brand-gold flex items-center justify-center font-bold text-lg font-serif">1</span>
                                <h3 class="font-serif text-2xl font-bold text-brand-charcoal">Procurement & Storage</h3>
                            </div>

                            <div class="space-y-5">
                                <div class="border-l-2 border-brand-green pl-4">
                                    <h4 class="font-bold text-brand-gold mb-1">Raw Material Procurement</h4>
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70">Sourcing high-quality pulses from trusted farmers and suppliers across India.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <h4 class="font-bold text-brand-gold mb-1">Storage System</h4>
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70">Advanced storage facilities with controlled temperature and humidity for optimal preservation.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <h4 class="font-bold text-brand-gold mb-1">Fumigation</h4>
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70">Safe pest control measures to ensure product integrity and safety.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item relative flex flex-col md:flex-row items-stretch justify-between mb-16 md:mb-24 w-full gs-timeline-item pl-24 md:pl-0">
                    
                    <div class="md:hidden absolute left-[24px] w-8 h-8 rounded-full bg-white border-4 border-gray-200 flex items-center justify-center mt-[30px] z-20 timeline-node transition-colors duration-500">
                        <span class="w-2.5 h-2.5 rounded-full bg-gray-200 node-inner transition-colors duration-500"></span>
                    </div>

                    <div class="w-full md:w-[45%] md:pr-12 order-1 md:order-1 gs-timeline-image flex flex-col justify-center">
                        <div class="relative w-full h-56 md:h-[400px] rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.06)] border border-gray-100 group">
                            <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=800&auto=format&fit=crop" alt="Initial Processing" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>
                    </div>

                    <div class="hidden md:flex absolute left-1/2 w-12 h-12 rounded-full bg-white border-4 border-gray-200 items-center justify-center transform -translate-x-1/2 z-20 timeline-node transition-colors duration-500">
                        <span class="w-4 h-4 rounded-full bg-gray-200 node-inner transition-colors duration-500"></span>
                    </div>

                    <div class="w-full md:w-[45%] md:pl-12 order-2 md:order-3 mt-6 md:mt-0 flex flex-col justify-center">
                        <div class="bg-white p-8 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 relative text-left card-content h-full flex flex-col justify-center">
                            <div class="hidden md:block absolute top-1/2 -left-3 w-6 h-6 bg-white border-b border-l border-gray-100 transform -translate-y-1/2 rotate-45"></div>

                            <div class="flex items-center gap-4 mb-6 pb-4 border-b border-gray-100">
                                <span class="w-10 h-10 rounded-full bg-brand-gold/10 text-brand-gold flex items-center justify-center font-bold text-lg font-serif">2</span>
                                <h3 class="font-serif text-2xl font-bold text-brand-charcoal">Initial Processing</h3>
                            </div>

                            <div class="space-y-5">
                                <div class="border-l-2 border-brand-green pl-4">
                                    <h4 class="font-bold text-brand-gold mb-1">Pre-cleaning</h4>
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70">Removal of dust, stones, and foreign materials from raw pulses.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <h4 class="font-bold text-brand-gold mb-1">Cleaning and Grading</h4>
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70">Sorting pulses by size, quality, and appearance standards.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <h4 class="font-bold text-brand-gold mb-1">Drying</h4>
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70">Optimal moisture reduction for better processing and longer shelf life.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item relative flex flex-col md:flex-row items-stretch justify-between mb-16 md:mb-24 w-full gs-timeline-item pl-24 md:pl-0">
                    
                    <div class="md:hidden absolute left-[24px] w-8 h-8 rounded-full bg-white border-4 border-gray-200 flex items-center justify-center mt-[30px] z-20 timeline-node transition-colors duration-500">
                        <span class="w-2.5 h-2.5 rounded-full bg-gray-200 node-inner transition-colors duration-500"></span>
                    </div>

                    <div class="w-full md:w-[45%] md:pl-12 order-1 md:order-3 gs-timeline-image flex flex-col justify-center">
                        <div class="relative w-full h-56 md:h-[400px] rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.06)] border border-gray-100 group">
                            <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?q=80&w=800&auto=format&fit=crop" alt="Core Processing" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>
                    </div>

                    <div class="hidden md:flex absolute left-1/2 w-12 h-12 rounded-full bg-white border-4 border-gray-200 items-center justify-center transform -translate-x-1/2 z-20 timeline-node transition-colors duration-500">
                        <span class="w-4 h-4 rounded-full bg-gray-200 node-inner transition-colors duration-500"></span>
                    </div>

                    <div class="w-full md:w-[45%] md:pr-12 order-2 md:order-1 mt-6 md:mt-0 flex flex-col justify-center">
                        <div class="bg-white p-8 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 relative text-left card-content h-full flex flex-col justify-center">
                            <div class="hidden md:block absolute top-1/2 -right-3 w-6 h-6 bg-white border-t border-r border-gray-100 transform -translate-y-1/2 rotate-45"></div>

                            <div class="flex items-center gap-4 mb-6 pb-4 border-b border-gray-100">
                                <span class="w-10 h-10 rounded-full bg-brand-gold/10 text-brand-gold flex items-center justify-center font-bold text-lg font-serif">3</span>
                                <h3 class="font-serif text-2xl font-bold text-brand-charcoal">Core Processing</h3>
                            </div>

                            <div class="space-y-5">
                                <div class="border-l-2 border-brand-green pl-4">
                                    <h4 class="font-bold text-brand-gold mb-1">Dehusking</h4>
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70">Removing outer shells while preserving the nutritional value of pulses.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <h4 class="font-bold text-brand-gold mb-1">Tempering</h4>
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70">Controlled moisture treatment for optimal splitting and processing.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <h4 class="font-bold text-brand-gold mb-1">Splitting</h4>
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70">Precision cutting to create uniform dal pieces for consistent cooking.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item relative flex flex-col md:flex-row items-stretch justify-between mb-16 md:mb-24 w-full gs-timeline-item pl-24 md:pl-0">
                    
                    <div class="md:hidden absolute left-[24px] w-8 h-8 rounded-full bg-white border-4 border-gray-200 flex items-center justify-center mt-[30px] z-20 timeline-node transition-colors duration-500">
                        <span class="w-2.5 h-2.5 rounded-full bg-gray-200 node-inner transition-colors duration-500"></span>
                    </div>

                    <div class="w-full md:w-[45%] md:pr-12 order-1 md:order-1 gs-timeline-image flex flex-col justify-center">
                        <div class="relative w-full h-56 md:h-[400px] rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.06)] border border-gray-100 group">
                            <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?q=80&w=800&auto=format&fit=crop" alt="Quality Assurance" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>
                    </div>

                    <div class="hidden md:flex absolute left-1/2 w-12 h-12 rounded-full bg-white border-4 border-gray-200 items-center justify-center transform -translate-x-1/2 z-20 timeline-node transition-colors duration-500">
                        <span class="w-4 h-4 rounded-full bg-gray-200 node-inner transition-colors duration-500"></span>
                    </div>

                    <div class="w-full md:w-[45%] md:pl-12 order-2 md:order-3 mt-6 md:mt-0 flex flex-col justify-center">
                        <div class="bg-white p-8 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 relative text-left card-content h-full flex flex-col justify-center">
                            <div class="hidden md:block absolute top-1/2 -left-3 w-6 h-6 bg-white border-b border-l border-gray-100 transform -translate-y-1/2 rotate-45"></div>

                            <div class="flex items-center gap-4 mb-6 pb-4 border-b border-gray-100">
                                <span class="w-10 h-10 rounded-full bg-brand-gold/10 text-brand-gold flex items-center justify-center font-bold text-lg font-serif">4</span>
                                <h3 class="font-serif text-2xl font-bold text-brand-charcoal">Quality Assurance</h3>
                            </div>

                            <div class="space-y-5">
                                <div class="border-l-2 border-brand-green pl-4">
                                    <h4 class="font-bold text-brand-gold mb-1">Color Sorting</h4>
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70">Advanced optical sorting to ensure consistent color and appearance.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <h4 class="font-bold text-brand-gold mb-1">Final Cleaning</h4>
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70">Thorough cleaning to remove any remaining impurities or debris.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <h4 class="font-bold text-brand-gold mb-1">Quality Check</h4>
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70">Rigorous testing for moisture, protein content, and food safety standards.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item relative flex flex-col md:flex-row items-stretch justify-between mb-16 md:mb-0 w-full gs-timeline-item pl-24 md:pl-0">
                    
                    <div class="md:hidden absolute left-[24px] w-8 h-8 rounded-full bg-white border-4 border-gray-200 flex items-center justify-center mt-[30px] z-20 timeline-node transition-colors duration-500">
                        <span class="w-2.5 h-2.5 rounded-full bg-gray-200 node-inner transition-colors duration-500"></span>
                    </div>

                    <div class="w-full md:w-[45%] md:pl-12 order-1 md:order-3 gs-timeline-image flex flex-col justify-center">
                        <div class="relative w-full h-56 md:h-[400px] rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.06)] border border-gray-100 group">
                            <img src="https://images.unsplash.com/photo-1580674285054-bed31e145f59?q=80&w=800&auto=format&fit=crop" alt="Packaging and Dispatch" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>
                    </div>

                    <div class="hidden md:flex absolute left-1/2 w-12 h-12 rounded-full bg-white border-4 border-gray-200 items-center justify-center transform -translate-x-1/2 z-20 timeline-node transition-colors duration-500">
                        <span class="w-4 h-4 rounded-full bg-gray-200 node-inner transition-colors duration-500"></span>
                    </div>

                    <div class="w-full md:w-[45%] md:pr-12 order-2 md:order-1 mt-6 md:mt-0 flex flex-col justify-center">
                        <div class="bg-white p-8 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 relative text-left card-content h-full flex flex-col justify-center">
                            <div class="hidden md:block absolute top-1/2 -right-3 w-6 h-6 bg-white border-t border-r border-gray-100 transform -translate-y-1/2 rotate-45"></div>

                            <div class="flex items-center gap-4 mb-6 pb-4 border-b border-gray-100">
                                <span class="w-10 h-10 rounded-full bg-brand-gold/10 text-brand-gold flex items-center justify-center font-bold text-lg font-serif">5</span>
                                <h3 class="font-serif text-2xl font-bold text-brand-charcoal">Packaging & Dispatch</h3>
                            </div>

                            <div class="space-y-5">
                                <div class="border-l-2 border-brand-green pl-4">
                                    <h4 class="font-bold text-brand-gold mb-1">Secure Packaging</h4>
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70">Food-grade packaging that maintains freshness and extends shelf life.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <h4 class="font-bold text-brand-gold mb-1">Quality Verification</h4>
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70">Final inspection and certification before dispatch to customers.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <h4 class="font-bold text-brand-gold mb-1">Global Dispatch</h4>
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70">Efficient logistics network ensuring timely delivery worldwide.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        .businessUnitsSwiper .swiper-wrapper {
            transition-timing-function: linear !important;
        }
        html, body {
            overflow-x: hidden; 
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            
            // 1. Initialize Hero Slider
            const swiper = new Swiper('.heroSwiper', {
                loop: true,
                effect: 'fade',
                fadeEffect: { crossFade: true },
                autoplay: { delay: 5000, disableOnInteraction: false },
                speed: 1500,
            });

            // 2. Initialize GSAP Scroll Animations for Intro
            gsap.fromTo('.gs-reveal', 
                { y: 60, opacity: 0 },
                { 
                    y: 0, opacity: 1, duration: 1.2, ease: "power3.out",
                    scrollTrigger: { trigger: '.gs-reveal', start: "top 85%" }
                }
            );

            gsap.fromTo('.gs-reveal-delayed', 
                { y: 60, opacity: 0 },
                { 
                    y: 0, opacity: 1, duration: 1.2, delay: 0.2, ease: "power3.out",
                    scrollTrigger: { trigger: '.gs-reveal-delayed', start: "top 85%" }
                }
            );

            // 3. Initialize Subsidiaries Carousel
            const businessUnitsSwiper = new Swiper('.businessUnitsSwiper', {
                loop: true,
                speed: 4000, 
                autoplay: { delay: 0, disableOnInteraction: false, pauseOnMouseEnter: true },
                slidesPerView: 2, 
                spaceBetween: 30,
                breakpoints: {
                    640: { slidesPerView: 2, spaceBetween: 40 }, 
                    768: { slidesPerView: 3, spaceBetween: 50 }, 
                    1024: { slidesPerView: 4, spaceBetween: 60 }, 
                }
            });

            // 4. GSAP Stagger Animation for Feature Cards
            gsap.fromTo('.feature-card', 
                { y: 50, opacity: 0 },
                {
                    y: 0, 
                    opacity: 1, 
                    duration: 0.8, 
                    stagger: 0.15, 
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: '.feature-card',
                        start: "top 85%",
                    }
                }
            );

            // 5. ANIMATED CENTER TIMELINE
            gsap.to("#timeline-progress", {
                height: "100%",
                ease: "none",
                scrollTrigger: {
                    trigger: ".wrap-timeline",
                    start: "top center", 
                    end: "bottom center", 
                    scrub: true, 
                }
            });

            const timelineItems = gsap.utils.toArray('.gs-timeline-item');
            
            timelineItems.forEach((item, i) => {
                const isLeftText = i % 2 === 0; 
                const card = item.querySelector('.card-content');
                const image = item.querySelector('.gs-timeline-image');
                const node = item.querySelector('.timeline-node');
                const nodeInner = item.querySelector('.node-inner');

                const cardXOffset = window.innerWidth < 768 ? 50 : (isLeftText ? -50 : 50);
                const imageXOffset = window.innerWidth < 768 ? 50 : (isLeftText ? 50 : -50);

                gsap.from(card, {
                    x: cardXOffset,
                    y: 30,
                    opacity: 0,
                    duration: 0.8,
                    ease: "power3.out",
                    scrollTrigger: {
                        trigger: item,
                        start: "top 80%", 
                    }
                });

                if(image) {
                    gsap.from(image, {
                        x: imageXOffset,
                        y: 30,
                        opacity: 0,
                        duration: 0.8,
                        delay: 0.2, 
                        ease: "power3.out",
                        scrollTrigger: {
                            trigger: item,
                            start: "top 80%", 
                        }
                    });
                }

                ScrollTrigger.create({
                    trigger: item,
                    start: "top center",
                    onEnter: () => {
                        node.classList.remove('border-gray-200');
                        node.classList.add('border-brand-gold');
                        nodeInner.classList.remove('bg-gray-200');
                        nodeInner.classList.add('bg-brand-gold');
                    },
                    onLeaveBack: () => { 
                        node.classList.remove('border-brand-gold');
                        node.classList.add('border-gray-200');
                        nodeInner.classList.remove('bg-brand-gold');
                        nodeInner.classList.add('bg-gray-200');
                    }
                });
            });

        });
    </script>
</x-layouts.app>