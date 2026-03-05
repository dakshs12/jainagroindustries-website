<x-layouts.app>
    <section class="relative h-[calc(100vh-112px)] w-full">
        
        <div class="swiper heroSwiper h-full w-full">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide relative">
                    <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=1920&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover" alt="Agricultural Fields">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>
                </div>

                <div class="swiper-slide relative">
                    <img src="https://images.unsplash.com/photo-1586771107445-d3ca888129ff?q=80&w=1920&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover" alt="Industrial Processing">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>
                </div>

                <div class="swiper-slide relative">
                    <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=1920&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover" alt="Grains and Pulses">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>
                </div>

            </div>
        </div>

        <div class="absolute inset-0 z-10 flex flex-col items-center justify-center text-center px-4 sm:px-6 lg:px-8 pointer-events-none">
            <h1 class="text-white font-serif text-5xl md:text-6xl lg:text-7xl font-bold tracking-tight mb-6 drop-shadow-lg">
                Indian Origin. <br class="md:hidden"> Global Standards.
            </h1>
            <p class="mt-4 text-xl text-gray-200 font-sans max-w-3xl drop-shadow-md mb-10">
                A heritage agricultural enterprise delivering premium pulses, grains, and industrial processing since 1981.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 pointer-events-auto">
                <a href="/products" class="bg-brand-green text-white px-8 py-3.5 rounded-md font-sans font-medium hover:bg-brand-gold transition-all duration-300 shadow-lg text-lg">
                    Explore Products
                </a>
                <a href="/contact" class="bg-transparent border-2 border-white text-white px-8 py-3.5 rounded-md font-sans font-medium hover:bg-white hover:text-brand-charcoal transition-all duration-300 shadow-lg text-lg">
                    Get a Quote
                </a>
            </div>
        </div>
    </section>

    <section class="relative py-24 md:py-32 bg-brand-white overflow-hidden">
        
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none z-0">
            <img src="{{ asset('images/main-logo.png') }}" class="w-[80%] md:w-[500px] opacity-[0.03] select-none" alt="">
        </div>

        <div class="relative z-10 max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-12 xl:px-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-center">

                <div class="lg:col-span-7 gs-reveal">
                    <h2 class="font-serif text-4xl md:text-5xl lg:text-6xl font-bold text-brand-charcoal mb-8 tracking-wide leading-tight">
                        Welcome to <br> <span class="text-brand-gold">Jain Agro Industries</span>
                    </h2>
                    <p class="font-sans text-xl md:text-2xl text-brand-charcoal leading-relaxed font-light">
                        An integrated agri-commodities ecosystem — from farm sourcing and precision sorting to storage and global trade. Built in <span class="font-medium text-brand-gold">Malwa-Nimar</span> since <span class="font-medium text-brand-gold">1981</span>, we combine legacy, technology, and execution to deliver consistent quality to the world.
                    </p>
                </div>

                <div class="lg:col-span-5 relative gs-reveal-delayed">
                    <div class="hidden lg:block absolute left-0 top-0 w-1 h-full bg-brand-green/20 rounded-full"></div>
                    
                    <div class="lg:pl-10">
                        <div class="w-16 h-1 bg-brand-green mb-8 rounded-full lg:hidden"></div>
                        
                        <p class="font-sans text-base md:text-lg text-brand-charcoal/80 leading-relaxed mb-6">
                            Founded by <span class="font-semibold text-brand-charcoal">Shree Rajkumar Bilala</span> in Central India, we began as a humble trading business and have since evolved into a trusted enterprise.
                        </p>
                        <p class="font-sans text-base md:text-lg text-brand-charcoal/80 leading-relaxed">
                            We refine grains to premium standards and deliver quality produce from India’s fertile lands to global markets. At Jain Agro Industries, we connect India’s agricultural strength to the world through <span class="font-semibold text-brand-charcoal">quality, precision, and integrated execution</span>.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-gray-50 border-y border-gray-100 overflow-hidden">
        
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mb-16 text-center">
            <h3 class="font-serif text-3xl md:text-4xl font-bold text-brand-charcoal tracking-wide">Our Subsidiaries</h3>
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

    <section class="py-24 bg-brand-white">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-16">
                <h3 class="font-serif text-3xl md:text-4xl font-bold text-brand-charcoal tracking-wide mb-4">
                    Key <span class="text-brand-gold">Features</span>
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                
                <div class="feature-card group bg-white p-8 rounded-2xl border border-gray-100 shadow-[0_4px_20px_rgb(0,0,0,0.03)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] hover:-translate-y-1.5 transition-all duration-300 relative overflow-hidden text-center flex flex-col items-center justify-center min-h-[260px]">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-green scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    <div class="w-14 h-14 rounded-full bg-brand-gold/10 flex items-center justify-center mb-5 text-brand-gold group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                    </div>
                    <h4 class="font-serif font-bold text-xl text-brand-charcoal mb-3 tracking-tight">40+ Years Legacy</h4>
                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70 leading-relaxed px-2">Decades of expertise and experience in pulse manufacturing since 1981.</p>
                </div>

                <div class="feature-card group bg-white p-8 rounded-2xl border border-gray-100 shadow-[0_4px_20px_rgb(0,0,0,0.03)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] hover:-translate-y-1.5 transition-all duration-300 relative overflow-hidden text-center flex flex-col items-center justify-center min-h-[260px]">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-green scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    <div class="w-14 h-14 rounded-full bg-brand-gold/10 flex items-center justify-center mb-5 text-brand-gold group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                    </div>
                    <h4 class="font-serif font-bold text-xl text-brand-charcoal mb-3 tracking-tight">Family Business</h4>
                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70 leading-relaxed px-2">Second generation of dynamic and youthful management.</p>
                </div>

                <div class="feature-card group bg-white p-8 rounded-2xl border border-gray-100 shadow-[0_4px_20px_rgb(0,0,0,0.03)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] hover:-translate-y-1.5 transition-all duration-300 relative overflow-hidden text-center flex flex-col items-center justify-center min-h-[260px]">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-green scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    <div class="w-14 h-14 rounded-full bg-brand-gold/10 flex items-center justify-center mb-5 text-brand-gold group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h4 class="font-serif font-bold text-xl text-brand-charcoal mb-3 tracking-tight">Global Presence</h4>
                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70 leading-relaxed px-2">Exporting quality products to 12+ countries worldwide.</p>
                </div>

                <div class="feature-card group bg-white p-8 rounded-2xl border border-gray-100 shadow-[0_4px_20px_rgb(0,0,0,0.03)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] hover:-translate-y-1.5 transition-all duration-300 relative overflow-hidden text-center flex flex-col items-center justify-center min-h-[260px]">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-green scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    <div class="w-14 h-14 rounded-full bg-brand-gold/10 flex items-center justify-center mb-5 text-brand-gold group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" /></svg>
                    </div>
                    <h4 class="font-serif font-bold text-xl text-brand-charcoal mb-3 tracking-tight">Natural Products</h4>
                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70 leading-relaxed px-2">No added colors or flavors - always fresh and pure.</p>
                </div>

                <div class="feature-card group bg-white p-8 rounded-2xl border border-gray-100 shadow-[0_4px_20px_rgb(0,0,0,0.03)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] hover:-translate-y-1.5 transition-all duration-300 relative overflow-hidden text-center flex flex-col items-center justify-center min-h-[260px]">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-green scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    <div class="w-14 h-14 rounded-full bg-brand-gold/10 flex items-center justify-center mb-5 text-brand-gold group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" /></svg>
                    </div>
                    <h4 class="font-serif font-bold text-xl text-brand-charcoal mb-3 tracking-tight">Certified Processing</h4>
                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70 leading-relaxed px-2">In house container stuffing for faster, secure and hassle free shipments.</p>
                </div>

                <div class="feature-card group bg-white p-8 rounded-2xl border border-gray-100 shadow-[0_4px_20px_rgb(0,0,0,0.03)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] hover:-translate-y-1.5 transition-all duration-300 relative overflow-hidden text-center flex flex-col items-center justify-center min-h-[260px]">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-green scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    <div class="w-14 h-14 rounded-full bg-brand-gold/10 flex items-center justify-center mb-5 text-brand-gold group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                    </div>
                    <h4 class="font-serif font-bold text-xl text-brand-charcoal mb-3 tracking-tight">Modern Technology</h4>
                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70 leading-relaxed px-2">Fresh products packaged using cutting-edge technology.</p>
                </div>

                <div class="feature-card group bg-white p-8 rounded-2xl border border-gray-100 shadow-[0_4px_20px_rgb(0,0,0,0.03)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] hover:-translate-y-1.5 transition-all duration-300 relative overflow-hidden text-center flex flex-col items-center justify-center min-h-[260px]">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-green scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    <div class="w-14 h-14 rounded-full bg-brand-gold/10 flex items-center justify-center mb-5 text-brand-gold group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    </div>
                    <h4 class="font-serif font-bold text-xl text-brand-charcoal mb-3 tracking-tight">Multiple Locations</h4>
                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70 leading-relaxed px-2">Operations across key sourcing and distribution hubs.</p>
                </div>

                <div class="feature-card group bg-white p-8 rounded-2xl border border-gray-100 shadow-[0_4px_20px_rgb(0,0,0,0.03)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] hover:-translate-y-1.5 transition-all duration-300 relative overflow-hidden text-center flex flex-col items-center justify-center min-h-[260px]">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-green scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    <div class="w-14 h-14 rounded-full bg-brand-gold/10 flex items-center justify-center mb-5 text-brand-gold group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" /></svg>
                    </div>
                    <h4 class="font-serif font-bold text-xl text-brand-charcoal mb-2 tracking-tight">Quality Control</h4>
                    <span class="inline-block bg-[#fcf9f2] text-brand-gold text-xs font-bold px-3 py-1 rounded-md mb-3 border border-brand-gold/20">ISO 22000</span>
                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70 leading-relaxed px-2">HACCP approach for checking raw material and manufacturing process.</p>
                </div>

                <div class="feature-card group bg-white p-8 rounded-2xl border border-gray-100 shadow-[0_4px_20px_rgb(0,0,0,0.03)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] hover:-translate-y-1.5 transition-all duration-300 relative overflow-hidden text-center flex flex-col items-center justify-center min-h-[260px]">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-green scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    <div class="w-14 h-14 rounded-full bg-brand-gold/10 flex items-center justify-center mb-5 text-brand-gold group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h4 class="font-serif font-bold text-xl text-brand-charcoal mb-3 tracking-tight">Customer Satisfaction</h4>
                    <p class="font-sans text-[15px] font-medium text-brand-charcoal/70 leading-relaxed px-2">Honest, friendly, and respectful after sales support to build long term relationships.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 md:py-32 bg-gray-50 relative overflow-hidden">
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
        /* Prevents horizontal scroll on small devices when cards slide in */
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

            // ==========================================
            // 5. ANIMATED CENTER TIMELINE
            // ==========================================
            
            // Draw the central gold line down the page as the user scrolls
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

            // Animate individual nodes, text cards, and images
            const timelineItems = gsap.utils.toArray('.gs-timeline-item');
            
            timelineItems.forEach((item, i) => {
                const isLeftText = i % 2 === 0; // Even index = Text is on the left, Image is on the right
                const card = item.querySelector('.card-content');
                const image = item.querySelector('.gs-timeline-image');
                const node = item.querySelector('.timeline-node');
                const nodeInner = item.querySelector('.node-inner');

                // Mobile animation always slides from right (50px). Desktop alternates (-50 or 50).
                const cardXOffset = window.innerWidth < 768 ? 50 : (isLeftText ? -50 : 50);
                const imageXOffset = window.innerWidth < 768 ? 50 : (isLeftText ? 50 : -50);

                // Animate Text Card sliding in
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

                // Animate Image sliding in from the opposite direction
                if(image) {
                    gsap.from(image, {
                        x: imageXOffset,
                        y: 30,
                        opacity: 0,
                        duration: 0.8,
                        delay: 0.2, // Slight delay so the image follows the text slightly
                        ease: "power3.out",
                        scrollTrigger: {
                            trigger: item,
                            start: "top 80%", 
                        }
                    });
                }

                // Animate the circular nodes lighting up to Gold when the line hits them
                ScrollTrigger.create({
                    trigger: item,
                    start: "top center",
                    onEnter: () => {
                        node.classList.remove('border-gray-200');
                        node.classList.add('border-brand-gold');
                        nodeInner.classList.remove('bg-gray-200');
                        nodeInner.classList.add('bg-brand-gold');
                    },
                    onLeaveBack: () => { // Turn back to gray if scrolled up
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