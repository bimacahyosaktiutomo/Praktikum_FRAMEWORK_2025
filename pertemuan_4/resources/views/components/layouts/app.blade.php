<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    
    @endif
</head>
<body class="flex flex-col min-h-screen items-center gap-2 bg-indigo-100">

    <!-- NAVBAR -->
    <x-navbar />

    <!-- MAIN -->
    <main class="flex-grow flex flex-col items-center w-full">
        {{ $slot }}
    </main>

    <!-- FOOTER -->
    <x-footer />

</body>
</html>
