<x-layouts.app>

    <div class="w-full overflow-clip bg-[#FCF8F2]">

        <section class="relative w-full flex flex-col items-center justify-start pt-8 md:pt-14 pb-8 md:pb-12 bg-[#050505]">
            
            <img src="{{ asset('images/produce-hero.jpg') }}" 
                 alt="Premium Agricultural Produce" 
                 class="absolute inset-0 w-full h-full object-cover opacity-35">
            
            <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/40 to-transparent pointer-events-none"></div>
            <div class="absolute -bottom-[2px] left-0 w-full h-10 md:h-14 bg-gradient-to-t from-[#FCF8F2] to-transparent pointer-events-none z-0"></div>

            <div class="relative z-10 text-center px-4 max-w-4xl mx-auto w-full">
                <div class="inline-flex items-center justify-center gap-2 md:gap-4 mb-4 md:mb-6 opacity-0 translate-y-5" id="hero-subtitle">
                    <div class="w-8 md:w-12 h-[1px] bg-[#D4AF37]"></div>
                    <span class="text-[#D4AF37] uppercase tracking-[0.2em] md:tracking-[0.3em] text-xs md:text-sm font-bold">Premium Quality</span>
                    <div class="w-8 md:w-12 h-[1px] bg-[#D4AF37]"></div>
                </div>
                
                <h1 class="text-[2.25rem] leading-[1.1] sm:text-5xl md:text-6xl lg:text-7xl font-serif font-bold text-white mb-4 md:mb-6 opacity-0 translate-y-5 drop-shadow-lg" id="hero-title">
                    Our <span class="italic text-transparent bg-clip-text bg-gradient-to-r from-[#D4AF37] to-[#F3E5AB]">Produce.</span>
                </h1>
                
                <p class="text-gray-300 text-sm md:text-lg font-sans max-w-2xl mx-auto font-light leading-relaxed opacity-0 translate-y-5 px-2" id="hero-text">
                    Sourced directly from the fertile Malwa-Nimar region, processed with state-of-the-art sortex technology, and exported globally with unmatched consistency.
                </p>
            </div>
        </section>

        <section class="relative w-full pt-8 md:pt-10 pb-16 md:py-24 px-4 z-20 bg-[#FCF8F2]">
            <div class="max-w-7xl mx-auto">
                
                <div class="flex flex-wrap items-center justify-center gap-3 md:gap-6 mb-12 md:mb-16 filter-anim opacity-0 translate-y-5">
                    <button class="px-6 py-2 rounded-full border-2 border-[#1A2F24] bg-[#1A2F24] text-white font-sans font-bold text-sm md:text-base uppercase tracking-wider transition-all hover:shadow-lg">All</button>
                    <button class="px-6 py-2 rounded-full border-2 border-gray-300 bg-transparent text-gray-500 hover:border-[#D4AF37] hover:text-[#D4AF37] font-sans font-bold text-sm md:text-base uppercase tracking-wider transition-all">Pulses</button>
                    <button class="px-6 py-2 rounded-full border-2 border-gray-300 bg-transparent text-gray-500 hover:border-[#D4AF37] hover:text-[#D4AF37] font-sans font-bold text-sm md:text-base uppercase tracking-wider transition-all">Grains</button>
                    <button class="px-6 py-2 rounded-full border-2 border-gray-300 bg-transparent text-gray-500 hover:border-[#D4AF37] hover:text-[#D4AF37] font-sans font-bold text-sm md:text-base uppercase tracking-wider transition-all">Oil Seeds</button>
                </div>

                @php
                    // Array of placeholder products. Update with your exact names, specs, and local images!
                    $products = [
                        ['name' => 'Kabuli Chickpeas', 'category' => 'Pulses', 'specs' => 'Sizes: 42-44, 44-46, 58-60', 'desc' => 'Premium, sortex-clean white chickpeas known for their large size and excellent cooking quality.', 'img' => 'https://images.unsplash.com/photo-1515543904379-3d757afe72e4?q=80&w=800&auto=format&fit=crop'],
                        ['name' => 'Desi Chickpeas', 'category' => 'Pulses', 'specs' => 'Grade: Machine Clean / Sortex', 'desc' => 'High-protein brown chickpeas sourced directly from the Malwa region, ideal for milling and splitting.', 'img' => 'https://images.unsplash.com/photo-1585655616550-9e665fb6615b?q=80&w=800&auto=format&fit=crop'],
                        ['name' => 'Soybean Seeds', 'category' => 'Oil Seeds', 'specs' => 'Moisture: 10% Max', 'desc' => 'Non-GMO, high-oil content soybeans perfectly graded for industrial extraction and food processing.', 'img' => 'https://images.unsplash.com/photo-1599557222452-9b28a8927878?q=80&w=800&auto=format&fit=crop'],
                        ['name' => 'Yellow Maize', 'category' => 'Grains', 'specs' => 'Aflatoxin: Under 20 PPB', 'desc' => 'Golden yellow corn, naturally dried and carefully stored to maintain maximum nutritional value.', 'img' => 'https://images.unsplash.com/photo-1600861194942-f883de0b3bc1?q=80&w=800&auto=format&fit=crop'],
                        ['name' => 'Durum Wheat', 'category' => 'Grains', 'specs' => 'Protein: 12% Min', 'desc' => 'Hard, premium-grade wheat ideal for pasta, semolina, and high-end bakery applications.', 'img' => 'https://images.unsplash.com/photo-1574323347407-f5e1ad6d020b?q=80&w=800&auto=format&fit=crop'],
                        ['name' => 'Green Peas', 'category' => 'Pulses', 'specs' => 'Color: 100% Natural Green', 'desc' => 'Vibrant, sortex-cleaned whole green peas offering a perfect balance of taste and firm texture.', 'img' => 'https://images.unsplash.com/photo-1596423735880-5aa79c94beba?q=80&w=800&auto=format&fit=crop'],
                    ];
                @endphp

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
                    
                    @foreach($products as $product)
                        <div class="product-card group flex flex-col bg-white rounded-[2rem] overflow-hidden shadow-[0_10px_40px_rgba(0,0,0,0.03)] border border-gray-100 hover:border-[#D4AF37]/50 hover:shadow-[0_20px_50px_rgba(212,175,55,0.15)] transition-all duration-500 transform hover:-translate-y-2">
                            
                            <div class="relative h-64 overflow-hidden w-full bg-gray-100">
                                <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                
                                <div class="absolute top-4 left-4 bg-[#1A2F24]/90 backdrop-blur-sm px-4 py-1.5 rounded-full">
                                    <span class="text-white text-[10px] md:text-xs font-bold uppercase tracking-widest">{{ $product['category'] }}</span>
                                </div>
                            </div>

                            <div class="p-6 md:p-8 flex flex-col flex-grow">
                                <h3 class="text-2xl md:text-3xl font-serif font-bold text-[#1A2F24] mb-2 group-hover:text-[#D4AF37] transition-colors leading-tight">
                                    {{ $product['name'] }}
                                </h3>
                                
                                <div class="flex items-center gap-2 mb-4">
                                    <svg class="w-4 h-4 text-[#D4AF37]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    <span class="text-xs md:text-sm font-sans font-bold text-gray-500 uppercase tracking-wide">{{ $product['specs'] }}</span>
                                </div>

                                <p class="text-gray-600 font-sans text-sm md:text-base leading-relaxed mb-8 flex-grow">
                                    {{ $product['desc'] }}
                                </p>

                                <a href="/contact" class="inline-flex items-center justify-between w-full border-t border-gray-100 pt-4 group/btn mt-auto">
                                    <span class="text-[#1A2F24] font-bold font-sans uppercase tracking-wider text-sm group-hover/btn:text-[#D4AF37] transition-colors">Request Quote</span>
                                    <svg class="w-5 h-5 text-[#1A2F24] transform group-hover/btn:translate-x-2 group-hover/btn:text-[#D4AF37] transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                                </a>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        <section class="w-full py-20 bg-[#1A2F24] relative overflow-hidden">
            <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(#D4AF37 1px, transparent 1px); background-size: 30px 30px;"></div>
            
            <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-5xl font-serif text-white font-bold mb-6 leading-tight">
                    Looking for <span class="italic text-[#D4AF37]">Bulk Specifications?</span>
                </h2>
                <p class="text-gray-300 font-sans text-base md:text-xl leading-relaxed mb-10 max-w-2xl mx-auto">
                    Our team provides tailored packing, precise grading, and seamless global logistics. Reach out to discuss your exact requirements.
                </p>
                <a href="/contact" class="inline-block bg-[#D4AF37] text-[#1A2F24] px-10 py-4 rounded-full font-sans font-bold text-sm md:text-base uppercase tracking-wider hover:bg-white hover:shadow-[0_10px_30px_rgba(212,175,55,0.3)] transition-all duration-300 transform hover:-translate-y-1">
                    Contact Our Export Team
                </a>
            </div>
        </section>

    </div> <script>
        document.addEventListener('DOMContentLoaded', function () {
            
            gsap.registerPlugin(ScrollTrigger);

            // 1. HERO ANIMATIONS
            let heroTl = gsap.timeline();
            heroTl.to("#hero-subtitle", { opacity: 1, y: 0, duration: 0.8, ease: "power3.out", delay: 0.2 })
                  .to("#hero-title", { opacity: 1, y: 0, duration: 0.8, ease: "power3.out" }, "-=0.4")
                  .to("#hero-text", { opacity: 1, y: 0, duration: 0.8, ease: "power3.out" }, "-=0.4");

            // 2. FILTER BADGES ANIMATION
            gsap.to('.filter-anim', {
                y: 0, opacity: 1, duration: 1, ease: "power3.out",
                scrollTrigger: { trigger: '.filter-anim', start: "top 90%" }
            });

            // 3. PRODUCT CARDS SNAPPY CASCADE
            gsap.fromTo('.product-card', 
                { y: 40, opacity: 0 }, 
                {
                    y: 0, 
                    opacity: 1, 
                    duration: 0.6, 
                    stagger: 0.1, // Fast cascade effect
                    ease: "sine.out",
                    scrollTrigger: {
                        trigger: '.product-card',
                        start: "top 85%", 
                        toggleActions: "play none none reverse"
                    }
                }
            );

        });
    </script>
</x-layouts.app>