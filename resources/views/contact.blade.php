<x-layouts.app>

    <div class="w-full overflow-clip bg-[#FCF8F2]">

        {{-- 1. HERO SECTION --}}
        <section class="relative w-full flex flex-col items-center justify-start pt-8 md:pt-14 pb-8 md:pb-10 bg-[#050505]">
            
            <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?q=80&w=2000&auto=format&fit=crop" 
                 alt="Global Agricultural Logistics & Export" 
                 class="absolute inset-0 w-full h-full object-cover opacity-25">
            
            <div class="absolute inset-0 bg-gradient-to-b from-black/85 via-black/50 to-transparent pointer-events-none"></div>
            <div class="absolute -bottom-[2px] left-0 w-full h-10 md:h-14 bg-gradient-to-t from-[#FCF8F2] to-transparent pointer-events-none z-0"></div>

            <div class="relative z-10 text-center px-4 max-w-4xl mx-auto w-full">
                <div class="inline-flex items-center justify-center gap-2 md:gap-4 mb-4 md:mb-6 opacity-0 translate-y-5" id="hero-subtitle">
                    <div class="w-8 md:w-12 h-[1px] bg-[#D4AF37]"></div>
                    <span class="text-[#D4AF37] uppercase tracking-[0.2em] md:tracking-[0.3em] text-xs md:text-sm font-bold">Direct Procurement & Export Desk</span>
                    <div class="w-8 md:w-12 h-[1px] bg-[#D4AF37]"></div>
                </div>
                
                <h1 class="text-[2.25rem] leading-[1.1] sm:text-5xl md:text-6xl lg:text-7xl font-serif font-bold text-white mb-4 md:mb-6 opacity-0 translate-y-5 drop-shadow-lg" id="hero-title">
                    Connect With <span class="italic text-transparent bg-clip-text bg-gradient-to-r from-[#D4AF37] to-[#F3E5AB]">Our Team.</span>
                </h1>
                
                <p class="text-gray-300 text-sm md:text-lg font-sans max-w-2xl mx-auto font-light leading-relaxed opacity-0 translate-y-5 px-2" id="hero-text">
                    Whether sourcing bulk container consignments or partnering on regional procurement, our export and commodities desk is at your service.
                </p>
            </div>
        </section>

        {{-- 2. MAIN CONTACT & RFQ SECTION --}}
        <section class="relative w-full pt-8 md:pt-10 pb-12 md:pb-20 px-4 sm:px-6 lg:px-12 xl:px-20 z-20 bg-[#FCF8F2]">
            <div class="max-w-7xl mx-auto">

                {{-- Flash Success Alert --}}
                @if(session('success'))
                    <div class="mb-10 p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 flex items-center gap-4 shadow-sm animate-fade-in">
                        <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center flex-shrink-0 text-emerald-600">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-base font-sans">Inquiry Submitted Successfully</h4>
                            <p class="text-sm text-emerald-700">{{ session('success') }}</p>
                        </div>
                    </div>
                @endif

                {{-- Validation Errors --}}
                @if ($errors->any())
                    <div class="mb-10 p-5 rounded-2xl bg-red-50 border border-red-200 text-red-800 shadow-sm">
                        <div class="font-bold text-base mb-2 font-sans flex items-center gap-2">
                            <svg class="w-5 h-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                            </svg>
                            Please correct the errors below:
                        </div>
                        <ul class="list-disc list-inside text-sm text-red-700 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
                    
                    {{-- LEFT COLUMN: Direct Info, Operating Units & WhatsApp Card (5 Cols) --}}
                    <div class="lg:col-span-5 flex flex-col gap-8 contact-info-card opacity-0 translate-y-8">
                        
                        {{-- Office & Plant Locations --}}
                        <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-[0_10px_40px_rgba(0,0,0,0.03)] border border-gray-100 hover:border-[#D4AF37]/40 transition-all duration-300">
                            <div class="flex items-center gap-3 mb-6">
                                <span class="w-10 h-10 rounded-full bg-[#1A2F24] text-[#D4AF37] flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </span>
                                <div>
                                    <h3 class="font-serif font-bold text-2xl text-[#1A2F24]">Headquarters & Plant</h3>
                                    <p class="text-xs uppercase tracking-widest text-[#D4AF37] font-sans font-bold">Central India Agri Hub</p>
                                </div>
                            </div>

                            <div class="space-y-4 text-sm font-sans text-gray-600">
                                <div class="border-b border-gray-100 pb-4">
                                    <p class="font-bold text-[#1A2F24] mb-1">Jain Agro Industries & Sortex Facility</p>
                                    <p class="leading-relaxed">Industrial Area / Mandi Road, Barnagar (Badnagar), District Ujjain, Madhya Pradesh - 456771, India</p>
                                </div>
                                <div class="border-b border-gray-100 pb-4">
                                    <p class="font-bold text-[#1A2F24] mb-1">Garvit Enterprises (Export Arm)</p>
                                    <p class="leading-relaxed">Serving international container freight via JNPT (Nhava Sheva) and Mundra Ports.</p>
                                </div>
                                <div>
                                    <p class="font-bold text-[#1A2F24] mb-1">Cold Storage & Warehousing Units</p>
                                    <p class="leading-relaxed">Malwa Agro Corridor, Barnagar, Madhya Pradesh.</p>
                                </div>
                            </div>
                        </div>

                        {{-- Direct Contacts --}}
                        <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-[0_10px_40px_rgba(0,0,0,0.03)] border border-gray-100 hover:border-[#D4AF37]/40 transition-all duration-300">
                            <h3 class="font-serif font-bold text-2xl text-[#1A2F24] mb-6">Direct Channels</h3>
                            
                            <div class="space-y-5">
                                <a href="mailto:exports@jainagroindustries.in" class="flex items-start gap-4 p-3 rounded-2xl hover:bg-[#FCF8F2] transition-colors group">
                                    <span class="w-10 h-10 rounded-full bg-[#FCF8F2] text-[#1A2F24] group-hover:bg-[#1A2F24] group-hover:text-[#D4AF37] flex items-center justify-center flex-shrink-0 transition-colors">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </span>
                                    <div>
                                        <p class="text-xs uppercase tracking-wider text-gray-400 font-bold">Email Us</p>
                                        <p class="font-bold text-[#1A2F24] group-hover:text-[#D4AF37] transition-colors">exports@jainagroindustries.in</p>
                                        <p class="text-xs text-gray-500">info@jainagroindustries.in</p>
                                    </div>
                                </a>

                                <a href="tel:+919752775435" class="flex items-start gap-4 p-3 rounded-2xl hover:bg-[#FCF8F2] transition-colors group">
                                    <span class="w-10 h-10 rounded-full bg-[#FCF8F2] text-[#1A2F24] group-hover:bg-[#1A2F24] group-hover:text-[#D4AF37] flex items-center justify-center flex-shrink-0 transition-colors">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </span>
                                    <div>
                                        <p class="text-xs uppercase tracking-wider text-gray-400 font-bold">Trade Phone</p>
                                        <p class="font-bold text-[#1A2F24] group-hover:text-[#D4AF37] transition-colors">+91 97527 75435</p>
                                        <p class="text-xs text-gray-500">Mon - Sat: 9:00 AM - 7:30 PM IST</p>
                                    </div>
                                </a>

                                <a href="https://wa.me/919752775435?text=Hello%20Jain%20Agro%20Industries,%20I%20would%20like%20to%20inquire%20about%20agricultural%20produce%20pricing%20and%20availability." 
                                   target="_blank" 
                                   rel="noopener noreferrer" 
                                   class="flex items-center justify-between w-full p-4 rounded-2xl bg-emerald-600 text-white hover:bg-emerald-700 transition-all duration-300 shadow-md hover:shadow-lg group mt-2">
                                    <div class="flex items-center gap-3">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.311.045-.698.059-1.146-.086-.307-.1-.689-.253-1.209-.481-2.187-.96-3.609-3.18-3.72-3.327-.109-.147-.887-1.18-.887-2.253 0-1.074.558-1.603.757-1.821.199-.219.434-.274.579-.274.145 0 .289.001.417.008.136.006.318-.052.497.378.188.452.641 1.564.698 1.678.058.115.096.25.02.4-.076.152-.114.246-.227.381-.115.135-.241.302-.345.405-.115.115-.235.24-.101.471.135.231.599.989 1.285 1.6 1.053.939 1.748 1.233 1.996 1.356.248.123.393.109.539-.059.146-.168.625-.729.791-.98.167-.251.334-.21.558-.126.225.084 1.425.672 1.669.794.244.123.407.184.466.287.059.103.059.599-.085 1.004z"/>
                                        </svg>
                                        <div class="text-left">
                                            <p class="text-xs uppercase tracking-wider text-emerald-100 font-bold">Fastest Response</p>
                                            <p class="font-bold text-sm sm:text-base">WhatsApp Quick Trade Desk</p>
                                        </div>
                                    </div>
                                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        {{-- Export Credentials Badge --}}
                        <div class="bg-[#1A2F24] rounded-3xl p-6 sm:p-8 text-white relative overflow-hidden shadow-lg">
                            <div class="absolute -right-8 -bottom-8 w-36 h-36 rounded-full bg-[#D4AF37]/10 pointer-events-none"></div>
                            <span class="text-[#D4AF37] uppercase tracking-widest text-xs font-bold font-sans">B2B Trade Assurance</span>
                            <h4 class="font-serif font-bold text-xl text-white mt-1 mb-4">Export & Quality Standards</h4>
                            
                            <ul class="space-y-3 text-xs sm:text-sm text-gray-300 font-sans">
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-[#D4AF37] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <span>Sortex Cleaned up to 99.5%+ Purity</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-[#D4AF37] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <span>SGS, Geo-Chem & Third-Party Lab Audited</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-[#D4AF37] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <span>FOB / CIF / CFR Global Delivery Terms</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-[#D4AF37] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <span>Custom 25kg / 50kg PP & Jute Bag Branding</span>
                                </li>
                            </ul>
                        </div>

                    </div>

                    {{-- RIGHT COLUMN: Request For Quote (RFQ) Form (7 Cols) --}}
                    <div class="lg:col-span-7 bg-white rounded-3xl p-6 sm:p-10 shadow-[0_20px_50px_rgba(0,0,0,0.04)] border border-gray-100 contact-form-card opacity-0 translate-y-8">
                        
                        <div class="mb-8">
                            <div class="inline-flex items-center gap-2 mb-2">
                                <span class="w-2 h-2 rounded-full bg-[#D4AF37]"></span>
                                <span class="text-xs uppercase tracking-[0.2em] text-[#D4AF37] font-bold font-sans">Formal Procurement Request</span>
                            </div>
                            <h2 class="font-serif font-bold text-3xl sm:text-4xl text-[#1A2F24] leading-tight">
                                Request a Quote <span class="italic text-[#D4AF37]">& Pricing</span>
                            </h2>
                            <p class="text-gray-500 font-sans text-sm mt-2">
                                Fill in your commodity requirement specifications below. Our team prepares customized quotations based on current mandi rates and shipping indices.
                            </p>
                        </div>

                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                            @csrf

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                {{-- Name --}}
                                <div>
                                    <label for="name" class="block text-xs uppercase tracking-wider font-bold text-[#1A2F24] mb-2 font-sans">
                                        Your Name <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="name" id="name" required value="{{ old('name') }}"
                                           placeholder="e.g. Ramesh Patel / John Doe" 
                                           class="w-full px-4 py-3.5 rounded-xl border border-gray-200 focus:border-[#D4AF37] focus:ring-2 focus:ring-[#D4AF37]/20 outline-none transition-all font-sans text-sm text-[#1A2F24] bg-gray-50/50">
                                </div>

                                {{-- Company Name --}}
                                <div>
                                    <label for="company" class="block text-xs uppercase tracking-wider font-bold text-[#1A2F24] mb-2 font-sans">
                                        Company / Trading Firm
                                    </label>
                                    <input type="text" name="company" id="company" value="{{ old('company') }}"
                                           placeholder="e.g. Al-Noor Trading LLC" 
                                           class="w-full px-4 py-3.5 rounded-xl border border-gray-200 focus:border-[#D4AF37] focus:ring-2 focus:ring-[#D4AF37]/20 outline-none transition-all font-sans text-sm text-[#1A2F24] bg-gray-50/50">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                {{-- Email --}}
                                <div>
                                    <label for="email" class="block text-xs uppercase tracking-wider font-bold text-[#1A2F24] mb-2 font-sans">
                                        Email Address <span class="text-red-500">*</span>
                                    </label>
                                    <input type="email" name="email" id="email" required value="{{ old('email') }}"
                                           placeholder="name@company.com" 
                                           class="w-full px-4 py-3.5 rounded-xl border border-gray-200 focus:border-[#D4AF37] focus:ring-2 focus:ring-[#D4AF37]/20 outline-none transition-all font-sans text-sm text-[#1A2F24] bg-gray-50/50">
                                </div>

                                {{-- Phone --}}
                                <div>
                                    <label for="phone" class="block text-xs uppercase tracking-wider font-bold text-[#1A2F24] mb-2 font-sans">
                                        Phone / WhatsApp <span class="text-red-500">*</span>
                                    </label>
                                    <input type="tel" name="phone" id="phone" required value="{{ old('phone') }}"
                                           placeholder="+91 / +971 / +1 ..." 
                                           class="w-full px-4 py-3.5 rounded-xl border border-gray-200 focus:border-[#D4AF37] focus:ring-2 focus:ring-[#D4AF37]/20 outline-none transition-all font-sans text-sm text-[#1A2F24] bg-gray-50/50">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                {{-- Commodity Required --}}
                                <div>
                                    <label for="product" class="block text-xs uppercase tracking-wider font-bold text-[#1A2F24] mb-2 font-sans">
                                        Commodity of Interest
                                    </label>
                                    <select name="product" id="product" 
                                            class="w-full px-4 py-3.5 rounded-xl border border-gray-200 focus:border-[#D4AF37] focus:ring-2 focus:ring-[#D4AF37]/20 outline-none transition-all font-sans text-sm text-[#1A2F24] bg-gray-50/50">
                                        <option value="">Select Agricultural Produce</option>
                                        <option value="Kabuli Chickpeas (Dollar Chana)" {{ old('product') == 'Kabuli Chickpeas (Dollar Chana)' ? 'selected' : '' }}>Kabuli Chickpeas (Dollar Chana)</option>
                                        <option value="Desi Chickpeas (Brown Chana)" {{ old('product') == 'Desi Chickpeas (Brown Chana)' ? 'selected' : '' }}>Desi Chickpeas (Brown Chana)</option>
                                        <option value="Soybean Seeds" {{ old('product') == 'Soybean Seeds' ? 'selected' : '' }}>Soybean Seeds</option>
                                        <option value="Yellow Maize" {{ old('product') == 'Yellow Maize' ? 'selected' : '' }}>Yellow Maize</option>
                                        <option value="Durum Wheat" {{ old('product') == 'Durum Wheat' ? 'selected' : '' }}>Durum Wheat</option>
                                        <option value="Green Peas" {{ old('product') == 'Green Peas' ? 'selected' : '' }}>Green Peas</option>
                                        <option value="Other Agricultural Produce" {{ old('product') == 'Other Agricultural Produce' ? 'selected' : '' }}>Other Agricultural Produce</option>
                                    </select>
                                </div>

                                {{-- Quantity / Volume --}}
                                <div>
                                    <label for="quantity" class="block text-xs uppercase tracking-wider font-bold text-[#1A2F24] mb-2 font-sans">
                                        Volume / Order Size
                                    </label>
                                    <input type="text" name="quantity" id="quantity" value="{{ old('quantity') }}"
                                           placeholder="e.g. 1 x 20ft FCL / 50 MT / 200 Quintals" 
                                           class="w-full px-4 py-3.5 rounded-xl border border-gray-200 focus:border-[#D4AF37] focus:ring-2 focus:ring-[#D4AF37]/20 outline-none transition-all font-sans text-sm text-[#1A2F24] bg-gray-50/50">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                {{-- Packaging Requirement --}}
                                <div>
                                    <label for="packaging" class="block text-xs uppercase tracking-wider font-bold text-[#1A2F24] mb-2 font-sans">
                                        Packaging Preference
                                    </label>
                                    <select name="packaging" id="packaging" 
                                            class="w-full px-4 py-3.5 rounded-xl border border-gray-200 focus:border-[#D4AF37] focus:ring-2 focus:ring-[#D4AF37]/20 outline-none transition-all font-sans text-sm text-[#1A2F24] bg-gray-50/50">
                                        <option value="Standard 50kg PP Bags">Standard 50kg PP Bags</option>
                                        <option value="Standard 25kg PP Bags">Standard 25kg PP Bags</option>
                                        <option value="50kg Jute / Gunny Bags">50kg Jute / Gunny Bags</option>
                                        <option value="1000kg Jumbo Bulk Bags">1000kg Jumbo Bulk Bags</option>
                                        <option value="Custom Buyer Branded Bags">Custom Buyer Branded Bags</option>
                                    </select>
                                </div>

                                {{-- Trade Terms --}}
                                <div>
                                    <label for="trade_terms" class="block text-xs uppercase tracking-wider font-bold text-[#1A2F24] mb-2 font-sans">
                                        Preferred Trade Terms
                                    </label>
                                    <select name="trade_terms" id="trade_terms" 
                                            class="w-full px-4 py-3.5 rounded-xl border border-gray-200 focus:border-[#D4AF37] focus:ring-2 focus:ring-[#D4AF37]/20 outline-none transition-all font-sans text-sm text-[#1A2F24] bg-gray-50/50">
                                        <option value="FOB Indian Port (JNPT / Mundra)">FOB Indian Port (JNPT / Mundra)</option>
                                        <option value="CIF Destination Port">CIF Destination Port</option>
                                        <option value="CFR (Cost & Freight)">CFR (Cost & Freight)</option>
                                        <option value="Ex-Warehouse / Mandi Delivery">Ex-Warehouse / Mandi Delivery (Domestic)</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Specifications / Message --}}
                            <div>
                                <label for="message" class="block text-xs uppercase tracking-wider font-bold text-[#1A2F24] mb-2 font-sans">
                                    Detailed Specifications / Destination Port
                                </label>
                                <textarea name="message" id="message" rows="4" 
                                          placeholder="Specify required size count (e.g. 42-44, 44-46 for chickpeas), max moisture, foreign matter limits, or destination country/port..." 
                                          class="w-full px-4 py-3.5 rounded-xl border border-gray-200 focus:border-[#D4AF37] focus:ring-2 focus:ring-[#D4AF37]/20 outline-none transition-all font-sans text-sm text-[#1A2F24] bg-gray-50/50">{{ old('message') }}</textarea>
                            </div>

                            {{-- Submit Button --}}
                            <div class="pt-2">
                                <button type="submit" 
                                        class="w-full py-4 px-8 rounded-full bg-[#1A2F24] text-white hover:bg-emerald-700 font-sans font-bold text-sm sm:text-base uppercase tracking-wider transition-all duration-300 shadow-md hover:shadow-xl transform hover:-translate-y-0.5 flex items-center justify-center gap-3 group">
                                    <span>Submit Request for Quotation</span>
                                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </button>
                                <p class="text-center text-xs text-gray-400 mt-3 font-sans">
                                    Your quotation details will be formatted and redirected directly to WhatsApp (+91 97527 75435).
                                </p>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </section>

        {{-- 3. EMBEDDED MAP & LOGISTICS CORRIDOR --}}
        <section class="relative w-full py-12 md:py-16 px-4 sm:px-6 lg:px-12 xl:px-20 bg-[#F5EFE6] border-t border-gray-200">
            <div class="max-w-7xl mx-auto">
                <div class="text-center max-w-3xl mx-auto mb-10">
                    <span class="text-[#D4AF37] uppercase tracking-[0.25em] text-xs font-bold font-sans">Strategic Sourcing Hub</span>
                    <h2 class="font-serif font-bold text-3xl sm:text-4xl text-[#1A2F24] mt-2 mb-3">
                        Located at the Heart of India's Pulses & Grain Belt
                    </h2>
                    <p class="text-gray-600 font-sans text-sm sm:text-base">
                        Our sortex plant and cold stores in Barnagar, Madhya Pradesh (Malwa Region) provide immediate access to the highest-grade Kabuli chickpeas, durum wheat, and soybeans in India, with rapid transit to western container ports.
                    </p>
                </div>

                <div class="w-full h-80 sm:h-96 rounded-3xl overflow-hidden shadow-lg border border-gray-200 relative bg-gray-200">
                    <iframe 
                        src="https://maps.google.com/maps?q=Badnagar,+Madhya+Pradesh+456771&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Jain Agro Industries Facility Location - Barnagar, Madhya Pradesh"
                        class="w-full h-full grayscale hover:grayscale-0 transition-all duration-700">
                    </iframe>
                </div>
            </div>
        </section>

    </div>

    {{-- GSAP ANIMATIONS --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            gsap.registerPlugin(ScrollTrigger);

            // 1. Hero Animations
            let heroTl = gsap.timeline();
            heroTl.to("#hero-subtitle", { opacity: 1, y: 0, duration: 0.8, ease: "power3.out", delay: 0.2 })
                  .to("#hero-title", { opacity: 1, y: 0, duration: 0.8, ease: "power3.out" }, "-=0.4")
                  .to("#hero-text", { opacity: 1, y: 0, duration: 0.8, ease: "power3.out" }, "-=0.4");

            // 2. Info Cards & Form Fade In
            gsap.to('.contact-info-card', {
                y: 0, opacity: 1, duration: 1, ease: "power3.out",
                scrollTrigger: { trigger: '.contact-info-card', start: "top 85%" }
            });

            gsap.to('.contact-form-card', {
                y: 0, opacity: 1, duration: 1, ease: "power3.out", delay: 0.15,
                scrollTrigger: { trigger: '.contact-form-card', start: "top 85%" }
            });
        });
    </script>
</x-layouts.app>
