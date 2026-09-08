<footer class="bg-crest-primary-dark text-white rounded-t-2xl mt-16">
    <div class="max-w-7xl mx-auto px-10 pt-12 pb-6">

        <div class="grid grid-cols-1 md:grid-cols-5 gap-8 mb-9">

            {{-- Logo + description --}}
            <div>
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/logo-white.png') }}" alt="Crest Forwarder Inc." class="h-20 w-auto">
                </div>
                <p class="text-sm text-white/70 mb-4 max-w-xs">
                    Your trusted partner in seamless logistics, customs clearance, and cargo forwarding across the Philippines.
                </p>
                <div class="flex gap-3">
                    <a href="https://www.facebook.com/crestforwarderinc" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20">
                        {{-- Facebook icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12a10 10 0 1 0-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.4h-1.2c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0 0 22 12Z"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/company/crest-forwarder-inc/" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20">
                        {{-- LinkedIn icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.5 2h-17A1.5 1.5 0 0 0 2 3.5v17A1.5 1.5 0 0 0 3.5 22h17a1.5 1.5 0 0 0 1.5-1.5v-17A1.5 1.5 0 0 0 20.5 2ZM8.3 18.5H5.7V9.8h2.6v8.7ZM7 8.7a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm11.5 9.8h-2.6v-4.6c0-1.1 0-2.5-1.5-2.5s-1.7 1.2-1.7 2.4v4.7h-2.6V9.8h2.5v1.2h.1c.4-.7 1.3-1.5 2.7-1.5 2.8 0 3.3 1.9 3.3 4.3v4.7Z"/></svg>
                    </a>
                    <a href="https://www.tiktok.com/@crestforwarderhr" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20">
                        {{-- TikTok icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M16.6 5.8a4.6 4.6 0 0 1-3.3-1.4V16a5 5 0 1 1-4.3-4.9v2.7a2.3 2.3 0 1 0 1.7 2.2V2h2.6a4.6 4.6 0 0 0 1.3 3.1 4.6 4.6 0 0 0 3.3 1.4V5.8Z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Quick links --}}
            <div>
                <p class="text-sm font-semibold mb-4">Quick Links</p>
                <div class="flex flex-col gap-2 text-sm text-white/70">
                    <a href="{{ url('/') }}" class="hover:text-white">Home</a>
                    <a href="{{ url('/service') }}" class="hover:text-white">Service</a>
                    <a href="{{ url('/tracking') }}" class="hover:text-white">Tracking</a>
                    <a href="{{ url('/about') }}" class="hover:text-white">About Us</a>
                    <a href="{{ url('/contact') }}" class="hover:text-white">Contact Us</a>
                </div>
            </div>

            {{-- Branch --}}
            <div>
                <p class="text-sm font-semibold mb-4">Branch</p>
                <div class="flex flex-col gap-3 text-sm text-white/70">
                    <div>
                        <p class="text-white font-medium">Cebu</p>
                        <p>(032) 266-0685</p>
                    </div>
                    <div>
                        <p class="text-white font-medium">Manila</p>
                        <p>(02) 523-1732</p>
                    </div>
                    <div>
                        <p class="text-white font-medium">Davao</p>
                        <p>(082) 234-1953</p>
                    </div>
                    <div>
                        <p class="text-white font-medium">Cagayan de Oro</p>
                        <p>(088) 850-0703</p>
                    </div>
                </div>
            </div>

            {{-- Services --}}
            <div>
                <p class="text-sm font-semibold mb-4">Services</p>
                <div class="flex flex-col gap-2 text-sm text-white/70">
                    <a href="{{ url('/service') }}" class="hover:text-white">Freight Forwarding</a>
                    <a href="{{ url('/service') }}" class="hover:text-white">Land Transportation</a>
                    <a href="{{ url('/service') }}" class="hover:text-white">Warehousing</a>
                    <a href="{{ url('/service') }}" class="hover:text-white">Consolidation</a>
                    <a href="{{ url('/service') }}" class="hover:text-white">Brokerage</a>
                </div>
            </div>

            {{-- Contact --}}
            <div>
                <p class="text-sm font-semibold mb-4">Contact</p>
                <div class="flex flex-col gap-3 text-sm text-white/70">
                    <div class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21c-4.5-4.2-7-7.8-7-11a7 7 0 1 1 14 0c0 3.2-2.5 6.8-7 11Z"/><circle cx="12" cy="10" r="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <p>Mabolo, Cebu City, Philippines</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5c0-1.1.9-2 2-2h2.3c.5 0 1 .3 1.1.8l1 3.3c.2.5 0 1-.4 1.3L7.6 9.7a12 12 0 0 0 6.7 6.7l1.3-1.4c.3-.4.8-.5 1.3-.4l3.3 1c.5.2.8.6.8 1.1V19c0 1.1-.9 2-2 2h-1C9.9 21 3 14.1 3 6V5Z"/></svg>
                        <p>(032) 266-0685</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 6a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6Z"/><path stroke-linecap="round" stroke-linejoin="round" d="m3 7 9 6 9-6"/></svg>
                        <p>info@crestcebu.com</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="border-t border-white/10 pt-5 flex flex-col md:flex-row items-center justify-between gap-3 text-xs text-white/50">
            <p>&copy; {{ date('Y') }} Crest Forwarder Inc. All rights reserved.</p>
            <div class="flex gap-5">
                <a href="#" class="hover:text-white">Privacy Policy</a>
                <a href="#" class="hover:text-white">Terms of Service</a>
            </div>
        </div>

    </div>
</footer>
