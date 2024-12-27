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

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="flex flex-nowrap justify-center">
                    <a href="/">
                        <img class="w-48" src="/img/core/logo/xpora-logo-2x.png" alt="">
                    </a>
                </div>
                <div class="flex flex-wrap justify-center">
                    <div class="w-3/4 py-10 text-center text-2xl">
                        Selamat! Proses pengisian formulir anda telah berhasil.
                    </div>
                    <div class="grid justify-items-center ">
                        <p class="w-full py-10 text-center">
                            Anda dapat mengunduh e-catalog yang tersedia dalm versi Bahasa Indonesia
                            <br> dan Inggris. Informasi yang tertera di e-catalog tidak ditampilkan seluruhnya,
                            <br> hanya informasi basic yang dibutuhkan oleh buyer.
                        </p>
                        <a href="/" class="w-48 flex p-2 justify-center rounded-md bg-neutral-900 text-white font-semibold uppercase ">Download
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox=\"0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h-.75A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-7.5a2.25 2.25 0 0 0-2.25-2.25h-.75m-6 3.75 3 3m0 0 3-3m-3 3V1.5m6 9h.75a2.25 2.25 0 0 1 2.25 2.25v7.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25v-.75" />
                            </svg>

                        </a>
                    </div>
                    <div class="text-4xl font-medium text-center text-black w-full mt-20 mb-2">Terima Kasih.</div>
                </div>
                <div class="flex flex-wrap justify-center">
{{--                    <img class="w-20" src="/img/core/logo/bni-logo.png" alt="BNI">--}}
                    <div class="text-neutral-500 text-xs w-full text-center mt-10 mb-4 fixed bottom-0">© 2024 BNI. Developement by <a class="font-semibold" href="https://beyondthefusion.com">Beyond The Fusion</a></div
                </div>

            </div>

        </div>

    </body>
</html>
