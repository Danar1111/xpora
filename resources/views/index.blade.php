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
        {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-100 selection:bg-red-500 selection:text-white">
            <div class="flex justify-between items-center w-full sm:fixed sm:bottom-0 p-6 z-10">
                <img class="w-20 h-full" src="/img/core/logo/bumn-logo.png" alt="">
                <div class="text-neutral-500 text-xs">© 2024 BNI. Developement by <a class="font-semibold" href="https://beyondthefusion.com">Beyond The Fusion</a></div>
                {{-- @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @endauth
                    </div>
                @endif --}}
            </div>

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="grid justify-items-center items-stretch">
                    {{-- <div class="text-4xl font-bold">SELAMAT DATANG</div> --}}
                    <div class="flex gap-5 items-center">
                        {{-- <img class="w-20" src="/img/core/logo/bni-logo.png" alt="bni"> --}}
                        <img class="w-full" src="/img/core/logo/xpora-logo.png" alt="xpora">

                    </div>
                    {{-- <a href="/welcome/greetings" class="hover:-translate-y-1 transition duration-700 ease-in-out mt-4 bg-orange-600 text-white p-2 px-6 rounded-full hover:shadow-2xl hover:shadow-amber-600 font-bold">Daftarkan UMKM Saya!</a> --}}

                </div>


            </div>
        </div>

    </body>
</html>
