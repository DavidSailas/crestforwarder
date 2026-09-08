<x-layouts.app title="Services | Crest Forwarder Inc.">

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
            bookService(name) {
                this.form.service = name;
                this.step = 2;
                this.quoteOpen = true;
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
    <section class="relative min-h-[400px] sm:min-h-[440px] md:min-h-[500px] lg:min-h-[560px] xl:min-h-[600px] flex items-end overflow-hidden bg-gray-900">

        {{-- Background image, sharp --}}
        <img src="{{ asset('images/service-hero-truck.jpg') }}"
             alt="Crest Forwarder truck"
             class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-105">

        {{-- Neutral dark gradient overlay for text legibility --}}
        <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/60 to-black/20"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>

        {{-- Content --}}
        <div class="relative max-w-7xl mx-auto px-8 pb-14 w-full">
            <div class="max-w-2xl">
                <p class="text-crest-accent text-sm font-bold tracking-widest uppercase mb-3">Our Services</p>
                <h1 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-4 drop-shadow-sm">
                    Freight, storage, and brokerage — handled end to end
                </h1>
                <p class="text-white/80 text-base md:text-lg leading-relaxed mb-8 max-w-xl">
                    From documentation to final delivery, we manage every part of the shipping process across air, sea, and land — so you don't have to.
                </p>

                {{-- Service pills --}}
                <div class="flex flex-wrap gap-3">
                    <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/25 hover:bg-white/15 hover:border-white/40 transition-colors duration-200 text-white text-sm font-medium px-4 py-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-crest-accent shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 3 3 10.5l3 1.5-1.5 3 3-1.5 1.5 3L16.5 8M14 6l4 4-2 6-6 2-4-4"/>
                        </svg>
                        Freight Forwarding
                    </span>

                    <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/25 hover:bg-white/15 hover:border-white/40 transition-colors duration-200 text-white text-sm font-medium px-4 py-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-crest-accent shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16V7a1 1 0 0 1 1-1h9v10M3 16h1m0 0h9m-9 0v-3h13m0 3h1a1 1 0 0 0 1-1v-3l-2-4h-3v7m-8 1a2 2 0 1 0 4 0 2 2 0 0 0-4 0Zm10 0a2 2 0 1 0 4 0 2 2 0 0 0-4 0Z"/>
                        </svg>
                        Land Transport
                    </span>

                    <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/25 hover:bg-white/15 hover:border-white/40 transition-colors duration-200 text-white text-sm font-medium px-4 py-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-crest-accent shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10.5 12 4l9 6.5M5 9.5V20h14V9.5M10 20v-6h4v6"/>
                        </svg>
                        Warehousing
                    </span>

                    <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/25 hover:bg-white/15 hover:border-white/40 transition-colors duration-200 text-white text-sm font-medium px-4 py-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-crest-accent shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20 7 12 3 4 7m16 0-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                        Consolidation
                    </span>

                    <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/25 hover:bg-white/15 hover:border-white/40 transition-colors duration-200 text-white text-sm font-medium px-4 py-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-crest-accent shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7Z"/>
                        </svg>
                        Brokerage
                    </span>
                </div>
            </div>
        </div>

    </section>

    {{-- SERVICE DETAILS --}}
    <section class="max-w-7xl mx-auto px-8 py-20">
        <div class="flex flex-col gap-20">

            {{-- 01 Freight Forwarding --}}
            <div class="grid md:grid-cols-2 gap-10 md:gap-14 items-center">
                <div class="group relative aspect-square md:aspect-[4/3] rounded-2xl overflow-hidden shadow-md ring-1 ring-black/5">
                    <img src="{{ asset('images/service-freight-forwarding.jpg') }}"
                         alt="Freight forwarding by air, sea, and land"
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-crest-primary/20"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 w-14 h-14 rounded-2xl bg-white shadow-lg ring-1 ring-black/5 flex items-center justify-center transition-transform duration-300 group-hover:-translate-y-0.5 group-hover:shadow-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-crest-primary" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.4 20.6 21 12 3.4 3.4l3.2 7.1L15 12l-8.4 1.5-3.2 7.1Z"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <p class="text-crest-primary text-sm font-bold mb-2">01</p>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">Freight Forwarding</h2>
                    <p class="text-gray-500 leading-relaxed mb-6 max-w-md">
                        Reliable, cost-effective domestic and international shipping by air, sea, and land. We coordinate with trusted carriers for smooth handling, competitive rates, and on-time delivery — including documentation, customs clearance, and real-time tracking.
                    </p>
                    <button type="button" @click="bookService('Freight Forwarding')" class="group/link inline-flex items-center gap-1.5 text-crest-primary font-semibold rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-crest-primary focus-visible:ring-offset-2">
                        <span class="underline-offset-4 group-hover/link:underline">Book now</span>
                        <span class="transition-transform duration-300 group-hover/link:translate-x-1">→</span>
                    </button>
                </div>
            </div>

            {{-- 02 Land Transportation --}}
            <div class="grid md:grid-cols-2 gap-10 md:gap-14 items-center">
                <div class="order-2 md:order-1">
                    <p class="text-crest-primary text-sm font-bold mb-2">02</p>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">Land Transportation</h2>
                    <p class="text-gray-500 leading-relaxed mb-6 max-w-md">
                        A core pillar of our logistics network. We move freight securely via road and RoRo, backed by real-time tracking and route optimization — ensuring timely delivery from warehouse to final destination.
                    </p>
                    <button type="button" @click="bookService('Land Transportation')" class="group/link inline-flex items-center gap-1.5 text-crest-primary font-semibold rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-crest-primary focus-visible:ring-offset-2">
                        <span class="underline-offset-4 group-hover/link:underline">Book now</span>
                        <span class="transition-transform duration-300 group-hover/link:translate-x-1">→</span>
                    </button>
                </div>
                <div class="group order-1 md:order-2 relative aspect-square md:aspect-[4/3] rounded-2xl overflow-hidden shadow-md ring-1 ring-black/5">
                    <img src="{{ asset('images/service-land-transport.jpg') }}"
                         alt="Land transportation truck"
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-crest-primary/20"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 w-14 h-14 rounded-2xl bg-white shadow-lg ring-1 ring-black/5 flex items-center justify-center transition-transform duration-300 group-hover:-translate-y-0.5 group-hover:shadow-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-crest-primary" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16V7a1 1 0 0 1 1-1h9v10M3 16h1m0 0h9m-9 0v-3h13m0 3h1a1 1 0 0 0 1-1v-3l-2-4h-3v7m-8 1a2 2 0 1 0 4 0 2 2 0 0 0-4 0Zm10 0a2 2 0 1 0 4 0 2 2 0 0 0-4 0Z"/>
                        </svg>
                    </div>
                </div>
            </div>

            {{-- 03 Warehousing --}}
            <div class="grid md:grid-cols-2 gap-10 md:gap-14 items-center">
                <div class="group relative aspect-square md:aspect-[4/3] rounded-2xl overflow-hidden shadow-md ring-1 ring-black/5">
                    <img src="{{ asset('images/service-warehousing.jpg') }}"
                         alt="Warehousing and storage facility"
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-crest-primary/20"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 w-14 h-14 rounded-2xl bg-white shadow-lg ring-1 ring-black/5 flex items-center justify-center transition-transform duration-300 group-hover:-translate-y-0.5 group-hover:shadow-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-crest-primary" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10.5 12 4l9 6.5M5 9.5V20h14V9.5M10 20v-6h4v6"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <p class="text-crest-primary text-sm font-bold mb-2">03</p>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">Warehousing</h2>
                    <p class="text-gray-500 leading-relaxed mb-6 max-w-md">
                        Secure, flexible storage for short or long-term needs. Cross-docking speeds up transit, while expert consolidation and deconsolidation streamline your supply chain — keeping goods safe, organized, and ready to move.
                    </p>
                    <button type="button" @click="bookService('Warehousing')" class="group/link inline-flex items-center gap-1.5 text-crest-primary font-semibold rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-crest-primary focus-visible:ring-offset-2">
                        <span class="underline-offset-4 group-hover/link:underline">Book now</span>
                        <span class="transition-transform duration-300 group-hover/link:translate-x-1">→</span>
                    </button>
                </div>
            </div>

            {{-- 04 Loose Cargo Consolidation & Deconsolidation --}}
            <div class="grid md:grid-cols-2 gap-10 md:gap-14 items-center">
                <div class="order-2 md:order-1">
                    <p class="text-crest-primary text-sm font-bold mb-2">04</p>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">Loose Cargo Consolidation &amp; Deconsolidation</h2>
                    <p class="text-gray-500 leading-relaxed mb-6 max-w-md">
                        Flexible, cost-effective solutions for shipments that don't need a full container — ideal for oversized, irregular, or mixed freight. We manage careful handling, organized loading, and efficient space use to keep costs down.
                    </p>
                    <button type="button" @click="bookService('Consolidation')" class="group/link inline-flex items-center gap-1.5 text-crest-primary font-semibold rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-crest-primary focus-visible:ring-offset-2">
                        <span class="underline-offset-4 group-hover/link:underline">Book now</span>
                        <span class="transition-transform duration-300 group-hover/link:translate-x-1">→</span>
                    </button>
                </div>
                <div class="group order-1 md:order-2 relative aspect-square md:aspect-[4/3] rounded-2xl overflow-hidden shadow-md ring-1 ring-black/5">
                    <img src="{{ asset('images/service-consolidation.jpg') }}"
                         alt="Loose cargo consolidation"
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-crest-primary/20"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 w-14 h-14 rounded-2xl bg-white shadow-lg ring-1 ring-black/5 flex items-center justify-center transition-transform duration-300 group-hover:-translate-y-0.5 group-hover:shadow-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-crest-primary" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                            <rect x="3.5" y="3.5" width="7" height="7" rx="1" stroke-linecap="round" stroke-linejoin="round"/>
                            <rect x="13.5" y="3.5" width="7" height="7" rx="1" stroke-linecap="round" stroke-linejoin="round"/>
                            <rect x="8.5" y="13.5" width="7" height="7" rx="1" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>

            {{-- 05 Brokerage --}}
            <div class="grid md:grid-cols-2 gap-10 md:gap-14 items-center">
                <div class="group relative aspect-square md:aspect-[4/3] rounded-2xl overflow-hidden shadow-md ring-1 ring-black/5">
                    <img src="{{ asset('images/service-brokerage.jpg') }}"
                         alt="Customs brokerage truck"
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-crest-primary/20"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 w-14 h-14 rounded-2xl bg-white shadow-lg ring-1 ring-black/5 flex items-center justify-center transition-transform duration-300 group-hover:-translate-y-0.5 group-hover:shadow-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-crest-primary" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7Z"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <p class="text-crest-primary text-sm font-bold mb-2">05</p>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">Brokerage</h2>
                    <p class="text-gray-500 leading-relaxed mb-6 max-w-md">
                        Acting as the link between shippers and carriers, we manage booking, rate negotiation, documentation, and customs compliance across a strong global partner network — for flexible, cost-effective shipping by sea, air, and land.
                    </p>
                    <button type="button" @click="bookService('Brokerage')" class="group/link inline-flex items-center gap-1.5 text-crest-primary font-semibold rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-crest-primary focus-visible:ring-offset-2">
                        <span class="underline-offset-4 group-hover/link:underline">Book now</span>
                        <span class="transition-transform duration-300 group-hover/link:translate-x-1">→</span>
                    </button>
                </div>
            </div>

        </div>
    </section>

    {{-- GET A QUOTE MODAL (same component/behavior as Home) --}}
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

            {{-- Header --}}
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

                <div class="flex items-center gap-2 mt-5">
                    <template x-for="i in 3" :key="i">
                        <div class="h-1 flex-1 rounded-full transition-colors duration-300" :class="i <= step ? 'bg-crest-accent' : 'bg-white/15'"></div>
                    </template>
                </div>
            </div>

            {{-- Scrollable body --}}
            <div class="overflow-y-auto brand-scroll">

            <div class="p-8" x-show="step < 4">

                {{-- STEP 1: Service selection (only reached if user goes Back from Step 2) --}}
                <div x-show="step === 1"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 translate-x-2"
                     x-transition:enter-end="opacity-100 translate-x-0">
                    <p class="text-sm text-gray-500 mb-5">Choose the service you'd like a quote for.</p>

                    <div class="space-y-2.5">
                        <button type="button" @click="selectService('Freight Forwarding')"
                                class="w-full text-left flex items-center gap-4 border rounded-xl p-4 transition-colors"
                                :class="form.service === 'Freight Forwarding' ? 'border-crest-primary bg-crest-tint/60' : 'border-gray-200 hover:border-crest-primary/40 hover:bg-gray-50'">
                            <span class="w-10 h-10 rounded-lg flex items-center justify-center shrink-0"
                                  :class="form.service === 'Freight Forwarding' ? 'bg-crest-primary text-white' : 'bg-gray-100 text-crest-primary'">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 8h-3V4H3a1 1 0 0 0-1 1v11h2m14-8 3 4v4h-3m-14 0h14M6 20a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm12 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                                </svg>
                            </span>
                            <span class="flex-1 min-w-0">
                                <span class="font-semibold text-gray-900">Freight Forwarding</span>
                                <span class="block text-sm text-gray-500 mt-0.5">Door-to-door shipping for full or partial loads.</span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>

                        <button type="button" @click="selectService('Land Transportation')"
                                class="w-full text-left flex items-center gap-4 border rounded-xl p-4 transition-colors"
                                :class="form.service === 'Land Transportation' ? 'border-crest-primary bg-crest-tint/60' : 'border-gray-200 hover:border-crest-primary/40 hover:bg-gray-50'">
                            <span class="w-10 h-10 rounded-lg flex items-center justify-center shrink-0"
                                  :class="form.service === 'Land Transportation' ? 'bg-crest-primary text-white' : 'bg-gray-100 text-crest-primary'">
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
                                class="w-full text-left flex items-center gap-4 border rounded-xl p-4 transition-colors"
                                :class="form.service === 'Warehousing' ? 'border-crest-primary bg-crest-tint/60' : 'border-gray-200 hover:border-crest-primary/40 hover:bg-gray-50'">
                            <span class="w-10 h-10 rounded-lg flex items-center justify-center shrink-0"
                                  :class="form.service === 'Warehousing' ? 'bg-crest-primary text-white' : 'bg-gray-100 text-crest-primary'">
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
                                class="w-full text-left flex items-center gap-4 border rounded-xl p-4 transition-colors"
                                :class="form.service === 'Consolidation' ? 'border-crest-primary bg-crest-tint/60' : 'border-gray-200 hover:border-crest-primary/40 hover:bg-gray-50'">
                            <span class="w-10 h-10 rounded-lg flex items-center justify-center shrink-0"
                                  :class="form.service === 'Consolidation' ? 'bg-crest-primary text-white' : 'bg-gray-100 text-crest-primary'">
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
                                class="w-full text-left flex items-center gap-4 border rounded-xl p-4 transition-colors"
                                :class="form.service === 'Brokerage' ? 'border-crest-primary bg-crest-tint/60' : 'border-gray-200 hover:border-crest-primary/40 hover:bg-gray-50'">
                            <span class="w-10 h-10 rounded-lg flex items-center justify-center shrink-0"
                                  :class="form.service === 'Brokerage' ? 'bg-crest-primary text-white' : 'bg-gray-100 text-crest-primary'">
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
