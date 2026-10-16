<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Dashboard | Crest Forwarder Inc.' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>[x-cloak]{display:none !important}</style>
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900">

    <x-sidebar />

    {{-- MAIN CONTENT — offset by the sidebar's width on desktop --}}
    <div class="lg:pl-64 flex flex-col min-h-screen">

        {{-- Top bar (desktop) --}}
        <header class="hidden lg:flex items-center justify-between px-8 py-5 bg-white border-b border-gray-200">
            <div>
                <h1 class="text-lg font-bold text-gray-900">Good day, David</h1>
                <p class="text-sm text-gray-500">Here's what's moving on your account today.</p>
            </div>
            <div class="flex items-center gap-4">
                <button class="relative p-2 rounded-full hover:bg-gray-100 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.4-1.4A2 2 0 0 1 18 14.2V11a6 6 0 1 0-12 0v3.2a2 2 0 0 1-.6 1.4L4 17h5m6 0v1a3 3 0 1 1-6 0v-1m6 0H9"/>
                    </svg>
                    <span class="absolute top-1.5 right-1.5 h-2 w-2 rounded-full bg-crest-accent"></span>
                </button>
                <div class="flex items-center gap-3 pl-4 border-l border-gray-200">
                    <div class="h-9 w-9 rounded-full bg-crest-tint text-crest-primary font-semibold flex items-center justify-center text-sm">
                        DV
                    </div>
                    <div class="leading-tight">
                        <p class="text-sm font-semibold text-gray-900">David Sailas Villondo</p>
                        <p class="text-xs text-gray-500">Cebu Client</p>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1 px-4 sm:px-6 lg:px-8 py-6 lg:py-8 flex flex-col gap-6">
            {{ $slot }}
        </main>
    </div>

</body>
</html>
