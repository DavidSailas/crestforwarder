<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up | Crest Forwarder Inc.</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Hide scrollbar by default, show on hover/scroll for modern browsers */
        .auto-hide-scroll {
            scrollbar-width: thin;
            scrollbar-color: transparent transparent;
            transition: scrollbar-color 0.3s;
        }
        .auto-hide-scroll:hover {
            scrollbar-color: rgba(156, 163, 175, 0.5) transparent;
        }
        /* Webkit browsers (Chrome, Safari, Edge) */
        .auto-hide-scroll::-webkit-scrollbar {
            width: 6px;
        }
        .auto-hide-scroll::-webkit-scrollbar-track {
            background: transparent;
        }
        .auto-hide-scroll::-webkit-scrollbar-thumb {
            background: transparent;
            border-radius: 9999px;
            transition: background 0.3s;
        }
        .auto-hide-scroll:hover::-webkit-scrollbar-thumb {
            background: rgba(156, 163, 175, 0.5);
        }
    </style>
</head>
<body class="font-sans antialiased">

    <div class="h-screen grid lg:grid-cols-2 overflow-hidden">

        {{-- LEFT: Branded panel (Fixed / Non-scrolling) --}}
        <div class="hidden lg:flex h-screen relative flex-col justify-center items-center text-center bg-gradient-to-br from-crest-primary to-crest-primary-dark p-12 gap-12 overflow-hidden">

            {{-- Decorative glow accents --}}
            <div class="absolute -top-24 -right-24 w-72 h-72 bg-white/5 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-white/5 rounded-full blur-3xl pointer-events-none"></div>

            {{-- Centered & Bigger Logo --}}
            <a href="{{ url('/') }}" class="relative flex items-center justify-center w-fit mx-auto">
                <img src="{{ asset('images/logo-white.png') }}" alt="Crest Forwarder Inc." class="h-20">
            </a>

            <div class="relative flex flex-col items-center">
                <h1 class="text-3xl font-bold text-white leading-tight mb-4 max-w-md">
                    Join the Crest Forwarder family.
                </h1>
                <p class="text-white/70 leading-relaxed max-w-sm mb-10">
                    Create an account to request quotes faster, track your shipments, and manage your logistics in one place.
                </p>

                <div class="flex flex-col gap-4 items-start text-left">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-crest-accent" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/>
                            </svg>
                        </div>
                        <p class="text-white/80 text-sm">Freight forwarding, brokerage &amp; warehousing</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-crest-accent" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/>
                            </svg>
                        </div>
                        <p class="text-white/80 text-sm">A dedicated support team, always on hand</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-crest-accent" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/>
                            </svg>
                        </div>
                        <p class="text-white/80 text-sm">Trusted by businesses across Cebu</p>
                    </div>
                </div>
            </div>

            <p class="relative text-white/40 text-xs">
                &copy; {{ date('Y') }} Crest Forwarder Inc. All rights reserved.
            </p>
        </div>

        {{-- RIGHT: Form panel (Scrollable with auto-hidden scrollbar) --}}
        <div class="h-screen overflow-y-auto auto-hide-scroll flex items-center justify-center p-6 sm:p-12 bg-white">
            <div class="w-full max-w-sm my-auto">

                {{-- Mobile-only logo --}}
                <a href="{{ url('/') }}" class="lg:hidden flex items-center justify-center gap-2 mb-10 w-fit mx-auto">
                    <img src="{{ asset('images/logo.png') }}" alt="Crest Forwarder Inc." class="h-12">
                </a>

                <h2 class="text-2xl font-bold text-gray-900 mb-8">Create your account</h2>

                <div class="grid grid-cols-2 gap-3 mb-6">
                    <a href="#"
                       class="flex items-center justify-center gap-2 border border-gray-300 rounded-lg py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-50 hover:border-gray-400 transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0" viewBox="0 0 24 24">
                            <path fill="#4285F4" d="M23.5 12.27c0-.79-.07-1.54-.2-2.27H12v4.3h6.47a5.53 5.53 0 0 1-2.4 3.63v3h3.88c2.27-2.09 3.55-5.17 3.55-8.66Z"/>
                            <path fill="#34A853" d="M12 24c3.24 0 5.95-1.07 7.94-2.9l-3.88-3.02c-1.08.72-2.45 1.15-4.06 1.15-3.13 0-5.78-2.11-6.73-4.96H1.27v3.11A12 12 0 0 0 12 24Z"/>
                            <path fill="#FBBC05" d="M5.27 14.27a7.2 7.2 0 0 1 0-4.54v-3.1H1.27a12 12 0 0 0 0 10.75l4-3.11Z"/>
                            <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.44-3.44C17.94 1.19 15.24 0 12 0 7.31 0 3.26 2.69 1.27 6.63l4 3.1C6.22 6.86 8.87 4.75 12 4.75Z"/>
                        </svg>
                        Google
                    </a>
                    <a href="#"
                       class="flex items-center justify-center gap-2 border border-gray-300 rounded-lg py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-50 hover:border-gray-400 transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24">
                            <defs>
                                <linearGradient id="igGradRegister" x1="0%" y1="100%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="#FFDC80"/>
                                    <stop offset="25%" stop-color="#FCAF45"/>
                                    <stop offset="50%" stop-color="#E1306C"/>
                                    <stop offset="75%" stop-color="#C13584"/>
                                    <stop offset="100%" stop-color="#833AB4"/>
                                </linearGradient>
                            </defs>
                            <rect x="2" y="2" width="20" height="20" rx="6" stroke="url(#igGradRegister)" stroke-width="2"/>
                            <circle cx="12" cy="12" r="4.5" stroke="url(#igGradRegister)" stroke-width="2"/>
                            <circle cx="17.2" cy="6.8" r="1.1" fill="url(#igGradRegister)"/>
                        </svg>
                        Instagram
                    </a>
                </div>

                <div class="flex items-center gap-3 mb-6">
                    <div class="flex-1 h-px bg-gray-200"></div>
                    <span class="text-xs text-gray-400 font-medium">or sign up with email</span>
                    <div class="flex-1 h-px bg-gray-200"></div>
                </div>

                <form method="POST" action="{{ route('register') }}" novalidate
                      class="flex flex-col gap-5"
                      x-data="{
                          first_name: '{{ old('first_name') }}',
                          last_name: '{{ old('last_name') }}',
                          email: '{{ old('email') }}',
                          emailTouched: {{ $errors->has('email') ? 'true' : 'false' }},
                          get emailValid() { return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.email) },
                          phone: '{{ old('phone') }}',
                          password: '',
                          confirmPassword: '',
                          confirmTouched: false,
                          get strength() {
                              let s = 0;
                              if (this.password.length >= 8) s++;
                              if (/[A-Z]/.test(this.password)) s++;
                              if (/[0-9]/.test(this.password)) s++;
                              if (/[^A-Za-z0-9]/.test(this.password)) s++;
                              return s; // 0–4
                          },
                          get strengthLabel() {
                              return ['Too weak', 'Weak', 'Fair', 'Good', 'Strong'][this.strength];
                          },
                          get strengthColor() {
                              return ['bg-gray-200', 'bg-red-400', 'bg-orange-400', 'bg-yellow-400', 'bg-green-500'][this.strength];
                          },
                          get passwordsMatch() { return this.password.length > 0 && this.password === this.confirmPassword }
                      }">
                    @csrf

                    {{-- First Name & Last Name (Split side-by-side) --}}
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1.5">First name</label>
                            <input id="first_name" type="text" name="first_name" x-model="first_name" required autocomplete="given-name"
                                   :class="{{ $errors->has('first_name') ? 'true' : 'false' }} ? 'border-red-300 focus:ring-red-400' : 'border-gray-300 focus:ring-crest-accent'"
                                   class="w-full px-4 py-3 rounded-lg border text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-shadow duration-200"
                                   placeholder="Juan">
                            @error('first_name')
                                <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1.5">Last name</label>
                            <input id="last_name" type="text" name="last_name" x-model="last_name" required autocomplete="family-name"
                                   :class="{{ $errors->has('last_name') ? 'true' : 'false' }} ? 'border-red-300 focus:ring-red-400' : 'border-gray-300 focus:ring-crest-accent'"
                                   class="w-full px-4 py-3 rounded-lg border text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-shadow duration-200"
                                   placeholder="Dela Cruz">
                            @error('last_name')
                                <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Email --}}
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Email address</label>
                        <div class="relative">
                            <input id="email" type="email" name="email" x-model="email" required autocomplete="username"
                                   @blur="emailTouched = true"
                                   :class="(emailTouched && !emailValid) || {{ $errors->has('email') ? 'true' : 'false' }}
                                        ? 'border-red-300 focus:ring-red-400'
                                        : (emailTouched && emailValid ? 'border-green-300 focus:ring-green-400' : 'border-gray-300 focus:ring-crest-accent')"
                                   class="w-full px-4 py-3 pr-10 rounded-lg border text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-shadow duration-200"
                                   placeholder="you@company.com">
                            <svg x-show="emailTouched && emailValid && !{{ $errors->has('email') ? 'true' : 'false' }}" xmlns="http://www.w3.org/2000/svg" class="absolute right-3 top-1/2 -translate-y-1/2 h-5 w-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/>
                            </svg>
                        </div>
                        <p x-show="emailTouched && !emailValid" class="mt-1.5 flex items-center gap-1.5 text-sm text-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18Z"/>
                            </svg>
                            Enter a valid email address.
                        </p>
                        @error('email')
                            <p class="mt-1.5 flex items-center gap-1.5 text-sm text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18Z"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Phone Number --}}
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1.5">Phone number</label>
                        <input id="phone" type="tel" name="phone" x-model="phone" required autocomplete="tel"
                               :class="{{ $errors->has('phone') ? 'true' : 'false' }} ? 'border-red-300 focus:ring-red-400' : 'border-gray-300 focus:ring-crest-accent'"
                               class="w-full px-4 py-3 rounded-lg border text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-shadow duration-200"
                               placeholder="+63 912 345 6789">
                        @error('phone')
                            <p class="mt-1.5 flex items-center gap-1.5 text-sm text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18Z"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1.5">Password</label>
                        <input id="password" type="password" name="password" x-model="password" required autocomplete="new-password"
                               :class="{{ $errors->has('password') ? 'true' : 'false' }} ? 'border-red-300 focus:ring-red-400' : 'border-gray-300 focus:ring-crest-accent'"
                               class="w-full px-4 py-3 rounded-lg border text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-shadow duration-200"
                               placeholder="••••••••">

                        {{-- Live strength meter --}}
                        <div x-show="password.length > 0" class="mt-2">
                            <div class="flex gap-1.5">
                                <template x-for="i in 4" :key="i">
                                    <div class="h-1 flex-1 rounded-full transition-colors duration-300" :class="i <= strength ? strengthColor : 'bg-gray-200'"></div>
                                </template>
                            </div>
                            <p class="mt-1.5 text-xs font-medium" :class="{
                                'text-red-500': strength <= 1,
                                'text-orange-500': strength === 2,
                                'text-yellow-600': strength === 3,
                                'text-green-600': strength === 4
                            }" x-text="strengthLabel"></p>
                        </div>

                        @error('password')
                            <p class="mt-1.5 flex items-center gap-1.5 text-sm text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18Z"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Confirm Password --}}
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1.5">Confirm password</label>
                        <div class="relative">
                            <input id="password_confirmation" type="password" name="password_confirmation" x-model="confirmPassword" required autocomplete="new-password"
                                   @blur="confirmTouched = true"
                                   :class="(confirmTouched && !passwordsMatch) || {{ $errors->has('password_confirmation') ? 'true' : 'false' }}
                                        ? 'border-red-300 focus:ring-red-400'
                                        : (confirmTouched && passwordsMatch ? 'border-green-300 focus:ring-green-400' : 'border-gray-300 focus:ring-crest-accent')"
                                   class="w-full px-4 py-3 pr-10 rounded-lg border text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-shadow duration-200"
                                   placeholder="••••••••">
                            <svg x-show="confirmTouched && passwordsMatch" xmlns="http://www.w3.org/2000/svg" class="absolute right-3 top-1/2 -translate-y-1/2 h-5 w-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/>
                            </svg>
                        </div>
                        <p x-show="confirmTouched && !passwordsMatch" class="mt-1.5 flex items-center gap-1.5 text-sm text-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18Z"/>
                            </svg>
                            Passwords don't match.
                        </p>
                        @error('password_confirmation')
                            <p class="mt-1.5 flex items-center gap-1.5 text-sm text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18Z"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <button type="submit"
                            class="w-full bg-crest-primary text-white font-semibold py-3 rounded-lg shadow-sm hover:bg-crest-primary-dark hover:shadow-md active:shadow-sm transition-all duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-crest-primary focus-visible:ring-offset-2">
                        Create account
                    </button>

                    <p class="text-xs text-gray-400 text-center leading-relaxed">
                        By creating an account, you agree to our
                        <a href="#" class="underline hover:text-gray-600">Terms of Service</a> and
                        <a href="#" class="underline hover:text-gray-600">Privacy Policy</a>.
                    </p>
                </form>

                <p class="text-center text-sm text-gray-500 mt-8">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-crest-primary font-semibold hover:underline">Log in</a>
                </p>

            </div>
        </div>

    </div>

</body>
</html>