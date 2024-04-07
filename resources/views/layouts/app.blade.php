<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900 h-full">
    <livewire:layout.navigation />

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>

        @if(session('msg'))
            <div class="m-3 w-screen h-8 bg-blue-950 text-center text-white">
                <span class="mt-2">{{ session('msg') }}</span>
            </div>
        @endif

        {{ $slot }}
    </main>
    <footer class="text-center absolute h-10  w-full dark:bg-gray-800 dark:border-gray-700">
        <p class="dark:text-white mt-3">Keep Cloud &copy; 2024 - By Rafael rodrigo Doimo</p>
    </footer>
</div>

</body>
</html>
