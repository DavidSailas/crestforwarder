<div x-data="{ sidebarOpen: false }">

    {{-- Mobile top bar --}}
    <div class="lg:hidden flex items-center justify-between px-4 py-3 bg-crest-primary sticky top-0 z-30">
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('images/logo-white.png') }}" alt="Crest Forwarder Inc." class="h-8">
        </a>
        <button @click="sidebarOpen = true" class="text-white p-2 -mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    {{-- Mobile backdrop --}}
    <div x-show="sidebarOpen" x-cloak @click="sidebarOpen = false"
         class="fixed inset-0 z-40 bg-gray-900/40 lg:hidden"></div>

    {{-- SIDEBAR — fixed, stays in place while the page scrolls --}}
    <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'"
           class="fixed inset-y-0 left-0 z-50 w-64 flex flex-col bg-crest-primary transition-transform duration-200 ease-out lg:translate-x-0">

        <div class="flex items-center justify-between px-6 pt-7 pb-6">
            <div class="flex items-center">
                <img src="{{ asset('images/logo-white.png') }}" alt="Crest Forwarder Inc." class="h-14">
            </div>
            <button @click="sidebarOpen = false" class="lg:hidden text-white/70 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <nav class="flex-1 flex flex-col gap-0.5 px-3 mt-2">
            @php
                $navActive = 'flex items-center gap-3 pl-3 pr-3 py-2.5 rounded-md border-l-2 border-crest-accent bg-white/[0.06] text-white font-semibold text-sm';
                $navInactive = 'flex items-center gap-3 pl-[14px] pr-3 py-2.5 rounded-md border-l-2 border-transparent text-white/65 hover:bg-white/[0.06] hover:text-white text-sm font-medium transition-colors';
            @endphp
            <a href="{{ route('customer.dashboard') }}"
               class="{{ request()->routeIs('customer.dashboard') ? $navActive : $navInactive }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0 7-7 7 7M5 10v10a1 1 0 0 0 1 1h3m10-11 2 2m-2-2v10a1 1 0 0 1-1 1h-3m-6 0a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1m-6 0h6"/>
                </svg>
                Dashboard
            </a>
            <a href="{{ route('customer.shipments') }}"
               class="{{ request()->routeIs('customer.shipments') ? $navActive : $navInactive }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 7 12 3 4 7m16 0-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                </svg>
                My Shipments
            </a>
            <a href="{{ route('customer.quote') }}"
               class="{{ request()->routeIs('customer.quote') ? $navActive : $navInactive }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 20a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm12 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM3 4h2l1.6 8.6a2 2 0 0 0 2 1.6h8.4a2 2 0 0 0 2-1.6L20.4 7H6"/>
                </svg>
                Request a Quote
            </a>
            <a href="{{ route('customer.invoices') }}"
               class="{{ request()->routeIs('customer.invoices') ? $navActive : $navInactive }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5.5L17 7.5V19a2 2 0 0 1-2 2Z"/>
                </svg>
                Invoices
            </a>
            <a href="{{ route('customer.profile') }}"
               class="{{ request()->routeIs('customer.profile') ? $navActive : $navInactive }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0Zm-8 8a7 7 0 0 0-7 7h18a7 7 0 0 0-7-7H8Z"/>
                </svg>
                Profile
            </a>
        </nav>

        <div class="px-6 pb-6 pt-4">
            <div class="h-px bg-white/10 mb-4"></div>
            <a href="{{ route('login') }}"
               class="flex items-center gap-3 -ml-3 pl-3 pr-3 py-2.5 rounded-md text-white/65 hover:bg-white/[0.06] hover:text-white text-sm font-medium transition-colors mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0-4-4m4 4H7m6 5v1a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5a2 2 0 0 1 2 2v1"/>
                </svg>
                Log out
            </a>
            <p class="text-xs text-white/40 leading-relaxed">
                Need help? Call our Cebu office at<br>
                <span class="text-white/70 font-medium">(032) 266-0685</span>
            </p>
        </div>
    </aside>

</div>
