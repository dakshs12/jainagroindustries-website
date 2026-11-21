<x-layouts.app>
@if(!request()->has('features_only'))
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
@endif

    <section class="w-full py-16 md:py-28 bg-[#FCF8F2] relative overflow-hidden">
        <!-- Ambient Glassmorphism Backdrops: Amber & Emerald Glow Orbs -->
        <div class="absolute -top-32 -left-20 w-[28rem] h-[28rem] rounded-full bg-[#D4AF37]/20 blur-[100px] pointer-events-none"></div>
        <div class="absolute top-1/3 -right-20 w-[32rem] h-[32rem] rounded-full bg-[#1A5C2A]/10 blur-[120px] pointer-events-none"></div>
        <div class="absolute -bottom-28 left-1/4 w-[30rem] h-[30rem] rounded-full bg-[#D4AF37]/18 blur-[100px] pointer-events-none"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[40rem] h-[25rem] rounded-full bg-[#F3E5AB]/30 blur-[140px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
            <div class="text-center mb-10 md:mb-16">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-white/60 backdrop-blur-md border border-white/80 shadow-[0_2px_8px_rgba(212,175,55,0.1)] mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#D4AF37]"></span>
                    <span class="text-xs font-semibold tracking-wider text-[#1A2F24] uppercase">Core Capabilities</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-[#1A2F24] tracking-tight">
                    Key <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#B8860B] via-[#D4AF37] to-[#996515]">Features</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            
                <!-- Tile 1 -->
                <div class="relative overflow-hidden rounded-2xl p-7 md:p-8 bg-gradient-to-b from-white/70 via-white/45 to-white/30 backdrop-blur-xl border border-white/80 shadow-[0_10px_30px_-5px_rgba(26,47,36,0.06),inset_0_1px_2px_rgba(255,255,255,1),inset_0_-1px_1px_rgba(0,0,0,0.02)] flex flex-col items-center text-center group hover:bg-gradient-to-b hover:from-white/85 hover:via-white/60 hover:to-white/40 hover:border-[#D4AF37]/50 hover:shadow-[0_20px_40px_-10px_rgba(212,175,55,0.22),inset_0_1px_2px_rgba(255,255,255,1)] hover:-translate-y-2 transition-all duration-300">
                    <!-- Glass specular light highlights -->
                    <div class="absolute inset-0 bg-gradient-to-br from-white/50 via-transparent to-transparent pointer-events-none rounded-2xl"></div>
                    <div class="absolute top-0 inset-x-0 h-[1.5px] bg-gradient-to-r from-transparent via-white to-transparent pointer-events-none"></div>
                    
                    <div class="relative z-10 w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-gradient-to-b from-white/95 to-white/50 backdrop-blur-md border border-white/90 shadow-[0_4px_16px_rgba(212,175,55,0.12),inset_0_1px_2px_rgba(255,255,255,1)] flex items-center justify-center mb-5 md:mb-6 text-[#D4AF37] group-hover:scale-110 group-hover:bg-[#D4AF37] group-hover:text-white group-hover:border-[#D4AF37] group-hover:shadow-[0_8px_24px_rgba(212,175,55,0.35)] transition-all duration-300">
                        <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                    </div>
                    <h3 class="relative z-10 text-base sm:text-lg md:text-xl font-serif font-bold text-[#1A2F24] mb-2.5 md:mb-3 leading-snug">Strategic Malwa–Nimar Procurement Network</h3>
                    <p class="relative z-10 text-xs sm:text-sm text-gray-600 font-sans leading-relaxed">A dedicated procurement team and strategically located grading plants across key chickpea-producing belts, including Khargone, Dhamnod, Anjad, Sillod and Singhana.</p>
                </div>

                <!-- Tile 2 -->
                <div class="relative overflow-hidden rounded-2xl p-7 md:p-8 bg-gradient-to-b from-white/70 via-white/45 to-white/30 backdrop-blur-xl border border-white/80 shadow-[0_10px_30px_-5px_rgba(26,47,36,0.06),inset_0_1px_2px_rgba(255,255,255,1),inset_0_-1px_1px_rgba(0,0,0,0.02)] flex flex-col items-center text-center group hover:bg-gradient-to-b hover:from-white/85 hover:via-white/60 hover:to-white/40 hover:border-[#D4AF37]/50 hover:shadow-[0_20px_40px_-10px_rgba(212,175,55,0.22),inset_0_1px_2px_rgba(255,255,255,1)] hover:-translate-y-2 transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/50 via-transparent to-transparent pointer-events-none rounded-2xl"></div>
                    <div class="absolute top-0 inset-x-0 h-[1.5px] bg-gradient-to-r from-transparent via-white to-transparent pointer-events-none"></div>

                    <div class="relative z-10 w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-gradient-to-b from-white/95 to-white/50 backdrop-blur-md border border-white/90 shadow-[0_4px_16px_rgba(212,175,55,0.12),inset_0_1px_2px_rgba(255,255,255,1)] flex items-center justify-center mb-5 md:mb-6 text-[#D4AF37] group-hover:scale-110 group-hover:bg-[#D4AF37] group-hover:text-white group-hover:border-[#D4AF37] group-hover:shadow-[0_8px_24px_rgba(212,175,55,0.35)] transition-all duration-300">
                        <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" /></svg>
                    </div>
                    <h3 class="relative z-10 text-base sm:text-lg md:text-xl font-serif font-bold text-[#1A2F24] mb-2.5 md:mb-3 leading-snug">Five Strategic Grading Plants</h3>
                    <p class="relative z-10 text-xs sm:text-sm text-gray-600 font-sans leading-relaxed">Five grading facilities across distinct procurement locations, with a combined processing capacity of <strong class="text-[#1A2F24] font-semibold">700 MT per day</strong>, focused on size uniformity, consistency and premium-quality selection.</p>
                </div>

                <!-- Tile 3 -->
                <div class="relative overflow-hidden rounded-2xl p-7 md:p-8 bg-gradient-to-b from-white/70 via-white/45 to-white/30 backdrop-blur-xl border border-white/80 shadow-[0_10px_30px_-5px_rgba(26,47,36,0.06),inset_0_1px_2px_rgba(255,255,255,1),inset_0_-1px_1px_rgba(0,0,0,0.02)] flex flex-col items-center text-center group hover:bg-gradient-to-b hover:from-white/85 hover:via-white/60 hover:to-white/40 hover:border-[#D4AF37]/50 hover:shadow-[0_20px_40px_-10px_rgba(212,175,55,0.22),inset_0_1px_2px_rgba(255,255,255,1)] hover:-translate-y-2 transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/50 via-transparent to-transparent pointer-events-none rounded-2xl"></div>
                    <div class="absolute top-0 inset-x-0 h-[1.5px] bg-gradient-to-r from-transparent via-white to-transparent pointer-events-none"></div>

                    <div class="relative z-10 w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-gradient-to-b from-white/95 to-white/50 backdrop-blur-md border border-white/90 shadow-[0_4px_16px_rgba(212,175,55,0.12),inset_0_1px_2px_rgba(255,255,255,1)] flex items-center justify-center mb-5 md:mb-6 text-[#D4AF37] group-hover:scale-110 group-hover:bg-[#D4AF37] group-hover:text-white group-hover:border-[#D4AF37] group-hover:shadow-[0_8px_24px_rgba(212,175,55,0.35)] transition-all duration-300">
                        <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" /></svg>
                    </div>
                    <h3 class="relative z-10 text-base sm:text-lg md:text-xl font-serif font-bold text-[#1A2F24] mb-2.5 md:mb-3 leading-snug">Advanced Optical Sortex Processing</h3>
                    <p class="relative z-10 text-xs sm:text-sm text-gray-600 font-sans leading-relaxed">A 10-chute Sortex facility equipped with imported advanced technology and a processing capacity of <strong class="text-[#1A2F24] font-semibold">150 MT per day</strong>, delivering precision sorting and superior colour uniformity.</p>
                </div>

                <!-- Tile 4 -->
                <div class="relative overflow-hidden rounded-2xl p-7 md:p-8 bg-gradient-to-b from-white/70 via-white/45 to-white/30 backdrop-blur-xl border border-white/80 shadow-[0_10px_30px_-5px_rgba(26,47,36,0.06),inset_0_1px_2px_rgba(255,255,255,1),inset_0_-1px_1px_rgba(0,0,0,0.02)] flex flex-col items-center text-center group hover:bg-gradient-to-b hover:from-white/85 hover:via-white/60 hover:to-white/40 hover:border-[#D4AF37]/50 hover:shadow-[0_20px_40px_-10px_rgba(212,175,55,0.22),inset_0_1px_2px_rgba(255,255,255,1)] hover:-translate-y-2 transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/50 via-transparent to-transparent pointer-events-none rounded-2xl"></div>
                    <div class="absolute top-0 inset-x-0 h-[1.5px] bg-gradient-to-r from-transparent via-white to-transparent pointer-events-none"></div>

                    <div class="relative z-10 w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-gradient-to-b from-white/95 to-white/50 backdrop-blur-md border border-white/90 shadow-[0_4px_16px_rgba(212,175,55,0.12),inset_0_1px_2px_rgba(255,255,255,1)] flex items-center justify-center mb-5 md:mb-6 text-[#D4AF37] group-hover:scale-110 group-hover:bg-[#D4AF37] group-hover:text-white group-hover:border-[#D4AF37] group-hover:shadow-[0_8px_24px_rgba(212,175,55,0.35)] transition-all duration-300">
                        <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" /></svg>
                    </div>
                    <h3 class="relative z-10 text-base sm:text-lg md:text-xl font-serif font-bold text-[#1A2F24] mb-2.5 md:mb-3 leading-snug">Integrated Storage Infrastructure</h3>
                    <p class="relative z-10 text-xs sm:text-sm text-gray-600 font-sans leading-relaxed"><strong class="text-[#1A2F24] font-semibold">30,000 MT of in-house cold storage and 10,000 MT of warehousing capacity</strong>, supporting scientific storage, quality preservation and reliable year-round supply.</p>
                </div>

                <!-- Tile 5 -->
                <div class="relative overflow-hidden rounded-2xl p-7 md:p-8 bg-gradient-to-b from-white/70 via-white/45 to-white/30 backdrop-blur-xl border border-white/80 shadow-[0_10px_30px_-5px_rgba(26,47,36,0.06),inset_0_1px_2px_rgba(255,255,255,1),inset_0_-1px_1px_rgba(0,0,0,0.02)] flex flex-col items-center text-center group hover:bg-gradient-to-b hover:from-white/85 hover:via-white/60 hover:to-white/40 hover:border-[#D4AF37]/50 hover:shadow-[0_20px_40px_-10px_rgba(212,175,55,0.22),inset_0_1px_2px_rgba(255,255,255,1)] hover:-translate-y-2 transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/50 via-transparent to-transparent pointer-events-none rounded-2xl"></div>
                    <div class="absolute top-0 inset-x-0 h-[1.5px] bg-gradient-to-r from-transparent via-white to-transparent pointer-events-none"></div>

                    <div class="relative z-10 w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-gradient-to-b from-white/95 to-white/50 backdrop-blur-md border border-white/90 shadow-[0_4px_16px_rgba(212,175,55,0.12),inset_0_1px_2px_rgba(255,255,255,1)] flex items-center justify-center mb-5 md:mb-6 text-[#D4AF37] group-hover:scale-110 group-hover:bg-[#D4AF37] group-hover:text-white group-hover:border-[#D4AF37] group-hover:shadow-[0_8px_24px_rgba(212,175,55,0.35)] transition-all duration-300">
                        <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.948c0-.621-.504-1.125-1.125-1.125H2.25C1.629 5.5 1.125 6.004 1.125 6.625v11c0 .621.504 1.125 1.125 1.125h1.5m10.5-11.25H3.375" /></svg>
                    </div>
                    <h3 class="relative z-10 text-base sm:text-lg md:text-xl font-serif font-bold text-[#1A2F24] mb-2.5 md:mb-3 leading-snug">Operational Excellence & Dispatch Capability</h3>
                    <p class="relative z-10 text-xs sm:text-sm text-gray-600 font-sans leading-relaxed">Streamlined operations and dedicated loading and unloading infrastructure, with a maximum dispatch capacity of <strong class="text-[#1A2F24] font-semibold">360 MT per day — equivalent to 15 containers</strong>.</p>
                </div>

                <!-- Tile 6 -->
                <div class="relative overflow-hidden rounded-2xl p-7 md:p-8 bg-gradient-to-b from-white/70 via-white/45 to-white/30 backdrop-blur-xl border border-white/80 shadow-[0_10px_30px_-5px_rgba(26,47,36,0.06),inset_0_1px_2px_rgba(255,255,255,1),inset_0_-1px_1px_rgba(0,0,0,0.02)] flex flex-col items-center text-center group hover:bg-gradient-to-b hover:from-white/85 hover:via-white/60 hover:to-white/40 hover:border-[#D4AF37]/50 hover:shadow-[0_20px_40px_-10px_rgba(212,175,55,0.22),inset_0_1px_2px_rgba(255,255,255,1)] hover:-translate-y-2 transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/50 via-transparent to-transparent pointer-events-none rounded-2xl"></div>
                    <div class="absolute top-0 inset-x-0 h-[1.5px] bg-gradient-to-r from-transparent via-white to-transparent pointer-events-none"></div>

                    <div class="relative z-10 w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-gradient-to-b from-white/95 to-white/50 backdrop-blur-md border border-white/90 shadow-[0_4px_16px_rgba(212,175,55,0.12),inset_0_1px_2px_rgba(255,255,255,1)] flex items-center justify-center mb-5 md:mb-6 text-[#D4AF37] group-hover:scale-110 group-hover:bg-[#D4AF37] group-hover:text-white group-hover:border-[#D4AF37] group-hover:shadow-[0_8px_24px_rgba(212,175,55,0.35)] transition-all duration-300">
                        <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" /></svg>
                    </div>
                    <h3 class="relative z-10 text-base sm:text-lg md:text-xl font-serif font-bold text-[#1A2F24] mb-2.5 md:mb-3 leading-snug">International Quality Benchmarks</h3>
                    <p class="relative z-10 text-xs sm:text-sm text-gray-600 font-sans leading-relaxed">Every container undergoes rigorous quality assessment against defined parameters, supported by testing through leading inspection and laboratory agencies such as <strong class="text-[#1A2F24] font-semibold">SGS and BBQ</strong>.</p>
                </div>

            </div>
        </div>
    </section>
@if(!request()->has('features_only'))

    <section class="py-24 md:py-32 bg-[#FCF8F2] relative overflow-hidden">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 relative">
            
            <div class="text-center mb-16 md:mb-20 relative z-10 max-w-3xl mx-auto">
                <h2 class="font-serif text-4xl md:text-5xl lg:text-6xl font-bold text-brand-charcoal mb-4">
                    Our <span class="text-brand-gold">Process</span>
                </h2>
                <h3 class="font-serif text-2xl md:text-3xl font-bold text-brand-charcoal mb-2">
                    From Farm Sourcing to <span class="text-brand-gold">Global Supply</span>
                </h3>
                <p class="font-serif italic text-base md:text-lg text-brand-gold font-medium mb-4">
                    An integrated journey of procurement, precision processing and dependable agricultural supply.
                </p>
                <p class="font-sans text-sm md:text-base text-brand-charcoal/75 max-w-2xl mx-auto leading-relaxed mb-4">
                    At Jain Agro Industries, every stage is driven by a commitment to quality, operational efficiency and consistency. From sourcing across India's finest chickpea-producing belts to preparing commodities for domestic and international markets, we maintain control across the entire journey.
                </p>
                <p class="font-serif font-bold text-base md:text-lg text-brand-charcoal">
                    Because Every Grain Has a Story.
                </p>
            </div>

            <div class="relative wrap-timeline">
                
                <div class="absolute left-[38px] md:left-1/2 top-0 bottom-0 w-1 bg-gray-200 transform md:-translate-x-1/2 rounded-full z-0"></div>
                
                <div id="timeline-progress" class="absolute left-[38px] md:left-1/2 top-0 w-1 bg-brand-gold transform md:-translate-x-1/2 rounded-full h-0 origin-top z-10"></div>

                {{-- 1. PROCUREMENT --}}
                <div class="timeline-item relative flex flex-col md:flex-row items-stretch justify-between mb-16 md:mb-24 w-full gs-timeline-item pl-24 md:pl-0">
                    
                    <div class="md:hidden absolute left-[24px] w-8 h-8 rounded-full bg-white border-4 border-gray-200 flex items-center justify-center mt-[30px] z-20 timeline-node transition-colors duration-500">
                        <span class="w-2.5 h-2.5 rounded-full bg-gray-200 node-inner transition-colors duration-500"></span>
                    </div>

                    <div class="w-full md:w-[45%] md:pl-12 order-1 md:order-3 gs-timeline-image flex flex-col justify-center">
                        <div class="relative w-full h-56 md:h-[400px] rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.06)] border border-gray-100 group">
                            <img src="{{ asset('images/procurement.png') }}" alt="Procurement" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
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
                                <h3 class="font-serif text-2xl font-bold text-brand-charcoal">Procurement</h3>
                            </div>

                            <div class="space-y-4">
                                <div class="border-l-2 border-brand-green pl-4">
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/80 leading-relaxed">Sourcing premium Kabuli Chana through our established Malwa–Nimar procurement network.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/80 leading-relaxed">Building strong sourcing connections across <strong class="text-brand-charcoal font-semibold">Anjad, Singhana–Bikangaon, Sillod, Dhamnod, Khargone and Badnagar</strong>.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/80 leading-relaxed">Selecting raw produce with a focus on grain size, appearance and quality.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2. INITIAL PROCESSING --}}
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

                            <div class="space-y-4">
                                <div class="border-l-2 border-brand-green pl-4">
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/80 leading-relaxed">Removing stones and heavy impurities through advanced destoning systems.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/80 leading-relaxed">Eliminating metallic contaminants through precision magnetic separation.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/80 leading-relaxed">Separating hollow and lightweight grains through gravity-based cleaning.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 3. CORE PROCESSING — GRADING --}}
                <div class="timeline-item relative flex flex-col md:flex-row items-stretch justify-between mb-16 md:mb-24 w-full gs-timeline-item pl-24 md:pl-0">
                    
                    <div class="md:hidden absolute left-[24px] w-8 h-8 rounded-full bg-white border-4 border-gray-200 flex items-center justify-center mt-[30px] z-20 timeline-node transition-colors duration-500">
                        <span class="w-2.5 h-2.5 rounded-full bg-gray-200 node-inner transition-colors duration-500"></span>
                    </div>

                    <div class="w-full md:w-[45%] md:pl-12 order-1 md:order-3 gs-timeline-image flex flex-col justify-center">
                        <div class="relative w-full h-56 md:h-[400px] rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.06)] border border-gray-100 group">
                            <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?q=80&w=800&auto=format&fit=crop" alt="Core Processing — Grading" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
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
                                <h3 class="font-serif text-2xl font-bold text-brand-charcoal">Core Processing — Grading</h3>
                            </div>

                            <div class="space-y-4">
                                <div class="border-l-2 border-brand-green pl-4">
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/80 leading-relaxed"><strong class="text-brand-charcoal font-semibold">700 MT per day processing capacity</strong> across our integrated operations.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/80 leading-relaxed">Precision grading into uniform sizes using internationally recognised US count standards.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/80 leading-relaxed">Segregating multiple size grades to meet diverse buyer specifications.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 4. SORTEX PROCESSING --}}
                <div class="timeline-item relative flex flex-col md:flex-row items-stretch justify-between mb-16 md:mb-24 w-full gs-timeline-item pl-24 md:pl-0">
                    
                    <div class="md:hidden absolute left-[24px] w-8 h-8 rounded-full bg-white border-4 border-gray-200 flex items-center justify-center mt-[30px] z-20 timeline-node transition-colors duration-500">
                        <span class="w-2.5 h-2.5 rounded-full bg-gray-200 node-inner transition-colors duration-500"></span>
                    </div>

                    <div class="w-full md:w-[45%] md:pr-12 order-1 md:order-1 gs-timeline-image flex flex-col justify-center">
                        <div class="relative w-full h-56 md:h-[400px] rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.06)] border border-gray-100 group">
                            <img src="{{ asset('images/sortex_processing.png') }}" alt="Sortex Processing" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
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
                                <h3 class="font-serif text-2xl font-bold text-brand-charcoal">Sortex Processing</h3>
                            </div>

                            <div class="space-y-4">
                                <div class="border-l-2 border-brand-green pl-4">
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/80 leading-relaxed">Advanced optical sorting technology identifies unwanted discoloured grains.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/80 leading-relaxed">Removing reddish, blackish and other visually defective particles with precision.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/80 leading-relaxed">Enhancing colour uniformity for a cleaner, more consistent appearance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 5. QUALITY ASSURANCE --}}
                <div class="timeline-item relative flex flex-col md:flex-row items-stretch justify-between mb-16 md:mb-24 w-full gs-timeline-item pl-24 md:pl-0">
                    
                    <div class="md:hidden absolute left-[24px] w-8 h-8 rounded-full bg-white border-4 border-gray-200 flex items-center justify-center mt-[30px] z-20 timeline-node transition-colors duration-500">
                        <span class="w-2.5 h-2.5 rounded-full bg-gray-200 node-inner transition-colors duration-500"></span>
                    </div>

                    <div class="w-full md:w-[45%] md:pl-12 order-1 md:order-3 gs-timeline-image flex flex-col justify-center">
                        <div class="relative w-full h-56 md:h-[400px] rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.06)] border border-gray-100 group">
                            <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?q=80&w=800&auto=format&fit=crop" alt="Quality Assurance" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
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
                                <h3 class="font-serif text-2xl font-bold text-brand-charcoal">Quality Assurance</h3>
                            </div>

                            <div class="space-y-4">
                                <div class="border-l-2 border-brand-green pl-4">
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/80 leading-relaxed">Independent laboratory testing through reputed agencies, including <strong class="text-brand-charcoal font-semibold">SGS, BBQ and others</strong>.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/80 leading-relaxed">Evaluating moisture, defect percentage, grain count and foreign matter.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/80 leading-relaxed">Maintaining quality checks to ensure consistency across every processed lot.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 6. PACKAGING & DISPATCH --}}
                <div class="timeline-item relative flex flex-col md:flex-row items-stretch justify-between mb-16 md:mb-0 w-full gs-timeline-item pl-24 md:pl-0">
                    
                    <div class="md:hidden absolute left-[24px] w-8 h-8 rounded-full bg-white border-4 border-gray-200 flex items-center justify-center mt-[30px] z-20 timeline-node transition-colors duration-500">
                        <span class="w-2.5 h-2.5 rounded-full bg-gray-200 node-inner transition-colors duration-500"></span>
                    </div>

                    <div class="w-full md:w-[45%] md:pr-12 order-1 md:order-1 gs-timeline-image flex flex-col justify-center">
                        <div class="relative w-full h-56 md:h-[400px] rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.06)] border border-gray-100 group">
                            <img src="https://images.unsplash.com/photo-1580674285054-bed31e145f59?q=80&w=800&auto=format&fit=crop" alt="Packaging & Dispatch" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>
                    </div>

                    <div class="hidden md:flex absolute left-1/2 w-12 h-12 rounded-full bg-white border-4 border-gray-200 items-center justify-center transform -translate-x-1/2 z-20 timeline-node transition-colors duration-500">
                        <span class="w-4 h-4 rounded-full bg-gray-200 node-inner transition-colors duration-500"></span>
                    </div>

                    <div class="w-full md:w-[45%] md:pl-12 order-2 md:order-3 mt-6 md:mt-0 flex flex-col justify-center">
                        <div class="bg-white p-8 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 relative text-left card-content h-full flex flex-col justify-center">
                            <div class="hidden md:block absolute top-1/2 -left-3 w-6 h-6 bg-white border-b border-l border-gray-100 transform -translate-y-1/2 rotate-45"></div>

                            <div class="flex items-center gap-4 mb-6 pb-4 border-b border-gray-100">
                                <span class="w-10 h-10 rounded-full bg-brand-gold/10 text-brand-gold flex items-center justify-center font-bold text-lg font-serif">6</span>
                                <h3 class="font-serif text-2xl font-bold text-brand-charcoal">Packaging & Dispatch</h3>
                            </div>

                            <div class="space-y-4">
                                <div class="border-l-2 border-brand-green pl-4">
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/80 leading-relaxed">Offering PP bags, customised packaging and private-label solutions as per buyer requirements.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/80 leading-relaxed">Facilitating efficient bulk loading and dispatch through established logistics channels.</p>
                                </div>
                                <div class="border-l-2 border-brand-green pl-4">
                                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/80 leading-relaxed">Connecting domestic and international buyers through our integrated supply network.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-16 md:mt-24 text-center relative z-10 max-w-3xl mx-auto px-4">
                <div class="w-16 h-0.5 bg-brand-gold/40 mx-auto mb-6"></div>
                <p class="font-serif italic text-lg md:text-xl text-brand-charcoal font-medium leading-relaxed">
                    &ldquo;From the fields of Malwa–Nimar to markets across the world &mdash; every grain carries our commitment to quality.&rdquo;
                </p>
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
@endif
</x-layouts.app>