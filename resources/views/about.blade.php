<x-layouts.app>

    <div class="w-full overflow-clip bg-[#050505]">

        <section class="relative w-full min-h-[40vh] md:min-h-[50vh] flex flex-col items-center justify-start pt-8 md:pt-14 pb-12 md:pb-16 bg-[#050505]">
            
            <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=2000&auto=format&fit=crop" 
                 alt="Golden Agricultural Fields" 
                 class="absolute inset-0 w-full h-full object-cover opacity-30">
            
            <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/40 to-transparent pointer-events-none"></div>
            <div class="absolute -bottom-[2px] left-0 w-full h-10 md:h-16 bg-gradient-to-t from-[#FCF8F2] to-transparent pointer-events-none z-0"></div>

            <div class="relative z-10 text-center px-4 max-w-5xl mx-auto w-full">
                <div class="inline-flex items-center justify-center gap-2 md:gap-4 mb-4 md:mb-6 opacity-0 translate-y-5" id="hero-subtitle">
                    <div class="w-8 md:w-12 h-[1px] bg-[#D4AF37]"></div>
                    <span class="text-[#D4AF37] uppercase tracking-[0.2em] md:tracking-[0.3em] text-xs md:text-sm font-bold">Since 1981</span>
                    <div class="w-8 md:w-12 h-[1px] bg-[#D4AF37]"></div>
                </div>
                
                <h1 class="text-[2.25rem] leading-[1.1] sm:text-5xl md:text-7xl lg:text-8xl font-serif font-bold text-white mb-4 md:mb-6 opacity-0 translate-y-5 drop-shadow-lg" id="hero-title">
                    Cultivating Trust. <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#D4AF37] to-[#F3E5AB]">Exporting Excellence.</span>
                </h1>
                
                <p class="text-gray-300 text-sm md:text-xl font-sans max-w-3xl mx-auto font-light leading-relaxed opacity-0 translate-y-5 px-2" id="hero-text">
                    From our humble beginnings in Central India to our modern global export operations, our roots run deep in quality, integrity, and agricultural mastery.
                </p>
            </div>
        </section>

        <section class="relative w-full z-20 bg-[#FCF8F2] flex flex-col">
            
            <div class="w-full py-20 md:py-24 px-4">
                <div class="max-w-6xl mx-auto flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
                    
                    <div class="w-full lg:w-1/2 relative px-4 md:px-8 lg:px-0 founder-img-anim opacity-0 translate-y-10">
                        <div class="absolute -top-4 -left-0 md:-top-8 md:-left-4 w-3/4 h-[90%] border border-[#D4AF37]/50 bg-[#D4AF37]/10 rounded-2xl z-0"></div>
                        <img src="{{ asset('images/founders.png') }}" alt="Founders of Jain Agro Industries" class="relative z-10 w-full h-auto object-cover rounded-xl shadow-[0_20px_50px_rgba(0,0,0,0.15)]">
                    </div>

                    <div class="w-full lg:w-1/2 flex flex-col justify-center founder-text-anim opacity-0 translate-y-10">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-[1px] bg-[#D4AF37]"></div>
                            <span class="text-[#D4AF37] uppercase tracking-widest text-xs md:text-sm font-bold">Our Foundation</span>
                        </div>
                        
                        <h2 class="text-3xl md:text-5xl font-serif text-[#1A2F24] font-bold mb-6 leading-tight">
                            A Legacy Built <br> <span class="italic font-light text-[#D4AF37]">on Trust.</span>
                        </h2>
                        
                        <p class="text-gray-600 font-sans text-base md:text-lg leading-relaxed mb-6">
                            Founded in 1981 by Shree Rajkumar Bilala in the heart of Central India, Jain Agro Industries began with a simple yet profound vision: uncompromised quality.
                        </p>
                        
                        <p class="text-gray-600 font-sans text-base md:text-lg leading-relaxed">
                            Over four decades, we have evolved from a humble trading business into a trusted global agri-commodities ecosystem. Today, we refine premium grains and deliver the finest produce from India's fertile lands to international markets, connecting our rich agricultural heritage with the world through precision, integrity, and integrated execution.
                        </p>
                    </div>
                    
                </div>
            </div>

            <div class="w-full pb-24 pt-4 px-4 flex flex-col items-center justify-center">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-[#1A2F24] mb-4 text-center">
                    A Legacy of Growth
                </h2>
                <div class="w-20 md:w-28 h-[3px] bg-[#D4AF37] mx-auto rounded-full"></div>
            </div>

        </section>

        @php
            $milestones = [
                ['year' => '1981', 'title' => 'Jain Traders', 'desc' => 'The foundation stone was laid by Shree Rajkumar Bilala, beginning as a humble trading business in Central India with a vision for uncompromised quality.', 'img' => 'product1.jpeg'], 
                ['year' => '1990', 'title' => 'M/S Manoj Kumar Rajkumar', 'desc' => 'Expansion of operations and establishment of deeper connections directly with farmers in the fertile Malwa-Nimar region.', 'img' => 'product2.jpeg'], 
                ['year' => '2003', 'title' => 'Jain Warehouse', 'desc' => 'Significant infrastructure scaling. Dedicated warehousing was built to ensure produce could be securely stored and preserved year-round.', 'img' => 'product3.jpeg'], 
                ['year' => '2017', 'title' => 'Jain Coldstorage', 'desc' => 'Integration of climate-control technology to maintain the nutritional value, freshness, and 100% natural color of the goods indefinitely.', 'img' => 'product4.jpeg'], 
                ['year' => '2020', 'title' => 'Jain Sortex Plant', 'desc' => 'A massive leap into precision manufacturing. Implementing automated systems and advanced sortex technology to meet rigorous global standards.', 'img' => 'product7.jpeg'], 
                ['year' => '2024', 'title' => 'Garvit Enterprises', 'desc' => 'The launch of our dedicated export and modern business arm, bringing the heritage and quality of Malwa-Nimar to international markets globally.', 'img' => 'product9.jpeg'], 
            ];
            $groupedMilestones = array_chunk($milestones, 3);
        @endphp

        <section class="relative w-full">
            
            <div class="sticky top-0 w-full h-screen overflow-hidden z-0 bg-[#050505]">
                @foreach($groupedMilestones as $index => $group)
                    <div id="bg-layer-{{ $index }}" class="timeline-bg-layer absolute inset-0 w-full h-full" style="opacity: {{ $index === 0 ? 1 : 0 }}; z-index: {{ $index === 0 ? 10 : 0 }};">
                        <img id="bg-img-{{ $index }}" src="{{ asset('images/' . $group[0]['img']) }}" class="w-full h-full object-cover bg-img-scale" alt="Background Phase {{ $index + 1 }}">
                        <div class="absolute inset-0 bg-black/70"></div>
                    </div>
                @endforeach
            </div>

            <div class="relative z-10 -mt-[100vh]">
                @foreach($groupedMilestones as $index => $group)
                    <div class="step-section w-full min-h-screen flex flex-col items-center justify-center px-4 py-24" data-index="{{ $index }}">
                        
                        <div class="glass-card w-full max-w-[95vw] lg:max-w-6xl xl:max-w-7xl bg-white/5 backdrop-blur-md border border-white/10 p-6 md:p-12 rounded-[2rem] shadow-[0_30px_60px_rgba(0,0,0,0.6)] opacity-0 translate-y-16">
                            
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">
                                @foreach($group as $item)
                                    <div class="flex flex-col text-center md:text-left pt-8 md:pt-0 md:px-6 first:pt-0 first:md:px-0">
                                        <div class="text-[#D4AF37] font-serif text-5xl lg:text-6xl font-bold mb-3 leading-none drop-shadow-lg">
                                            {{ $item['year'] }}
                                        </div>
                                        <h3 class="text-xl md:text-2xl lg:text-3xl font-serif text-white font-bold mb-4">
                                            {{ $item['title'] }}
                                        </h3>
                                        <div class="w-12 h-[2px] bg-[#D4AF37] mx-auto md:mx-0 mb-4 lg:mb-6"></div>
                                        <p class="text-gray-300 font-sans text-sm lg:text-base leading-relaxed">
                                            {{ $item['desc'] }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>

                        </div>

                    </div>
                @endforeach
            </div>

        </section>

        <section class="w-full bg-[#FCF8F2] py-20 md:py-32 px-4 relative z-20">
            <div class="max-w-7xl mx-auto">
                
                <div class="mb-16 text-center md:text-left">
                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-[#1A2F24] mb-4 leading-tight">
                        Our Directors
                    </h2>
                    <div class="w-20 md:w-28 h-[3px] bg-[#D4AF37] rounded-full mx-auto md:mx-0 opacity-80"></div>
                </div>

                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8">
                    
                    <div class="director-card group bg-white rounded-2xl p-5 md:p-8 shadow-[0_10px_40px_rgba(0,0,0,0.03)] hover:shadow-[0_20px_50px_rgba(212,175,55,0.1)] transition-all duration-500 flex flex-col items-center text-center border border-gray-100 hover:border-[#D4AF37]/30 transform hover:-translate-y-2GS">
                        <div class="relative w-24 h-24 md:w-32 md:h-32 mb-4 md:mb-6 rounded-full overflow-hidden border-4 border-[#FCF8F2] group-hover:border-[#D4AF37] transition-colors duration-500">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=300&auto=format&fit=crop" alt="Rajkumar Bilala" class="w-full h-full object-cover">
                        </div>
                        <h3 class="font-serif text-base md:text-xl font-bold text-[#1A2F24] mb-1.5 md:mb-2 group-hover:text-[#D4AF37] transition-colors uppercase leading-snug">Rajkumar Bilala</h3>
                        <p class="font-sans text-[9px] md:text-xs font-bold text-gray-400 uppercase tracking-[0.15em] leading-tight">Founder & Chairman</p>
                    </div>

                    <div class="director-card group bg-white rounded-2xl p-5 md:p-8 shadow-[0_10px_40px_rgba(0,0,0,0.03)] hover:shadow-[0_20px_50px_rgba(212,175,55,0.1)] transition-all duration-500 flex flex-col items-center text-center border border-gray-100 hover:border-[#D4AF37]/30 transform hover:-translate-y-2GS">
                        <div class="relative w-24 h-24 md:w-32 md:h-32 mb-4 md:mb-6 rounded-full overflow-hidden border-4 border-[#FCF8F2] group-hover:border-[#D4AF37] transition-colors duration-500">
                            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=300&auto=format&fit=crop" alt="Manoj Bilala" class="w-full h-full object-cover">
                        </div>
                        <h3 class="font-serif text-base md:text-xl font-bold text-[#1A2F24] mb-1.5 md:mb-2 group-hover:text-[#D4AF37] transition-colors uppercase leading-snug">Manoj Bilala</h3>
                        <p class="font-sans text-[9px] md:text-xs font-bold text-gray-400 uppercase tracking-[0.15em] leading-tight">Director</p>
                    </div>

                    <div class="director-card group bg-white rounded-2xl p-5 md:p-8 shadow-[0_10px_40px_rgba(0,0,0,0.03)] hover:shadow-[0_20px_50px_rgba(212,175,55,0.1)] transition-all duration-500 flex flex-col items-center text-center border border-gray-100 hover:border-[#D4AF37]/30 transform hover:-translate-y-2GS">
                        <div class="relative w-24 h-24 md:w-32 md:h-32 mb-4 md:mb-6 rounded-full overflow-hidden border-4 border-[#FCF8F2] group-hover:border-[#D4AF37] transition-colors duration-500">
                            <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?q=80&w=300&auto=format&fit=crop" alt="Sharad Bilala" class="w-full h-full object-cover">
                        </div>
                        <h3 class="font-serif text-base md:text-xl font-bold text-[#1A2F24] mb-1.5 md:mb-2 group-hover:text-[#D4AF37] transition-colors uppercase leading-snug">Sharad Bilala</h3>
                        <p class="font-sans text-[9px] md:text-xs font-bold text-gray-400 uppercase tracking-[0.15em] leading-tight">Managing Director</p>
                    </div>

                    <div class="director-card group bg-white rounded-2xl p-5 md:p-8 shadow-[0_10px_40px_rgba(0,0,0,0.03)] hover:shadow-[0_20px_50px_rgba(212,175,55,0.1)] transition-all duration-500 flex flex-col items-center text-center border border-gray-100 hover:border-[#D4AF37]/30 transform hover:-translate-y-2GS">
                        <div class="relative w-24 h-24 md:w-32 md:h-32 mb-4 md:mb-6 rounded-full overflow-hidden border-4 border-[#FCF8F2] group-hover:border-[#D4AF37] transition-colors duration-500">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=300&auto=format&fit=crop" alt="Divyansh Bilala" class="w-full h-full object-cover">
                        </div>
                        <h3 class="font-serif text-base md:text-xl font-bold text-[#1A2F24] mb-1.5 md:mb-2 group-hover:text-[#D4AF37] transition-colors uppercase leading-snug">Divyansh Bilala</h3>
                        <p class="font-sans text-[9px] md:text-xs font-bold text-gray-400 uppercase tracking-[0.15em] leading-tight">Additional Director</p>
                    </div>

                </div>
            </div>
        </section>

    </div> <script>
        document.addEventListener('DOMContentLoaded', function () {
            
            gsap.registerPlugin(ScrollTrigger);

            // HERO
            let heroTl = gsap.timeline();
            heroTl.to("#hero-subtitle", { opacity: 1, y: 0, duration: 0.8, ease: "power3.out", delay: 0.2 })
                  .to("#hero-title", { opacity: 1, y: 0, duration: 0.8, ease: "power3.out" }, "-=0.4")
                  .to("#hero-text", { opacity: 1, y: 0, duration: 0.8, ease: "power3.out" }, "-=0.4");

            // FOUNDERS
            gsap.to('.founder-img-anim', {
                y: 0, opacity: 1, duration: 1.2, ease: "power3.out",
                scrollTrigger: { trigger: '.founder-img-anim', start: "top 85%" }
            });

            gsap.to('.founder-text-anim', {
                y: 0, opacity: 1, duration: 1.2, ease: "power3.out", delay: 0.2, 
                scrollTrigger: { trigger: '.founder-img-anim', start: "top 85%" }
            });

            // TIMELINE
            gsap.to('#bg-img-0', { scale: 1.05, duration: 6, ease: "none" });

            const sections = gsap.utils.toArray('.step-section');

            function switchBackground(activeIndex) {
                const bgLayers = gsap.utils.toArray('.timeline-bg-layer');
                bgLayers.forEach((layer, i) => {
                    const img = layer.querySelector('.bg-img-scale');
                    if (i === activeIndex) {
                        gsap.set(layer, { zIndex: 10 });
                        gsap.to(layer, { opacity: 1, duration: 0.8, ease: "power2.inOut" });
                        if(img) gsap.to(img, { scale: 1.08, duration: 6, ease: "none" }); 
                    } else {
                        gsap.set(layer, { zIndex: 0 });
                        gsap.to(layer, { opacity: 0, duration: 0.8, ease: "power2.inOut" });
                        if(img) gsap.to(img, { scale: 1, duration: 1 }); 
                    }
                });
            }

            sections.forEach((section, index) => {
                ScrollTrigger.create({
                    trigger: section, start: "top 50%", end: "bottom 50%",
                    onToggle: (self) => { if(self.isActive) switchBackground(index); }
                });

                const card = section.querySelector('.glass-card');
                gsap.to(card, {
                    y: 0, opacity: 1, duration: 1.2, ease: "power3.out",
                    scrollTrigger: { trigger: section, start: "top 80%", toggleActions: "play none none reverse" }
                });
            });

            // ==========================================
            // FIXED: SNAPPY CASCADE ANIMATION
            // ==========================================
            gsap.fromTo('.director-card', 
                { y: 30, opacity: 0 }, // Reduced movement distance
                {
                    y: 0, 
                    opacity: 1, 
                    duration: 0.5, // Fasts animation per card (was 0.8)
                    stagger: 0.08, // Very fast delay between cards (was 0.15)
                    ease: "sine.out", // Snappier ease
                    scrollTrigger: {
                        trigger: '.director-card',
                        start: "top 90%", // Triggers slightly earlier
                        toggleActions: "play none none reverse"
                    }
                }
            );

        });
    </script>
</x-layouts.app>