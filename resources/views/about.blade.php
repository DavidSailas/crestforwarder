<x-layouts.app title="About Us | Crest Forwarder Inc.">

    {{-- HERO SECTION --}}
    <section class="relative min-h-[420px] sm:min-h-[440px] md:min-h-[500px] lg:min-h-[560px] xl:min-h-[600px] flex items-center justify-center overflow-hidden bg-gray-900">

        {{-- Background team/truck photo --}}
        <img src="{{ asset('images/about-hero-team.jpg') }}"
             alt="Crest Forwarder team"
             class="absolute inset-0 w-full h-full object-cover">

        {{-- Dark overlay for legibility --}}
        <div class="absolute inset-0" style="background-color: rgba(0,0,0,0.60);"></div>
        <div class="absolute inset-0" style="background: linear-gradient(to bottom, rgba(0,0,0,0.35), rgba(0,0,0,0.75));"></div>

        {{-- Content --}}
        <div class="relative max-w-3xl mx-auto px-8 text-center">
            <p class="text-crest-accent text-sm font-bold tracking-widest uppercase mb-3">About Us</p>
            <h1 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-5" style="text-shadow: 0 2px 12px rgba(0,0,0,0.4);">
                21 years of moving cargo, built by people who care
            </h1>
            <p class="text-white/75 text-base md:text-lg leading-relaxed mb-8 max-w-2xl mx-auto">
                Since 2005, Crest Forwarder has grown from a small team with a bold idea into one of Cebu's trusted names in freight forwarding — anchored by teamwork, ingenuity, and a genuine commitment to the people we serve.
            </p>

            <span class="inline-flex items-center gap-2 bg-crest-primary/90 backdrop-blur-sm text-white text-sm font-semibold px-4 py-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-crest-accent shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 2v4M16 2v4M3 9h18M5 4h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z"/>
                </svg>
                Est. February 16, 2005
            </span>
        </div>

    </section>

    {{-- OUR STORY --}}
    <section class="max-w-7xl mx-auto px-8 py-20">
        <div class="grid md:grid-cols-2 gap-12 md:gap-16">

            <div class="md:sticky md:top-28 md:self-start">
                <p class="text-crest-primary text-sm font-bold tracking-widest uppercase mb-3">Our Story</p>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 leading-tight max-w-sm mb-8">
                    From a bold idea to a name Cebu trusts
                </h2>

                <div class="flex items-center gap-8 border-t border-gray-100 pt-6 max-w-sm">
                    <div>
                        <p class="text-3xl font-bold text-gray-900">2005</p>
                        <p class="text-sm text-gray-500 mt-1">Year founded</p>
                    </div>
                    <div class="w-px h-10 bg-gray-200"></div>
                    <div>
                        <p class="text-3xl font-bold text-gray-900">21+</p>
                        <p class="text-sm text-gray-500 mt-1">Years in business</p>
                    </div>
                </div>
            </div>

            <div>
                <p class="text-gray-700 leading-relaxed mb-6">
                    <span class="float-left text-6xl md:text-7xl font-bold text-crest-primary leading-[0.8] mr-3 mt-1">C</span>rest Forwarder began in 2005, founded by a team of seasoned logistics professionals who saw the industry's gaps up close — high costs, rigid processes, and a lack of genuine care for the customer. They believed shipping could be done differently.
                </p>
                <p class="text-gray-700 leading-relaxed mb-6">
                    What started as a small team with a bold idea has grown into one of Cebu's trusted names in freight forwarding, built on the same principles from day one: teamwork, ingenuity, and a genuine commitment to the people we serve.
                </p>

                <blockquote class="border-l-4 border-crest-accent pl-5 my-8">
                    <p class="text-gray-900 font-semibold italic text-lg">
                        "CREST is PEOPLE, and PEOPLE is CREST."
                    </p>
                </blockquote>

                <p class="text-gray-700 leading-relaxed">
                    That belief still shapes how we work today — twenty-one years later, still moving cargo, and still putting people first.
                </p>
            </div>

        </div>
    </section>

    {{-- VISION & MISSION --}}
    <section class="max-w-7xl mx-auto px-8 pb-20">
        <div class="grid md:grid-cols-2 gap-6">

            {{-- Our Vision --}}
            <div class="border border-crest-primary/30 rounded-2xl p-8 md:p-10 bg-white">
                <div class="w-12 h-12 rounded-xl bg-crest-tint flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-crest-primary" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5 19 5-5m0 0 3-8 8 3-8 3-3 7Zm0-5 2 2"/>
                    </svg>
                </div>
                <p class="text-crest-primary text-sm font-bold tracking-widest uppercase mb-3">Our Vision</p>
                <p class="text-gray-600 leading-relaxed">
                    To be one of the leading freight forwarding companies in the country, most admired for its people, process, and excellent customer relationships.
                </p>
            </div>

            {{-- Our Mission --}}
            <div class="rounded-2xl p-8 md:p-10 bg-crest-primary-dark">
                <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-crest-accent" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="8"/>
                        <circle cx="12" cy="12" r="4"/>
                        <circle cx="12" cy="12" r="0.5" fill="currentColor"/>
                    </svg>
                </div>
                <p class="text-crest-accent text-sm font-bold tracking-widest uppercase mb-3">Our Mission</p>
                <p class="text-white/80 leading-relaxed mb-6">
                    We are your reliable partner in moving your cargoes. We consistently innovate and provide alternative, cost-effective solutions in every step of our service. We value our passionate people and the relationships we build with our customers — they are the reason why we exist.
                </p>
                <p class="text-white font-semibold">
                    We at Crest, <span class="text-crest-accent font-extrabold">MOVE</span> together.
                </p>
            </div>

        </div>
    </section>

    {{-- CORE VALUES --}}
    <section class="max-w-7xl mx-auto px-8 pb-20">

        <div class="text-center max-w-2xl mx-auto mb-12">
            <p class="text-crest-primary text-sm font-bold tracking-widest uppercase mb-3">Core Values</p>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">
                The values behind how we <span class="font-extrabold">MOVE</span>
            </h2>
            <p class="text-gray-500 text-base">
                Four principles guide every decision we make, every day.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">

            {{-- M --}}
            <div class="border border-crest-primary/25 rounded-2xl p-6 text-center transition-all duration-300 hover:border-crest-primary/50 hover:shadow-md hover:-translate-y-0.5">
                <p class="text-3xl font-extrabold text-crest-primary mb-3">M</p>
                <h3 class="font-semibold text-gray-900 mb-2">Make Sound Decisions</h3>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Choosing and timely implementing efficient and effective options.
                </p>
            </div>

            {{-- O --}}
            <div class="border border-crest-primary/25 rounded-2xl p-6 text-center transition-all duration-300 hover:border-crest-primary/50 hover:shadow-md hover:-translate-y-0.5">
                <p class="text-3xl font-extrabold text-crest-primary mb-3">O</p>
                <h3 class="font-semibold text-gray-900 mb-2">Operational Excellence</h3>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Optimizing resources and processes to exceed customer expectations.
                </p>
            </div>

            {{-- V --}}
            <div class="border border-crest-primary/25 rounded-2xl p-6 text-center transition-all duration-300 hover:border-crest-primary/50 hover:shadow-md hover:-translate-y-0.5">
                <p class="text-3xl font-extrabold text-crest-primary mb-3">V</p>
                <h3 class="font-semibold text-gray-900 mb-2">Versatile Solutions</h3>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Implementing adaptable strategies that deliver results in any scenario.
                </p>
            </div>

            {{-- E --}}
            <div class="border border-crest-primary/25 rounded-2xl p-6 text-center transition-all duration-300 hover:border-crest-primary/50 hover:shadow-md hover:-translate-y-0.5">
                <p class="text-3xl font-extrabold text-crest-primary mb-3">E</p>
                <h3 class="font-semibold text-gray-900 mb-2">Employee Welfare</h3>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Caring for the health and happiness of our people and their families.
                </p>
            </div>

        </div>
    </section>

</x-layouts.app>
