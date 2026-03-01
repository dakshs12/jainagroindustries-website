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
                    <img src="https://images.unsplash.com/photo-1586201375761-83865001e8ac?q=80&w=1920&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover" alt="Grains and Pulses">
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('.heroSwiper', {
                loop: true,
                effect: 'fade', // Crossfade transition per SRS
                fadeEffect: {
                    crossFade: true
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                speed: 1500, // Smooth, slow fade
            });
        });
    </script>

    <div class="h-96 bg-brand-white"></div>
</x-layouts.app>