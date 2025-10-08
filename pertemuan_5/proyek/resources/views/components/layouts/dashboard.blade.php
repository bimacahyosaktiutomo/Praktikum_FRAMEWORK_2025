@props(['title' => 'Dashboard'])

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
    <link rel="shortcut icon" href="Website B1 2127.png" type="image/x-icon">
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    
    @endif
</head>
<body class="flex min-h-screen items-center gap-2 bg-slate-200">

    <div class="hidden md:fixed md:top-0 md:left-0 md:min-h-screen md:flex md:items-center">
        <x-dashboard.sidebar />
    </div>

    <div class="fixed bottom-0 left-0 w-full md:hidden bg-white shadow-inner">
        <x-dashboard.sidebar />
    </div>

    <div class=" flex flex-col min-h-screen gap-2 w-full items-center">
        <!-- NAVBAR -->
        <x-navbar />
    
    
        <!-- MAIN -->
        <main class="flex-grow flex flex-col">
            {{ $slot }}
        </main>
    </div>

</body>
</html>
