<x-layouts.app title="Crest Forwarder Inc. | We Move It Better">

    <div x-data="{
            quoteOpen: false,
            step: 1,
            form: {
                service: '',
                origin: '',
                destination: '',
                cargo_details: '',
                first_name: '',
                last_name: '',
                email: '',
                phone: '',
                payment_method: 'cod',
            },
            selectService(name) {
                this.form.service = name;
                this.step = 2;
            },
            submitQuote() {
                // Front-end only for now — no backend/database yet.
                // Once the quote.submit route + Quote model exist, replace this
                // with an actual fetch()/form POST and handle the response.
                this.step = 4;
            },
            resetQuote() {
                this.quoteOpen = false;
                this.step = 1;
                this.form = { service:'', origin:'', destination:'', cargo_details:'', first_name:'', last_name:'', email:'', phone:'', payment_method:'cod' };
            }
         }"
         @keydown.escape.window="quoteOpen = false">


    {{-- HERO SECTION --}}
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-crest-tint/40 to-transparent pointer-events-none"></div>

        <div class="relative max-w-7xl mx-auto px-8 pt-16 pb-14">
            <div class="grid md:grid-cols-2 gap-12 items-center">

                {{-- Left: text content --}}
                <div>
                    <span class="inline-flex items-center gap-2 bg-crest-tint text-crest-primary text-xs font-semibold px-3 py-1.5 rounded-full mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2 4 5v6c0 5 3.4 9.4 8 11 4.6-1.6 8-6 8-11V5l-8-3Z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-4"/>
                        </svg>
                        Cebu-based, nationwide logistics partner
                    </span>

                    <h1 class="text-4xl md:text-5xl font-semibold text-crest-primary leading-[1.1] mb-5 tracking-tight">
                        We <span class="font-extrabold text-crest-primary">MOVE</span> it better.
                    </h1>

                    <p class="text-gray-600 text-lg leading-relaxed mb-8 max-w-md">
                        Freight forwarding, customs brokerage, and cargo solutions tailored to your business — trusted by companies across the Philippines for over 20 years.
                    </p>

                    <div class="flex items-center gap-4 flex-wrap">
                        <button type="button" @click="quoteOpen = true"
                           class="group/btn inline-flex items-center gap-2 bg-crest-accent text-crest-primary-dark font-semibold px-7 py-3.5 rounded-lg shadow-sm hover:shadow-md hover:-translate-y-0.5 hover:bg-crest-accent/90 active:translate-y-0 active:shadow-sm focus:outline-none focus-visible:ring-2 focus-visible:ring-crest-primary focus-visible:ring-offset-2 transition-all duration-200 ease-out">
                            Get a Quote
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200 ease-out group-hover/btn:translate-x-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6"/>
                            </svg>
                        </button>
                        <a href="{{ url('/tracking') }}"
                           class="group/btn inline-flex items-center gap-2 border border-gray-300 text-crest-primary font-semibold px-7 py-3.5 rounded-lg hover:border-crest-primary hover:bg-crest-tint active:bg-crest-tint/70 focus:outline-none focus-visible:ring-2 focus-visible:ring-crest-primary focus-visible:ring-offset-2 transition-all duration-200 ease-out">
                            Track a shipment
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200 ease-out group-hover/btn:translate-x-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6"/>
                            </svg>
                        </a>
                    </div>

                    {{-- Trust strip --}}
                    <div class="flex items-center gap-6 mt-10 pt-6 border-t border-gray-200/70 text-sm text-gray-500 flex-wrap">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-crest-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/>
                            </svg>
                            <span>21+ years in the industry</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-crest-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/>
                            </svg>
                            <span>Branches in Cebu, Manila, Davao &amp; CDO</span>
                        </div>
                    </div>
                </div>

                {{-- Right: hero image with floating badges --}}
                <div class="relative rounded-2xl overflow-hidden h-[420px] shadow-xl ring-1 ring-black/5">
                    <img src="{{ asset('images/hero-truck.jpg') }}"
                         alt="Crest Forwarder truck on the road"
                         class="w-full h-full object-cover">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent"></div>

                    <div class="absolute top-5 left-5 bg-white/95 backdrop-blur rounded-lg px-3 py-2 flex items-center gap-2 shadow-md">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-crest-accent opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-crest-accent"></span>
                        </span>
                        <span class="text-xs font-semibold text-gray-700">Real-time updates</span>
                    </div>

                    <div class="absolute bottom-5 right-5 bg-white/95 backdrop-blur rounded-lg px-3 py-2 flex items-center gap-2 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-crest-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2 4 5v6c0 5 3.4 9.4 8 11 4.6-1.6 8-6 8-11V5l-8-3Z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l2.5 2.5"/>
                        </svg>
                        <span class="text-xs font-semibold text-gray-700">Live tracking</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- STATS BAR --}}
    <section class="border-t border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-8 py-8 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">

            <div class="md:border-l md:border-gray-200">
                <p class="text-2xl font-bold text-gray-900">21+</p>
                <p class="text-sm text-gray-500 mt-1">Years in business</p>
            </div>

            <div class="md:border-l md:border-gray-200">
                <p class="text-2xl font-bold text-gray-900">4</p>
                <p class="text-sm text-gray-500 mt-1">Nationwide branches</p>
            </div>

            <div class="md:border-l md:border-gray-200">
                <p class="text-2xl font-bold text-gray-900">Air · Sea · Land</p>
                <p class="text-sm text-gray-500 mt-1">Freight modes covered</p>
            </div>

            <div class="md:border-l md:border-gray-200">
                <p class="text-2xl font-bold text-gray-900">Global</p>
                <p class="text-sm text-gray-500 mt-1">Reach, local expertise</p>
            </div>

        </div>
    </section>

    {{-- WHAT WE OFFER --}}
    <section class="max-w-7xl mx-auto px-8 py-16">

        <div class="text-center max-w-2xl mx-auto mb-12">
            <p class="text-crest-primary text-sm font-bold tracking-widest uppercase mb-3">What We Offer</p>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">
                Everything you need to ship with confidence
            </h2>
            <p class="text-gray-500 text-base">
                From pickup to delivery, we handle every step of your cargo's journey.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">

            {{-- Freight Forwarding --}}
            <div class="group relative border border-gray-200 rounded-2xl p-6 flex flex-col transition-all duration-300 hover:border-crest-primary/30 hover:shadow-xl hover:shadow-crest-primary/5 hover:-translate-y-1">
                <div class="w-11 h-11 rounded-xl bg-crest-tint flex items-center justify-center mb-5 transition-colors duration-300 group-hover:bg-crest-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-crest-primary transition-colors duration-300 group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 3 3 10.5l3 1.5-1.5 3 3-1.5 1.5 3L16.5 8M14 6l4 4-2 6-6 2-4-4"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2 transition-colors duration-300 group-hover:text-crest-primary">Freight Forwarding</h3>
                <p class="text-sm text-gray-500 mb-6 flex-1">
                    Reliable domestic and international shipping by air, sea, and land, including documentation and customs clearance.
                </p>
                <a href="{{ url('/service') }}" class="group/link inline-flex items-center gap-1.5 text-crest-primary text-sm font-semibold w-fit rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-crest-primary focus-visible:ring-offset-2">
                    <span class="underline-offset-4 group-hover/link:underline">Learn more</span>
                    <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
                </a>
            </div>

            {{-- Land Transportation --}}
            <div class="group relative border border-gray-200 rounded-2xl p-6 flex flex-col transition-all duration-300 hover:border-crest-primary/30 hover:shadow-xl hover:shadow-crest-primary/5 hover:-translate-y-1">
                <div class="w-11 h-11 rounded-xl bg-crest-tint flex items-center justify-center mb-5 transition-colors duration-300 group-hover:bg-crest-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-crest-primary transition-colors duration-300 group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16V7a1 1 0 0 1 1-1h9v10M3 16h1m0 0h9m-9 0v-3h13m0 3h1a1 1 0 0 0 1-1v-3l-2-4h-3v7m-8 1a2 2 0 1 0 4 0 2 2 0 0 0-4 0Zm10 0a2 2 0 1 0 4 0 2 2 0 0 0-4 0Z"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2 transition-colors duration-300 group-hover:text-crest-primary">Land Transportation</h3>
                <p class="text-sm text-gray-500 mb-6 flex-1">
                    Secure road and RoRo freight movement with real-time tracking and route optimization.
                </p>
                <a href="{{ url('/service') }}" class="group/link inline-flex items-center gap-1.5 text-crest-primary text-sm font-semibold w-fit rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-crest-primary focus-visible:ring-offset-2">
                    <span class="underline-offset-4 group-hover/link:underline">Learn more</span>
                    <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
                </a>
            </div>

            {{-- Warehousing --}}
            <div class="group relative border border-gray-200 rounded-2xl p-6 flex flex-col transition-all duration-300 hover:border-crest-primary/30 hover:shadow-xl hover:shadow-crest-primary/5 hover:-translate-y-1">
                <div class="w-11 h-11 rounded-xl bg-crest-tint flex items-center justify-center mb-5 transition-colors duration-300 group-hover:bg-crest-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-crest-primary transition-colors duration-300 group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10.5 12 4l9 6.5M5 9.5V20h14V9.5M10 20v-6h4v6"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2 transition-colors duration-300 group-hover:text-crest-primary">Warehousing</h3>
                <p class="text-sm text-gray-500 mb-6 flex-1">
                    Secure, flexible storage with cross-docking and expert consolidation for your goods.
                </p>
                <a href="{{ url('/service') }}" class="group/link inline-flex items-center gap-1.5 text-crest-primary text-sm font-semibold w-fit rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-crest-primary focus-visible:ring-offset-2">
                    <span class="underline-offset-4 group-hover/link:underline">Learn more</span>
                    <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
                </a>
            </div>

        </div>

        <div class="text-center mt-10">
            <a href="{{ url('/service') }}" class="group/link inline-flex items-center gap-1.5 text-crest-primary text-sm font-semibold rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-crest-primary focus-visible:ring-offset-2">
                <span class="underline-offset-4 group-hover/link:underline">View all service</span>
                <span class="transition-transform duration-300 group-hover/link:translate-x-1">→</span>
            </a>
        </div>

    </section>

    {{-- HOW IT WORKS --}}
    <section class="overflow-hidden">
        <div class="max-w-7xl mx-auto px-8 py-20">
            <div class="grid md:grid-cols-2 gap-16 items-center">

                {{-- Left: heading + steps --}}
                <div>
                    <p class="text-crest-primary text-sm font-bold tracking-widest uppercase mb-3">How It Works</p>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">
                        Your trusted cargo logistics partner, every step of the way.
                    </h2>
                    <p class="text-gray-500 mb-10 max-w-md">
                        From quote to delivery, here's how we move your business forward.
                    </p>

                    <div class="flex flex-col gap-8">

                        {{-- Step 1 --}}
                        <div class="relative pl-20">
                            <span class="absolute left-0 top-0 text-5xl font-black text-gray-400 leading-none select-none">01</span>
                            <h3 class="font-semibold text-gray-900 mb-1">Request a quote</h3>
                            <p class="text-sm text-gray-500 leading-relaxed max-w-sm">
                                Tell us what you're shipping — air, sea, or land freight, warehousing, brokerage, or project cargo — and we'll get back to you fast.
                            </p>
                        </div>

                        {{-- Step 2 --}}
                        <div class="relative pl-20">
                            <span class="absolute left-0 top-0 text-5xl font-black text-gray-400 leading-none select-none">02</span>
                            <h3 class="font-semibold text-gray-900 mb-1">We move your freight</h3>
                            <p class="text-sm text-gray-500 leading-relaxed max-w-sm">
                                Your cargo is routed through the right mix of freight forwarding, land transportation, and warehousing.
                            </p>
                        </div>

                        {{-- Step 3 --}}
                        <div class="relative pl-20">
                            <span class="absolute left-0 top-0 text-5xl font-black text-gray-400 leading-none select-none">03</span>
                            <h3 class="font-semibold text-gray-900 mb-1">Customs and brokerage</h3>
                            <p class="text-sm text-gray-500 leading-relaxed max-w-sm">
                                Our brokerage team manages documentation and customs so your shipment keeps moving without delays.
                            </p>
                        </div>

                        {{-- Step 4 --}}
                        <div class="relative pl-20">
                            <span class="absolute left-0 top-0 text-5xl font-black text-gray-400 leading-none select-none">04</span>
                            <h3 class="font-semibold text-gray-900 mb-1">Secure delivery</h3>
                            <p class="text-sm text-gray-500 leading-relaxed max-w-sm">
                                Your cargo arrives safely and on schedule — backed by a team that's been doing this for over 20 years.
                            </p>
                        </div>

                    </div>
                </div>

                {{-- Right: container image with banner, cables tucked behind the strap --}}
                <div class="relative w-full min-h-[520px]">

                    {{-- Diagonal branded banner (sits ON TOP, z-20) --}}
                    <div class="absolute top-8 -left-16 -right-16 rotate-[-6deg] bg-crest-primary py-2.5 shadow-lg z-20">
                        <div class="flex items-center gap-3 whitespace-nowrap overflow-hidden text-white text-xs font-bold tracking-widest uppercase">
                            <span>Crest Forwarder</span><span class="opacity-50">•</span>
                            <span>Freight Forwarding</span><span class="opacity-50">•</span>
                            <span>Warehousing</span><span class="opacity-50">•</span>
                            <span>Brokerage</span><span class="opacity-50">•</span>
                            <span>Crest Forwarder</span><span class="opacity-50">•</span>
                            <span>Freight Forwarding</span><span class="opacity-50">•</span>
                            <span>Warehousing</span>
                        </div>
                    </div>

                    {{-- Container image, positioned so the top of the cables sits BEHIND the banner (z-0) --}}
                    <img src="{{ asset('images/container.png') }}"
                         alt="Cargo container being loaded"
                         class="absolute top-14 left-1/2 -translate-x-1/2 z-0 w-full max-w-[480px] h-auto">

                    {{-- Floating stacked boxes accent --}}
                    <div class="hidden md:flex absolute bottom-6 left-4 bg-white rounded-xl shadow-lg ring-1 ring-black/5 px-4 py-3 items-center gap-2.5 z-30">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-crest-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.5 12 4l9 4.5M3 8.5v7L12 20l9-4.5v-7M3 8.5 12 13l9-4.5M12 13v7"/>
                        </svg>
                        <span class="text-xs font-semibold text-gray-700">Cargo handled with care</span>
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- WHY CHOOSE US --}}
    <section class="max-w-7xl mx-auto px-8 py-20">
        <div class="grid md:grid-cols-2 gap-14 items-center">

            {{-- Left: image collage --}}
            <div class="grid grid-cols-2 gap-4 h-[420px]">
                <div class="flex flex-col gap-4">
                    <div class="rounded-2xl overflow-hidden shadow-sm ring-1 ring-black/5 h-1/2">
                        <img src="{{ asset('images/why-truck.jpg') }}"
                             alt="Crest Forwarder delivery truck"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="rounded-2xl overflow-hidden shadow-sm ring-1 ring-black/5 h-1/2">
                        <img src="{{ asset('images/why-container.jpg') }}"
                             alt="Air freight cargo plane"
                             class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="rounded-2xl overflow-hidden shadow-sm ring-1 ring-black/5 h-full">
                    <img src="{{ asset('images/why-port.jpg') }}"
                         alt="Container port and cargo ship"
                         class="w-full h-full object-cover">
                </div>
            </div>

            {{-- Right: heading + checklist --}}
            <div>
                <p class="text-crest-primary text-sm font-bold tracking-widest uppercase mb-3">Why Choose Us</p>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 leading-tight">
                    Built on reliability, chosen for results
                </h2>

                <div class="flex flex-col gap-6">

                    <div class="flex gap-4">
                        <div class="shrink-0 w-6 h-6 rounded-full bg-crest-primary flex items-center justify-center mt-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Global reach, local expertise</h3>
                            <p class="text-sm text-gray-500 leading-relaxed">
                                We pair worldwide freight coverage with hands-on knowledge of local shipping rules and routes.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="shrink-0 w-6 h-6 rounded-full bg-crest-primary flex items-center justify-center mt-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Nationwide network</h3>
                            <p class="text-sm text-gray-500 leading-relaxed">
                                Branches in Cebu, Manila, Davao, and Cagayan de Oro keep your cargo moving across the Philippines.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="shrink-0 w-6 h-6 rounded-full bg-crest-primary flex items-center justify-center mt-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Dedicated support team</h3>
                            <p class="text-sm text-gray-500 leading-relaxed">
                                A real person is always on hand to help keep your shipment moving and answer questions fast.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    {{-- EQUIPMENT --}}
    <section class="max-w-7xl mx-auto px-8 py-16">

        <div class="text-center max-w-2xl mx-auto mb-12">
            <p class="text-crest-primary text-sm font-bold tracking-widest uppercase mb-3">Equipment</p>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">
                A Variety of Fleets to Meet Your Needs
            </h2>
            <p class="text-gray-500 text-base">
                With a diverse fleet of trucks and trailers, we ensure every shipment is handled with care and efficiency.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">

            <div class="group border border-gray-200 rounded-2xl p-6 flex flex-col items-center justify-center bg-white transition-all duration-300 hover:border-crest-primary/30 hover:shadow-lg hover:-translate-y-1">
                <img src="{{ asset('images/equipment/curtainsider.png') }}" alt="Crest Forwarder curtainsider truck" class="h-32 md:h-40 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
                <p class="mt-4 text-sm font-semibold text-gray-700">Curtainsider</p>
            </div>

            <div class="group border border-gray-200 rounded-2xl p-6 flex flex-col items-center justify-center bg-white transition-all duration-300 hover:border-crest-primary/30 hover:shadow-lg hover:-translate-y-1">
                <img src="{{ asset('images/equipment/close-van.png') }}" alt="Crest Forwarder closed van truck" class="h-32 md:h-40 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
                <p class="mt-4 text-sm font-semibold text-gray-700">Closed Van</p>
            </div>

            <div class="group border border-gray-200 rounded-2xl p-6 flex flex-col items-center justify-center bg-white transition-all duration-300 hover:border-crest-primary/30 hover:shadow-lg hover:-translate-y-1">
                <img src="{{ asset('images/equipment/forklift.png') }}" alt="Crest Forwarder forklift" class="h-32 md:h-40 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
                <p class="mt-4 text-sm font-semibold text-gray-700">Forklift</p>
            </div>

            <div class="group border border-gray-200 rounded-2xl p-6 flex flex-col items-center justify-center bg-white transition-all duration-300 hover:border-crest-primary/30 hover:shadow-lg hover:-translate-y-1">
                <img src="{{ asset('images/equipment/prime-mover.png') }}" alt="Crest Forwarder prime mover truck" class="h-32 md:h-40 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
                <p class="mt-4 text-sm font-semibold text-gray-700">Prime Mover</p>
            </div>

            <div class="group border border-gray-200 rounded-2xl p-6 flex flex-col items-center justify-center bg-white transition-all duration-300 hover:border-crest-primary/30 hover:shadow-lg hover:-translate-y-1">
                <img src="{{ asset('images/equipment/trailer.png') }}" alt="Crest Forwarder 20 FTR trailer" class="h-32 md:h-40 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
                <p class="mt-4 text-sm font-semibold text-gray-700">20 FTR Trailer</p>
            </div>

            <div class="group border border-gray-200 rounded-2xl p-6 flex flex-col items-center justify-center bg-white transition-all duration-300 hover:border-crest-primary/30 hover:shadow-lg hover:-translate-y-1">
                <img src="{{ asset('images/equipment/service-vehicle.png') }}" alt="Crest Forwarder service vehicle" class="h-32 md:h-40 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
                <p class="mt-4 text-sm font-semibold text-gray-700">Service Vehicle</p>
            </div>

        </div>

    </section>

    {{-- TESTIMONIALS --}}
    <section class="bg-gray-50/70 border-t border-gray-100 overflow-x-hidden">
        <div class="max-w-5xl mx-auto px-8 py-20">

            <div class="text-center max-w-2xl mx-auto mb-14">
                <p class="text-crest-primary text-sm font-bold tracking-widest uppercase mb-3">Testimonials</p>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">
                    Trusted by businesses across Cebu
                </h2>
                <p class="text-gray-500 text-base">
                    Real feedback from clients who rely on us to move their cargo.
                </p>
            </div>

            <div x-data="{
                    active: 0,
                    total: 3,
                    timer: null,
                    items: [
                        { name: 'Rick', initial: 'R', quote: `My first time taking advantage of their forwarding service. If I could give more than 5 stars, I would. Very helpful staff, affordable rates, overall very smooth transaction. Everything arrived in good condition. Thanks again, Crest Forwarder!` },
                        { name: 'Eradiel', initial: 'E', quote: `Thank you Crest Forwarder ang bilis niyo mag deliver po, 3 days lang dumating na yung box ko sa Iloilo. Pangalawang beses ko na po ito magpadala Cebu to Iloilo. Good job po kayo at mura po ng singil niyo, sa uulitin po.` },
                        { name: 'Jen', initial: 'J', quote: `They handle our imports seamlessly. Customs and delivery are always spot-on, and communication is always clear. Excellent experience from start to finish. I recommend them without hesitation to anyone looking for reliable service.` }
                    ],
                    start() { this.timer = setInterval(() => { this.active = (this.active + 1) % this.total }, 6000) },
                    stop() { clearInterval(this.timer) },
                    select(i) { this.active = i; this.stop() },
                    diff(i) {
                        let d = i - this.active;
                        if (d > this.total / 2) d -= this.total;
                        if (d < -this.total / 2) d += this.total;
                        return d;
                    }
                 }"
                 x-init="start()"
                 @mouseenter="stop()"
                 @mouseleave="start()">

                <div class="relative h-[380px] md:h-[300px]">
                    <template x-for="(item, i) in items" :key="i">
                        <div
                            @click="select(i)"
                            class="absolute top-1/2 left-1/2 w-[88%] max-w-xl transition-all duration-500 ease-out"
                            :style="`transform: translate(-50%, -50%) translateX(${diff(i) * 106}%) scale(${diff(i) === 0 ? 1 : 0.88}); opacity: ${diff(i) === 0 ? 1 : 0.45}; filter: blur(${diff(i) === 0 ? 0 : 2}px); z-index: ${diff(i) === 0 ? 20 : 10};`"
                            :class="diff(i) === 0 ? 'cursor-default' : 'cursor-pointer'">

                            <div class="bg-white rounded-2xl p-8 md:p-10 border transition-shadow duration-500"
                                 :class="diff(i) === 0 ? 'shadow-xl border-gray-100' : 'shadow-sm border-gray-100'">

                                <div class="flex items-center gap-1 mb-5">
                                    <template x-for="n in 5" :key="n">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-crest-accent" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 1.5l2.6 5.3 5.8.8-4.2 4.1 1 5.8L10 14.7l-5.2 2.8 1-5.8L1.6 7.6l5.8-.8L10 1.5Z"/>
                                        </svg>
                                    </template>
                                </div>

                                <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-8 line-clamp-4" x-text="'\u201C' + item.quote + '\u201D'"></p>

                                <div class="flex items-center gap-3 pt-6 border-t border-gray-100">
                                    <div class="w-10 h-10 rounded-full bg-crest-tint flex items-center justify-center text-crest-primary font-bold text-sm shrink-0" x-text="item.initial"></div>
                                    <div>
                                        <p class="text-gray-900 font-semibold text-sm" x-text="item.name"></p>
                                        <p class="text-gray-400 text-xs">Verified Client</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                {{-- Dot indicators --}}
                <div class="flex justify-center gap-2 mt-8">
                    <template x-for="(item, i) in items" :key="i">
                        <button @click="select(i)" :class="active === i ? 'bg-crest-primary w-6' : 'bg-gray-300 w-2'" class="h-2 rounded-full transition-all duration-300" :aria-label="'Show testimonial from ' + item.name"></button>
                    </template>
                </div>

            </div>

        </div>
    </section>

    {{-- FINAL CTA --}}
    <section class="max-w-7xl mx-auto px-8 py-16">
        <div class="relative bg-gradient-to-br from-crest-primary to-crest-primary-dark rounded-2xl px-8 py-16 md:py-20 text-center overflow-hidden shadow-lg">

            {{-- Subtle decorative glow --}}
            <div class="absolute -top-24 -right-24 w-72 h-72 bg-white/5 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-white/5 rounded-full blur-3xl pointer-events-none"></div>

            <div class="relative">
                <h2 class="text-2xl md:text-4xl font-bold text-white mb-4">
                    Ready to ship smarter?
                </h2>
                <p class="text-white/70 text-base md:text-lg mb-9 max-w-xl mx-auto">
                    Get a personalized quote and see how Crest Forwarder can simplify your logistics.
                </p>

                <div class="flex items-center justify-center gap-4 flex-wrap">
                    <button type="button" @click="quoteOpen = true"
                       class="group/btn inline-flex items-center gap-2 bg-crest-accent text-crest-primary-dark font-semibold px-7 py-3.5 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-0.5 hover:bg-crest-accent/90 active:translate-y-0 active:shadow-sm focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-crest-primary transition-all duration-200 ease-out">
                        Get a Quote
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200 ease-out group-hover/btn:translate-x-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6"/>
                        </svg>
                    </button>
                    <a href="{{ url('/contact') }}"
                       class="group/btn inline-flex items-center gap-2 border border-white/30 text-white font-semibold px-7 py-3.5 rounded-lg hover:bg-white/10 hover:border-white/60 active:bg-white/5 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-crest-primary transition-all duration-200 ease-out">
                        Contact Us
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200 ease-out group-hover/btn:translate-x-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    {{-- GET A QUOTE MODAL --}}
    <style>
        .brand-scroll::-webkit-scrollbar { width: 6px; }
        .brand-scroll::-webkit-scrollbar-track { background: transparent; }
        .brand-scroll::-webkit-scrollbar-thumb { background-color: #d1d5db; border-radius: 9999px; }
        .brand-scroll::-webkit-scrollbar-thumb:hover { background-color: #9ca3af; }
        .brand-scroll { scrollbar-width: thin; scrollbar-color: #d1d5db transparent; }
    </style>
    <div x-show="quoteOpen" x-cloak
         class="fixed inset-0 z-[60] flex items-center justify-center p-4"
         style="display: none;">

        {{-- Backdrop --}}
        <div x-show="quoteOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="quoteOpen = false"
             class="absolute inset-0 bg-black/50"></div>

        {{-- Modal panel --}}
        <div x-show="quoteOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="relative bg-white rounded-2xl shadow-2xl ring-1 ring-black/5 w-full max-w-lg max-h-[90vh] flex flex-col overflow-hidden">

            {{-- Header (sticky — stays visible while step content scrolls) --}}
            <div class="bg-crest-primary-dark text-white px-8 pt-6 pb-5 relative shrink-0" x-show="step < 4">
                <button type="button" @click="resetQuote()"
                        class="absolute top-5 right-5 text-white/60 hover:text-white transition-colors"
                        aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <p class="text-crest-accent text-xs font-bold tracking-widest uppercase mb-1.5">
                    Get a Quote &mdash; Step <span x-text="step"></span> of 3
                </p>
                <h3 class="text-xl font-bold leading-snug pr-8"
                    x-text="step === 1 ? 'What do you need help with?' : step === 2 ? 'Tell us more' : 'How would you like to pay?'"></h3>

                {{-- Step progress --}}
                <div class="flex items-center gap-2 mt-5">
                    <template x-for="i in 3" :key="i">
                        <div class="h-1 flex-1 rounded-full transition-colors duration-300" :class="i <= step ? 'bg-crest-accent' : 'bg-white/15'"></div>
                    </template>
                </div>
            </div>

            {{-- Scrollable body --}}
            <div class="overflow-y-auto brand-scroll">

            <div class="p-8" x-show="step < 4">

                {{-- STEP 1: Recommended service --}}
                <div x-show="step === 1"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 translate-x-2"
                     x-transition:enter-end="opacity-100 translate-x-0">
                    <p class="text-sm text-gray-500 mb-5">Not sure? We've highlighted the option most customers choose.</p>

                    <div class="space-y-2.5">
                        <button type="button" @click="selectService('Freight Forwarding')"
                                class="w-full text-left flex items-center gap-4 border rounded-xl p-4 transition-colors border-crest-primary bg-crest-tint/60 hover:bg-crest-tint">
                            <span class="w-10 h-10 rounded-lg bg-crest-primary text-white flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 8h-3V4H3a1 1 0 0 0-1 1v11h2m14-8 3 4v4h-3m-14 0h14M6 20a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm12 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                                </svg>
                            </span>
                            <span class="flex-1 min-w-0">
                                <span class="flex items-center gap-2">
                                    <span class="font-semibold text-gray-900">Freight Forwarding</span>
                                    <span class="text-[10px] font-bold uppercase tracking-wide bg-crest-primary text-white px-2 py-0.5 rounded-full shrink-0">Recommended</span>
                                </span>
                                <span class="block text-sm text-gray-500 mt-0.5">Door-to-door shipping for full or partial loads.</span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>

                        <button type="button" @click="selectService('Land Transportation')"
                                class="w-full text-left flex items-center gap-4 border border-gray-200 rounded-xl p-4 transition-colors hover:border-crest-primary/40 hover:bg-gray-50">
                            <span class="w-10 h-10 rounded-lg bg-gray-100 text-crest-primary flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16V6a1 1 0 0 1 1-1h9v11m8 0h-8m8 0v-5l-3-4h-5m-8 9a2 2 0 1 0 4 0 2 2 0 0 0-4 0Zm11 0a2 2 0 1 0 4 0 2 2 0 0 0-4 0Z"/>
                                </svg>
                            </span>
                            <span class="flex-1 min-w-0">
                                <span class="font-semibold text-gray-900">Land Transportation</span>
                                <span class="block text-sm text-gray-500 mt-0.5">Trucking and delivery within the Philippines.</span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>

                        <button type="button" @click="selectService('Warehousing')"
                                class="w-full text-left flex items-center gap-4 border border-gray-200 rounded-xl p-4 transition-colors hover:border-crest-primary/40 hover:bg-gray-50">
                            <span class="w-10 h-10 rounded-lg bg-gray-100 text-crest-primary flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 9.5 12 4l9 5.5V20a1 1 0 0 1-1 1h-4v-6H8v6H4a1 1 0 0 1-1-1V9.5Z"/>
                                </svg>
                            </span>
                            <span class="flex-1 min-w-0">
                                <span class="font-semibold text-gray-900">Warehousing</span>
                                <span class="block text-sm text-gray-500 mt-0.5">Short or long-term storage for your goods.</span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>

                        <button type="button" @click="selectService('Consolidation')"
                                class="w-full text-left flex items-center gap-4 border border-gray-200 rounded-xl p-4 transition-colors hover:border-crest-primary/40 hover:bg-gray-50">
                            <span class="w-10 h-10 rounded-lg bg-gray-100 text-crest-primary flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h16M4 17h10"/>
                                </svg>
                            </span>
                            <span class="flex-1 min-w-0">
                                <span class="font-semibold text-gray-900">Consolidation</span>
                                <span class="block text-sm text-gray-500 mt-0.5">Combine smaller shipments to save on cost.</span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>

                        <button type="button" @click="selectService('Brokerage')"
                                class="w-full text-left flex items-center gap-4 border border-gray-200 rounded-xl p-4 transition-colors hover:border-crest-primary/40 hover:bg-gray-50">
                            <span class="w-10 h-10 rounded-lg bg-gray-100 text-crest-primary flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 3h6a1 1 0 0 1 1 1v1H8V4a1 1 0 0 1 1-1Zm-3 2h12a2 2 0 0 1 2 2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2Zm2 6h8m-8 4h5"/>
                                </svg>
                            </span>
                            <span class="flex-1 min-w-0">
                                <span class="font-semibold text-gray-900">Brokerage</span>
                                <span class="block text-sm text-gray-500 mt-0.5">Customs clearance and import/export documentation.</span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- STEP 2: Shipment & contact details --}}
                <div x-show="step === 2"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-x-2"
                    x-transition:enter-end="opacity-100 translate-x-0">
                    <p class="text-sm text-gray-500 mb-5">You picked <span class="font-semibold text-crest-primary" x-text="form.service"></span>. Here's how we can help and reach you.</p>

                    <div class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Origin</label>
                                <input type="text" x-model="form.origin" placeholder="e.g. Cebu City"
                                    class="w-full rounded-lg border border-gray-300 shadow-sm px-3.5 py-2.5 text-sm transition focus:border-crest-primary focus:ring-1 focus:ring-crest-primary focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Destination</label>
                                <input type="text" x-model="form.destination" placeholder="e.g. Manila"
                                    class="w-full rounded-lg border border-gray-300 shadow-sm px-3.5 py-2.5 text-sm transition focus:border-crest-primary focus:ring-1 focus:ring-crest-primary focus:outline-none">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Cargo details</label>
                            <textarea x-model="form.cargo_details" rows="2" placeholder="Type of cargo, estimated weight/volume..."
                                    class="w-full rounded-lg border border-gray-300 shadow-sm px-3.5 py-2.5 text-sm resize-none transition focus:border-crest-primary focus:ring-1 focus:ring-crest-primary focus:outline-none"></textarea>
                        </div>

                        <div class="grid grid-cols-2 gap-4 pt-4 border-t border-gray-100">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">First name</label>
                                <input type="text" x-model="form.first_name"
                                    class="w-full rounded-lg border border-gray-300 shadow-sm px-3.5 py-2.5 text-sm transition focus:border-crest-primary focus:ring-1 focus:ring-crest-primary focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Last name</label>
                                <input type="text" x-model="form.last_name"
                                    class="w-full rounded-lg border border-gray-300 shadow-sm px-3.5 py-2.5 text-sm transition focus:border-crest-primary focus:ring-1 focus:ring-crest-primary focus:outline-none">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Email address</label>
                            <input type="email" x-model="form.email"
                                class="w-full rounded-lg border border-gray-300 shadow-sm px-3.5 py-2.5 text-sm transition focus:border-crest-primary focus:ring-1 focus:ring-crest-primary focus:outline-none">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Phone number</label>
                            <input type="text" x-model="form.phone" placeholder="+63 9XX XXX XXXX"
                                class="w-full rounded-lg border border-gray-300 shadow-sm px-3.5 py-2.5 text-sm transition focus:border-crest-primary focus:ring-1 focus:ring-crest-primary focus:outline-none">
                        </div>
                    </div>

                    <div class="flex gap-3 mt-6">
                        <button type="button" @click="step = 1"
                                class="w-1/3 flex items-center justify-center gap-1.5 border border-gray-300 text-gray-700 font-semibold py-3 rounded-lg hover:bg-gray-50 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                            </svg>
                            Back
                        </button>
                        <button type="button" @click="step = 3"
                                class="w-2/3 bg-crest-primary text-white font-semibold py-3 rounded-lg hover:bg-crest-primary-dark transition-colors">
                            Continue
                        </button>
                    </div>
                </div>

                {{-- STEP 3: Payment method --}}
                <div x-show="step === 3"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 translate-x-2"
                     x-transition:enter-end="opacity-100 translate-x-0">
                    <p class="text-sm text-gray-500 mb-5">Choose how you'd like to settle payment for this shipment.</p>

                    <div class="space-y-3">
                        <label class="flex items-start gap-3 border border-gray-200 rounded-xl p-4 cursor-pointer has-[:checked]:border-crest-primary has-[:checked]:bg-crest-tint transition-colors">
                            <input type="radio" x-model="form.payment_method" value="cod"
                                   class="mt-1 text-crest-primary focus:ring-crest-primary">
                            <span class="w-9 h-9 rounded-lg bg-gray-100 text-crest-primary flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <rect x="2" y="6" width="20" height="12" rx="2"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                            </span>
                            <span>
                                <span class="block font-semibold text-gray-900">Cash on Delivery (COD)</span>
                                <span class="block text-sm text-gray-500 mt-0.5">Pay in cash once your shipment is picked up or delivered.</span>
                            </span>
                        </label>

                        <label class="flex items-start gap-3 border border-gray-200 rounded-xl p-4 cursor-pointer has-[:checked]:border-crest-primary has-[:checked]:bg-crest-tint transition-colors">
                            <input type="radio" x-model="form.payment_method" value="bank"
                                   class="mt-1 text-crest-primary focus:ring-crest-primary">
                            <span class="w-9 h-9 rounded-lg bg-gray-100 text-crest-primary flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 10 12 4l9 6M4 10v9h16v-9M9 14v3m3-3v3m3-3v3"/>
                                </svg>
                            </span>
                            <span>
                                <span class="block font-semibold text-gray-900">Bank Transfer</span>
                                <span class="block text-sm text-gray-500 mt-0.5">We'll send bank account details to your email after you submit.</span>
                            </span>
                        </label>
                    </div>

                    <div class="flex gap-3 mt-6">
                        <button type="button" @click="step = 2"
                                class="w-1/3 flex items-center justify-center gap-1.5 border border-gray-300 text-gray-700 font-semibold py-3 rounded-lg hover:bg-gray-50 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                            </svg>
                            Back
                        </button>
                        <button type="button" @click="submitQuote()"
                                class="w-2/3 bg-crest-accent text-crest-primary-dark font-semibold py-3 rounded-lg hover:bg-crest-accent/90 transition-colors">
                            Submit Request
                        </button>
                    </div>
                </div>
            </div>

            {{-- STEP 4: Confirmation --}}
            <div x-show="step === 4"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 class="p-8 text-center">
                <div class="w-14 h-14 rounded-full bg-crest-tint flex items-center justify-center mx-auto mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-crest-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Request received!</h3>
                <p class="text-gray-500 text-sm mb-5">Thanks! We've received your quote request and will get back to you shortly.</p>

                <div class="bg-gray-50 border border-gray-100 rounded-xl p-4 text-left text-sm mb-6">
                    <div class="flex justify-between py-1">
                        <span class="text-gray-500">Service</span>
                        <span class="font-medium text-gray-900" x-text="form.service"></span>
                    </div>
                    <div class="flex justify-between py-1 border-t border-gray-100 mt-1 pt-2">
                        <span class="text-gray-500">Route</span>
                        <span class="font-medium text-gray-900" x-text="(form.origin || '—') + ' → ' + (form.destination || '—')"></span>
                    </div>
                    <div class="flex justify-between py-1 border-t border-gray-100 mt-1 pt-2">
                        <span class="text-gray-500">Payment</span>
                        <span class="font-medium text-gray-900" x-text="form.payment_method === 'cod' ? 'Cash on Delivery' : 'Bank Transfer'"></span>
                    </div>
                </div>

                <button type="button" @click="resetQuote()"
                        class="w-full bg-crest-primary text-white font-semibold py-3 rounded-lg hover:bg-crest-primary-dark transition-colors">
                    Close
                </button>
            </div>

        </div>
        </div>
    </div>

    </div>

</x-layouts.app>