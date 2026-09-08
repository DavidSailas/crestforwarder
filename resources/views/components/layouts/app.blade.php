<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Crest Forwarder Inc.' }}</title>

    {{-- Compiled Tailwind CSS from Breeze --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 antialiased">

    <x-navbar />

    <main>
        {{ $slot }}
    </main>

    <div class="max-w-7xl mx-auto px-8">
        <x-footer />
    </div>

    <x-chatbot />

</body>
</html>
