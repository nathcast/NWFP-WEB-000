<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100">

        @include('layouts.navigation-menu')
        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
            <!-- Page Content -->
            <main>
                <div class="py-12  bg-bg02muted bg-no-repeat bg-center bg-cover backdrop-opacity-10  ">
                    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                            {{ $slot }}
                        </div>
                    </div>

                </div>
            </main>


        <!-- Page Footer-->
    <footer>
        @include('layouts.footer')
    </footer>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
