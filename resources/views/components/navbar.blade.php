<nav x-data="{ mobileOpen: false }" class="bg-white/95 backdrop-blur border-b border-gray-100 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 md:px-8 py-4 flex items-center justify-between">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="flex items-center gap-2 shrink-0 rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-crest-primary focus-visible:ring-offset-2">
            <img src="{{ asset('images/logo.png') }}" alt="Crest Forwarder Inc." class="h-14">
        </a>

        {{-- Nav links --}}
        <div class="hidden md:flex items-center gap-1 text-sm font-medium">
            <a href="{{ url('/') }}"
               class="px-4 py-2 rounded-full transition-all duration-200 {{ request()->is('/') ? 'bg-crest-tint text-crest-primary font-semibold' : 'text-gray-600 hover:text-crest-primary hover:bg-gray-50' }}">
                Home
            </a>
            <a href="{{ url('/service') }}"
               class="px-4 py-2 rounded-full transition-all duration-200 {{ request()->is('service') ? 'bg-crest-tint text-crest-primary font-semibold' : 'text-gray-600 hover:text-crest-primary hover:bg-gray-50' }}">
                Service
            </a>
            <a href="{{ url('/tracking') }}"
               class="px-4 py-2 rounded-full transition-all duration-200 {{ request()->is('tracking') ? 'bg-crest-tint text-crest-primary font-semibold' : 'text-gray-600 hover:text-crest-primary hover:bg-gray-50' }}">
                Tracking
            </a>
            <a href="{{ url('/about') }}"
               class="px-4 py-2 rounded-full transition-all duration-200 {{ request()->is('about') ? 'bg-crest-tint text-crest-primary font-semibold' : 'text-gray-600 hover:text-crest-primary hover:bg-gray-50' }}">
                About Us
            </a>
            <a href="{{ url('/contact') }}"
               class="px-4 py-2 rounded-full transition-all duration-200 {{ request()->is('contact') ? 'bg-crest-tint text-crest-primary font-semibold' : 'text-gray-600 hover:text-crest-primary hover:bg-gray-50' }}">
                Contact Us
            </a>
        </div>

        {{-- Auth buttons --}}
        <div class="hidden md:flex items-center gap-5">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm font-semibold text-crest-primary hover:text-crest-primary-dark transition-colors duration-200">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-700 hover:text-crest-primary transition-colors duration-200">
                    Log in
                </a>
                <a href="{{ route('register') }}"
                   class="bg-crest-primary text-white text-sm font-semibold px-5 py-2.5 rounded-lg shadow-sm hover:bg-crest-primary-dark hover:shadow-md active:shadow-sm transition-all duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-crest-primary focus-visible:ring-offset-2">
                    Sign Up
                </a>
            @endauth
        </div>

        {{-- Mobile menu button --}}
        <button @click="mobileOpen = !mobileOpen"
                type="button"
                aria-label="Toggle navigation menu"
                :aria-expanded="mobileOpen"
                class="md:hidden text-gray-700 hover:text-crest-primary p-2 -mr-2 rounded-lg hover:bg-gray-50 transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-crest-primary">
            <svg x-show="!mobileOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="mobileOpen" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

    </div>

    {{-- Mobile menu panel --}}
    <div x-show="mobileOpen"
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         @click.outside="mobileOpen = false"
         class="md:hidden border-t border-gray-100 bg-white px-6 py-4">

        <div class="flex flex-col gap-1 text-sm font-medium">
            <a href="{{ url('/') }}"
               class="px-4 py-2.5 rounded-xl transition-colors duration-200 {{ request()->is('/') ? 'bg-crest-tint text-crest-primary font-semibold' : 'text-gray-700 hover:bg-gray-50 hover:text-crest-primary' }}">
                Home
            </a>
            <a href="{{ url('/service') }}"
               class="px-4 py-2.5 rounded-xl transition-colors duration-200 {{ request()->is('service') ? 'bg-crest-tint text-crest-primary font-semibold' : 'text-gray-700 hover:bg-gray-50 hover:text-crest-primary' }}">
                Service
            </a>
            <a href="{{ url('/tracking') }}"
               class="px-4 py-2.5 rounded-xl transition-colors duration-200 {{ request()->is('tracking') ? 'bg-crest-tint text-crest-primary font-semibold' : 'text-gray-700 hover:bg-gray-50 hover:text-crest-primary' }}">
                Tracking
            </a>
            <a href="{{ url('/about') }}"
               class="px-4 py-2.5 rounded-xl transition-colors duration-200 {{ request()->is('about') ? 'bg-crest-tint text-crest-primary font-semibold' : 'text-gray-700 hover:bg-gray-50 hover:text-crest-primary' }}">
                About Us
            </a>
            <a href="{{ url('/contact') }}"
               class="px-4 py-2.5 rounded-xl transition-colors duration-200 {{ request()->is('contact') ? 'bg-crest-tint text-crest-primary font-semibold' : 'text-gray-700 hover:bg-gray-50 hover:text-crest-primary' }}">
                Contact Us
            </a>
        </div>

        <div class="flex flex-col gap-3 mt-4 pt-4 border-t border-gray-100">
            @auth
                <a href="{{ url('/dashboard') }}" class="px-3 py-2.5 rounded-lg text-sm font-semibold text-crest-primary hover:bg-crest-tint">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="px-3 py-2.5 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-50">
                    Log in
                </a>
                <a href="{{ route('register') }}"
                   class="bg-crest-primary text-white text-sm font-semibold text-center px-5 py-2.5 rounded-lg hover:bg-crest-primary-dark transition-colors duration-200">
                    Sign Up
                </a>
            @endauth
        </div>
    </div>
</nav>