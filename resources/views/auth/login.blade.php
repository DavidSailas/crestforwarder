<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In | Crest Forwarder Inc.</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">

    <div class="min-h-screen grid lg:grid-cols-2">

        {{-- LEFT: Branded panel --}}
        <div class="hidden lg:flex relative flex-col justify-center items-center text-center bg-gradient-to-br from-crest-primary to-crest-primary-dark p-12 gap-12 overflow-hidden">

            {{-- Decorative glow accents --}}
            <div class="absolute -top-24 -right-24 w-72 h-72 bg-white/5 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-white/5 rounded-full blur-3xl pointer-events-none"></div>

            {{-- Centered & Bigger Logo --}}
            <a href="{{ url('/') }}" class="relative flex items-center justify-center w-fit mx-auto">
                <img src="{{ asset('images/logo-white.png') }}" alt="Crest Forwarder Inc." class="h-20">
            </a>

            <div class="relative flex flex-col items-center">
                <h1 class="text-3xl font-bold text-white leading-tight mb-4 max-w-md">
                    Welcome back to Crest Forwarder.
                </h1>
                <p class="text-white/70 leading-relaxed max-w-sm mb-10">
                    Log in to manage your shipments, request quotes, and track your cargo — all in one place.
                </p>

                <div class="flex flex-col gap-4 items-start text-left">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-crest-accent" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/>
                            </svg>
                        </div>
                        <p class="text-white/80 text-sm">21+ years moving cargo across the Philippines</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-crest-accent" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/>
                            </svg>
                        </div>
                        <p class="text-white/80 text-sm">Branches in Cebu, Manila, Davao &amp; CDO</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-crest-accent" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/>
                            </svg>
                        </div>
                        <p class="text-white/80 text-sm">Real-time shipment tracking</p>
                    </div>
                </div>
            </div>

            <p class="relative text-white/40 text-xs">
                &copy; {{ date('Y') }} Crest Forwarder Inc. All rights reserved.
            </p>
        </div>

        {{-- RIGHT: Form panel --}}
        <div class="flex items-center justify-center p-6 sm:p-12 bg-white">
            <div class="w-full max-w-sm">

                {{-- Mobile-only logo --}}
                <a href="{{ url('/') }}" class="lg:hidden flex items-center justify-center gap-2 mb-10 w-fit mx-auto">
                    <img src="{{ asset('images/logo.png') }}" alt="Crest Forwarder Inc." class="h-12">
                </a>

                <h2 class="text-2xl font-bold text-gray-900 mb-8">Log in to your account</h2>

                {{-- Session status (e.g. password reset confirmation) --}}
                @if (session('status'))
                    <div class="mb-6 text-sm font-medium text-crest-primary bg-crest-tint rounded-lg px-4 py-3">
                        {{ session('status') }}
                    </div>
                @endif

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
                                <linearGradient id="igGradLogin" x1="0%" y1="100%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="#FFDC80"/>
                                    <stop offset="25%" stop-color="#FCAF45"/>
                                    <stop offset="50%" stop-color="#E1306C"/>
                                    <stop offset="75%" stop-color="#C13584"/>
                                    <stop offset="100%" stop-color="#833AB4"/>
                                </linearGradient>
                            </defs>
                            <rect x="2" y="2" width="20" height="20" rx="6" stroke="url(#igGradLogin)" stroke-width="2"/>
                            <circle cx="12" cy="12" r="4.5" stroke="url(#igGradLogin)" stroke-width="2"/>
                            <circle cx="17.2" cy="6.8" r="1.1" fill="url(#igGradLogin)"/>
                        </svg>
                        Instagram
                    </a>
                </div>

                <div class="flex items-center gap-3 mb-6">
                    <div class="flex-1 h-px bg-gray-200"></div>
                    <span class="text-xs text-gray-400 font-medium">or continue with email</span>
                    <div class="flex-1 h-px bg-gray-200"></div>
                </div>

                {{-- General auth failure (e.g. wrong credentials) --}}
                @if ($errors->any() && !$errors->has('email') && !$errors->has('password'))
                    <div class="mb-6 flex items-start gap-2.5 text-sm text-red-700 bg-red-50 border border-red-200 rounded-lg px-4 py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0Z"/>
                        </svg>
                        <span>{{ $errors->first() }}</span>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" novalidate
                      class="flex flex-col gap-5"
                      x-data="{
                          email: '{{ old('email') }}',
                          emailTouched: {{ $errors->has('email') ? 'true' : 'false' }},
                          get emailValid() { return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.email) },
                          password: '',
                          hasServerError: {{ $errors->any() ? 'true' : 'false' }}
                      }">
                    @csrf

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

                    {{-- Password --}}
                    <div>
                        <div class="flex items-center justify-between mb-1.5">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-sm text-crest-primary hover:underline">Forgot password?</a>
                            @endif
                        </div>
                        <input id="password" type="password" name="password" x-model="password" required autocomplete="current-password"
                               :class="{{ $errors->has('password') ? 'true' : 'false' }} ? 'border-red-300 focus:ring-red-400' : 'border-gray-300 focus:ring-crest-accent'"
                               class="w-full px-4 py-3 rounded-lg border text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-shadow duration-200"
                               placeholder="••••••••">
                        @error('password')
                            <p class="mt-1.5 flex items-center gap-1.5 text-sm text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18Z"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Remember me --}}
                    <label class="flex items-center gap-2.5 cursor-pointer select-none">
                        <input type="checkbox" name="remember"
                               class="w-4 h-4 rounded border-gray-300 text-crest-primary focus:ring-crest-accent focus:ring-offset-0">
                        <span class="text-sm text-gray-600">Keep me logged in</span>
                    </label>

                    <button type="submit"
                            :disabled="email.length > 0 && emailTouched && !emailValid"
                            class="w-full bg-crest-primary text-white font-semibold py-3 rounded-lg shadow-sm hover:bg-crest-primary-dark hover:shadow-md active:shadow-sm disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:bg-crest-primary disabled:hover:shadow-sm transition-all duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-crest-primary focus-visible:ring-offset-2">
                        Log in
                    </button>
                </form>

                <p class="text-center text-sm text-gray-500 mt-8">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-crest-primary font-semibold hover:underline">Sign up</a>
                </p>

            </div>
        </div>

    </div>

</body>
</html>