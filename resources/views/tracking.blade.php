<x-layouts.app title="Track Your Shipment | Crest Forwarder Inc.">

    @if(request()->filled('tracking_number'))

        {{-- COMPACT SEARCH BAR (shown once a tracking number has been searched) --}}
        <section class="bg-crest-primary-dark border-b border-white/10">
            <div class="max-w-3xl mx-auto px-4 md:px-8 py-7">
                <form action="{{ url('/tracking') }}" method="GET"
                      class="flex flex-col sm:flex-row items-stretch gap-3">
                    <div class="relative flex-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-4 top-1/2 -translate-y-1/2 h-4 w-4 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-4.3-4.3M19 11a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z"/>
                        </svg>
                        <input
                            type="text"
                            name="tracking_number"
                            value="{{ request('tracking_number') }}"
                            placeholder="Enter tracking number..."
                            class="w-full h-full pl-11 pr-4 py-3 rounded-lg border-0 text-sm text-gray-900 placeholder:text-gray-400 bg-white shadow-sm ring-1 ring-black/5 focus:outline-none focus:ring-2 focus:ring-crest-accent transition-shadow duration-200">
                    </div>
                    <button type="submit"
                            class="group/btn shrink-0 inline-flex items-center justify-center gap-2 bg-crest-accent text-crest-primary-dark font-semibold text-sm px-6 py-3 rounded-lg shadow-sm hover:shadow-md hover:bg-crest-accent/90 active:shadow-sm transition-all duration-200 ease-out whitespace-nowrap focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-crest-primary-dark">
                        Track Now
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200 ease-out group-hover/btn:translate-x-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6"/>
                        </svg>
                    </button>
                </form>
            </div>
        </section>

        {{-- TRACKING RESULTS --}}
        {{-- NOTE: this uses placeholder/sample data — wire this up to your real tracking lookup (DB or carrier API) --}}
        <section class="bg-gray-50 min-h-[60vh]">
            <div class="max-w-3xl mx-auto px-4 md:px-8 py-10 md:py-12">

                <a href="{{ url('/tracking') }}" class="group/link inline-flex items-center gap-1.5 text-gray-500 hover:text-crest-primary text-sm font-medium mb-6 transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200 group-hover/link:-translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Track another shipment
                </a>

                {{-- Summary header --}}
                <div class="bg-crest-primary-dark rounded-2xl px-6 md:px-10 py-8 md:py-9 shadow-lg">
                    <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-6 mb-9">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center shrink-0 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-crest-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.5 7.3 12 12m0 0L3.5 7.3M12 12v9m8.5-13.7L12 3 3.5 7.3v9.4L12 21l8.5-4.3V7.3Z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white/45 text-xs font-medium uppercase tracking-wider mb-1">Tracking Number</p>
                                <p class="text-white text-lg md:text-xl font-bold tracking-tight">{{ request('tracking_number') }}</p>
                            </div>
                        </div>
                        <div class="sm:text-right pl-[52px] sm:pl-0">
                            <p class="text-white/45 text-xs font-medium uppercase tracking-wider mb-1">Estimated Arrival</p>
                            <p class="text-white text-lg md:text-xl font-bold tracking-tight">Aug 29, 2026</p>
                        </div>
                    </div>

                    {{-- Progress bar with stage markers --}}
                    <div class="relative">
                        <div class="flex justify-between text-xs font-semibold mb-3">
                            <span class="text-white">Picked up</span>
                            <span class="text-crest-accent">In transit</span>
                            <span class="text-white/40">Delivered</span>
                        </div>
                        <div class="relative h-1.5 rounded-full bg-white/15 overflow-hidden">
                            <div class="h-full bg-crest-accent rounded-full transition-all duration-500" style="width: 65%"></div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <span class="w-2 h-2 rounded-full bg-crest-accent -mt-[15px] ring-4 ring-crest-primary-dark"></span>
                            <span class="w-2 h-2 rounded-full bg-crest-accent -mt-[15px] ring-4 ring-crest-primary-dark"></span>
                            <span class="w-2 h-2 rounded-full bg-white/25 -mt-[15px] ring-4 ring-crest-primary-dark"></span>
                        </div>
                    </div>
                </div>

                {{-- Timeline --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 mt-6 p-6 md:p-8">
                    <div class="relative">

                        {{-- Continuous connector line running behind all steps --}}
                        <div class="absolute left-4 top-4 bottom-4 w-px bg-gray-200"></div>

                        <div class="flex flex-col gap-7">

                            {{-- Completed step --}}
                            <div class="relative flex gap-4">
                                <div class="relative z-10 w-8 h-8 rounded-full bg-crest-primary flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/>
                                    </svg>
                                </div>
                                <div class="pt-1">
                                    <p class="font-semibold text-gray-900 text-sm">Picked up</p>
                                    <p class="text-sm text-gray-500 mt-0.5">Cebu City warehouse</p>
                                    <p class="text-xs text-gray-400 mt-1">Aug 26, 9:12 AM</p>
                                </div>
                            </div>

                            {{-- Completed step --}}
                            <div class="relative flex gap-4">
                                <div class="relative z-10 w-8 h-8 rounded-full bg-crest-primary flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/>
                                    </svg>
                                </div>
                                <div class="pt-1">
                                    <p class="font-semibold text-gray-900 text-sm">Customs clearance</p>
                                    <p class="text-sm text-gray-500 mt-0.5">Mactan port</p>
                                    <p class="text-xs text-gray-400 mt-1">Aug 27, 2:40 PM</p>
                                </div>
                            </div>

                            {{-- Current / in-progress step (highlighted) --}}
                            <div class="relative flex gap-4">
                                <div class="relative z-10 w-8 h-8 rounded-full bg-crest-accent ring-4 ring-white flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-crest-primary-dark" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16V7a1 1 0 0 1 1-1h9v10M3 16h1m0 0h9m-9 0v-3h13m0 3h1a1 1 0 0 0 1-1v-3l-2-4h-3v7m-8 1a2 2 0 1 0 4 0 2 2 0 0 0-4 0Zm10 0a2 2 0 1 0 4 0 2 2 0 0 0-4 0Z"/>
                                    </svg>
                                </div>
                                <div class="bg-crest-tint rounded-xl px-5 py-3.5 flex-1">
                                    <p class="font-semibold text-gray-900 text-sm">In transit</p>
                                    <p class="text-sm text-gray-600 mt-0.5">En route to Iloilo</p>
                                    <p class="text-xs text-crest-primary font-semibold mt-1">Updated 20 mins ago</p>
                                </div>
                            </div>

                            {{-- Pending step --}}
                            <div class="relative flex gap-4">
                                <div class="relative z-10 w-8 h-8 rounded-full bg-white border-2 border-gray-200 flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10.5 12 4l9 6.5M5 9.5V20h14V9.5M10 20v-6h4v6"/>
                                    </svg>
                                </div>
                                <div class="pt-1">
                                    <p class="font-semibold text-gray-400 text-sm">Delivered</p>
                                    <p class="text-sm text-gray-400 mt-0.5">Estimated Aug 29</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

    @else

        {{-- HERO / TRACKING SEARCH SECTION (shown before any search) --}}
        <section class="relative min-h-[420px] sm:min-h-[440px] md:min-h-[500px] lg:min-h-[560px] xl:min-h-[600px] flex items-center justify-center overflow-hidden bg-crest-primary-dark">

            {{-- Background map image --}}
            <img src="{{ asset('images/tracking-map-bg.jpg') }}"
                 alt="Philippines map"
                 class="absolute inset-0 w-full h-full object-cover">

            {{-- Strong dark overlay (inline style — guaranteed to render regardless of CSS build state) --}}
            <div class="absolute inset-0" style="background-color: rgba(0,0,0,0.65);"></div>
            <div class="absolute inset-0" style="background: linear-gradient(to bottom, rgba(0,0,0,0.35), rgba(0,0,0,0.75));"></div>

            {{-- Content --}}
            <div class="relative max-w-2xl mx-auto px-8 text-center">
                <h1 class="text-3xl md:text-4xl font-bold text-white mb-3" style="text-shadow: 0 2px 12px rgba(0,0,0,0.4);">
                    Track your shipment
                </h1>
                <p class="text-white/80 text-base md:text-lg mb-10">
                    Enter your tracking number below to see real-time status.
                </p>

                <form action="{{ url('/tracking') }}" method="GET"
                      class="flex flex-col md:flex-row items-stretch gap-3 max-w-xl mx-auto">
                    <div class="relative flex-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-5 top-1/2 -translate-y-1/2 h-5 w-5 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-4.3-4.3M19 11a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z"/>
                        </svg>
                        <input
                            type="text"
                            name="tracking_number"
                            placeholder="Enter tracking number..."
                            class="w-full h-full pl-12 pr-4 py-4 rounded-xl border-0 text-base text-gray-900 placeholder:text-gray-400 bg-white shadow-lg ring-1 ring-black/5 focus:outline-none focus:ring-2 focus:ring-crest-accent transition-shadow duration-200">
                    </div>
                    <button type="submit"
                            class="group/btn shrink-0 inline-flex items-center justify-center gap-2 bg-crest-accent text-crest-primary-dark font-semibold text-base px-8 py-4 rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-0.5 hover:bg-crest-accent/90 active:translate-y-0 active:shadow-lg focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-crest-primary-dark transition-all duration-200 ease-out whitespace-nowrap">
                        Track Now
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200 ease-out group-hover/btn:translate-x-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6"/>
                        </svg>
                    </button>
                </form>
            </div>

        </section>

    @endif

</x-layouts.app>
