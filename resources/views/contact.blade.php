<x-layouts.app title="Contact Us | Crest Forwarder Inc.">

    <section class="max-w-7xl mx-auto px-8 py-16">

        <div class="text-center max-w-2xl mx-auto mb-12">
            <p class="text-crest-primary text-sm font-bold tracking-widest uppercase mb-3">Contact Us</p>
            <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">
                Let's get your shipment moving
            </h1>
            <p class="text-gray-500 text-base">
                Our team is ready to assist with quotes, logistics, and more.
            </p>
        </div>

        <div class="grid md:grid-cols-[1.2fr_1fr] gap-8">

            {{-- Contact form --}}
            <form id="contact-form" action="{{ route('contact.submit') }}" method="POST"
                  class="bg-white border border-gray-200 rounded-2xl shadow-sm p-8 scroll-mt-24" novalidate>
                @csrf

                <div class="grid grid-cols-2 gap-4 mb-5">
                    <div>
                        <label for="first_name" class="text-sm font-medium text-gray-900 block mb-1.5">First name</label>
                        <input type="text" name="first_name" id="first_name" placeholder="Juan"
                               value="{{ old('first_name') }}"
                               aria-invalid="{{ $errors->has('first_name') ? 'true' : 'false' }}"
                               class="w-full rounded-lg border shadow-sm text-sm px-3.5 py-2.5 transition focus:outline-none focus:ring-1
                                      {{ $errors->has('first_name')
                                          ? 'border-red-400 focus:border-red-500 focus:ring-red-400 bg-red-50/40'
                                          : 'border-gray-300 focus:border-crest-primary focus:ring-crest-primary' }}"
                               required>
                        @error('first_name')
                            <p class="flex items-center gap-1.5 text-xs text-red-600 mt-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10A8 8 0 11 2 10a8 8 0 0116 0Zm-7-4a1 1 0 11-2 0 1 1 0 012 0ZM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9Z" clip-rule="evenodd" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div>
                        <label for="last_name" class="text-sm font-medium text-gray-900 block mb-1.5">Last name</label>
                        <input type="text" name="last_name" id="last_name" placeholder="Dela Cruz"
                               value="{{ old('last_name') }}"
                               aria-invalid="{{ $errors->has('last_name') ? 'true' : 'false' }}"
                               class="w-full rounded-lg border shadow-sm text-sm px-3.5 py-2.5 transition focus:outline-none focus:ring-1
                                      {{ $errors->has('last_name')
                                          ? 'border-red-400 focus:border-red-500 focus:ring-red-400 bg-red-50/40'
                                          : 'border-gray-300 focus:border-crest-primary focus:ring-crest-primary' }}"
                               required>
                        @error('last_name')
                            <p class="flex items-center gap-1.5 text-xs text-red-600 mt-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10A8 8 0 11 2 10a8 8 0 0116 0Zm-7-4a1 1 0 11-2 0 1 1 0 012 0ZM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9Z" clip-rule="evenodd" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                {{-- Email --}}
                <div class="mb-5">
                    <label for="email" class="text-sm font-medium text-gray-900 block mb-1.5">Email address</label>
                    <div class="flex items-center gap-2.5 w-full rounded-lg border shadow-sm px-3.5 py-2.5 transition
                                {{ $errors->has('email')
                                    ? 'border-red-400 bg-red-50/40 focus-within:border-red-500 focus-within:ring-1 focus-within:ring-red-400'
                                    : 'border-gray-300 focus-within:border-crest-primary focus-within:ring-1 focus-within:ring-crest-primary' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 {{ $errors->has('email') ? 'text-red-400' : 'text-gray-400' }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <input type="email" name="email" id="email" placeholder="you@company.com"
                               value="{{ old('email') }}"
                               aria-invalid="{{ $errors->has('email') ? 'true' : 'false' }}"
                               class="w-full border-0 p-0 text-sm focus:ring-0 focus:outline-none bg-transparent"
                               required>
                    </div>
                    @error('email')
                        <p class="flex items-center gap-1.5 text-xs text-red-600 mt-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10A8 8 0 11 2 10a8 8 0 0116 0Zm-7-4a1 1 0 11-2 0 1 1 0 012 0ZM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9Z" clip-rule="evenodd" />
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Phone --}}
                <div class="mb-5">
                    <label for="phone" class="text-sm font-medium text-gray-900 block mb-1.5">
                        Phone number <span class="text-gray-400 font-normal">(optional)</span>
                    </label>
                    <div class="flex items-center gap-2.5 w-full rounded-lg border shadow-sm px-3.5 py-2.5 transition
                                {{ $errors->has('phone')
                                    ? 'border-red-400 bg-red-50/40 focus-within:border-red-500 focus-within:ring-1 focus-within:ring-red-400'
                                    : 'border-gray-300 focus-within:border-crest-primary focus-within:ring-1 focus-within:ring-crest-primary' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 {{ $errors->has('phone') ? 'text-red-400' : 'text-gray-400' }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.362-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25Z" />
                        </svg>
                        <input type="text" name="phone" id="phone" placeholder="+63 9XX XXX XXXX"
                               value="{{ old('phone') }}"
                               aria-invalid="{{ $errors->has('phone') ? 'true' : 'false' }}"
                               class="w-full border-0 p-0 text-sm focus:ring-0 focus:outline-none bg-transparent">
                    </div>
                    @error('phone')
                        <p class="flex items-center gap-1.5 text-xs text-red-600 mt-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10A8 8 0 11 2 10a8 8 0 0116 0Zm-7-4a1 1 0 11-2 0 1 1 0 012 0ZM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9Z" clip-rule="evenodd" />
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Message --}}
                <div class="mb-2">
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="message" class="text-sm font-medium text-gray-900">Message</label>
                        <span x-data="{ count: {{ strlen(old('message', '')) }} }"
                              x-init="$watch('count', v => count = v)"
                              class="text-xs text-gray-400">
                            <span id="message-count">{{ strlen(old('message', '')) }}</span>/2000
                        </span>
                    </div>
                    <textarea name="message" id="message" rows="4" placeholder="Tell us about your shipment or inquiry..."
                              maxlength="2000"
                              oninput="document.getElementById('message-count').textContent = this.value.length"
                              aria-invalid="{{ $errors->has('message') ? 'true' : 'false' }}"
                              class="w-full rounded-lg border shadow-sm text-sm px-3.5 py-2.5 resize-none transition focus:outline-none focus:ring-1
                                     {{ $errors->has('message')
                                         ? 'border-red-400 focus:border-red-500 focus:ring-red-400 bg-red-50/40'
                                         : 'border-gray-300 focus:border-crest-primary focus:ring-crest-primary' }}"
                              required>{{ old('message') }}</textarea>
                    @error('message')
                        <p class="flex items-center gap-1.5 text-xs text-red-600 mt-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10A8 8 0 11 2 10a8 8 0 0116 0Zm-7-4a1 1 0 11-2 0 1 1 0 012 0ZM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9Z" clip-rule="evenodd" />
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- General validation summary (shows if any errors exist) --}}
                @if ($errors->any())
                    <div class="flex items-start gap-2.5 text-sm text-red-700 bg-red-50 border border-red-200 rounded-lg px-4 py-3 mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10A8 8 0 11 2 10a8 8 0 0116 0Zm-7-4a1 1 0 11-2 0 1 1 0 012 0ZM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9Z" clip-rule="evenodd" />
                        </svg>
                        <span>Please fix {{ $errors->count() === 1 ? 'the error' : 'the ' . $errors->count() . ' errors' }} above before submitting.</span>
                    </div>
                @endif

                @if (session('success'))
                    <div class="flex items-center gap-2 text-sm text-crest-primary bg-crest-tint rounded-lg px-4 py-3 mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0Z" />
                        </svg>
                        {{ session('success') }}
                    </div>
                @endif

                <button type="submit"
                        class="w-full bg-crest-accent text-crest-primary-dark font-semibold py-3 rounded-lg shadow-sm hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 mt-6">
                    Send message
                </button>
            </form>

            {{-- Side info --}}
            <div class="flex flex-col gap-5">

                <div class="bg-gradient-to-br from-crest-primary to-crest-primary-dark rounded-2xl shadow-sm p-6 text-white">
                    <div class="w-11 h-11 rounded-full bg-white/15 flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.362-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25Z" />
                        </svg>
                    </div>
                    <p class="text-sm font-semibold mb-1">Prefer to call?</p>
                    <p class="text-xs text-white/75 mb-4 leading-relaxed">Our Cebu office is reachable directly.</p>
                    <p class="text-xl font-bold tracking-tight">(032) 266-0685</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                    <p class="text-sm font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-crest-primary" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21" />
                        </svg>
                        Our branches
                    </p>
                    <div class="flex flex-col divide-y divide-gray-100">
                        <div class="flex items-center justify-between text-sm py-3 first:pt-0 last:pb-0">
                            <span class="text-gray-500">Cebu</span>
                            <span class="font-semibold text-gray-900">(032) 266-0685</span>
                        </div>
                        <div class="flex items-center justify-between text-sm py-3">
                            <span class="text-gray-500">Manila</span>
                            <span class="font-semibold text-gray-900">(02) 523-1732</span>
                        </div>
                        <div class="flex items-center justify-between text-sm py-3">
                            <span class="text-gray-500">Davao</span>
                            <span class="font-semibold text-gray-900">(082) 234-1953</span>
                        </div>
                        <div class="flex items-center justify-between text-sm py-3 last:pb-0">
                            <span class="text-gray-500">Cagayan de Oro</span>
                            <span class="font-semibold text-gray-900">(088) 850-0703</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    @if ($errors->any() || session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const form = document.getElementById('contact-form');
                if (form) {
                    form.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        </script>
    @endif

</x-layouts.app>
