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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Scripts -->
    {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-nowrap justify-center mt-28">
            <a href="/">
                <img class="w-48" src="/img/core/logo/xpora-logo-2x.png" alt="">
            </a>
        </div>
        <div class="flex flex-wrap justify-center">
            <p class="w-3/4 pt-6 mb-6" style="text-align: justify">
                Selamat datang di laman Xpora untuk nasabah BNI berorientasi ekspor. Kami mohon bantuan Saudara/i untuk
                melengkapi informasi nasabah berorientasi ekspor sehingga Nasabah Saudara/i bisa mendapatkan benefit
                sebagai berikut.
                <img class="w-full mt-6" src="/img/umkm/greetings/text-greetings-t&c.png"
                    alt="">
            <p class="w-2/3 text-center">
                Untuk memudahkan saudara/i dalam proses pengisian form,
                </br>terdapat <span class="font-bold">5 katagori</span> isian pada form yaitu :
            </p>
            <img class="w-3/4 pt-6" src="/img/umkm/greetings/text-greetings-steps.png" alt="">
            <div class="mb-6 w-3/4 py-12 px-16 rounded-md mt-6" style="background-color: #E9E9E9">

                <p class="text-justify" style="text-align: justify">
                    <span class="absolute -ml-10 mt-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"
                            fill="none">
                            <path d="M10.5 7.375H10.5108" stroke="#076281" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M9.45825 10.5H10.4999V14.6667H11.5416" stroke="#076281" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M10.5 1.125C18 1.125 19.875 3 19.875 10.5C19.875 18 18 19.875 10.5 19.875C3 19.875 1.125 18 1.125 10.5C1.125 3 3 1.125 10.5 1.125Z"
                                stroke="#076281" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    Dalam proses pengisian form terdapat beberapa file yang dibutuhkan seperti
                    <span class="font-bold">logo perusahaan (jpg), 3 foto produk unggulan (jpg), dan company profile
                        (pdf).</span>
                    Pastikan sebelum melakukan pengisian saudara/i telah mempersiapkan file tersebut di atas.
                </p>
                {{--                <div class="flex items-center mt-5"> --}}
                {{--                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-orient-800 bg-gray-100 border-gray-300 rounded focus:ring-orange-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> --}}
                {{--                    <label for="default-checkbox" class= ms-2 font-bold text-gray-900 dark:text-gray-300">Apakah Anda telah menyiapkan data yang diperlukan untuk mengisinya?</label> --}}
                {{--                </div> --}}
            </div>
            <div class="w-2/3 flex justify-center gap-2">
                <a href="/umkm/daftar" style="padding: 15px 30px; font-size: 14px;"
                    class="hover:-translate-y-1 transition duration-700 ease-in-out hover:shadow-2xl hover:bg-orient-800-amber-600 w-3/5 py-2 bg-orient-800 text-white font-bold rounded-md text-center">Daftarkan
                    UMKM Kelolaan Saya!</a>
                <a href="/dashboard" style="padding: 15px 30px; font-size: 14px;"
                    class="hover:-translate-y-1 transition duration-700 ease-in-out hover:shadow-2xl hover:bg-orange-600-amber-600 w-3/5 py-2 bg-orange-600 text-white font-bold rounded-md text-center">Dashboard</a>
            </div>
            <div class="flex items-center text-sm text-neutral-600 justify-center mt-10">

                <div class="">
                    <p class="ml-2 w-full">Jika terdapat pertanyaan lebih lanjut, silakan sampaikan melalui
                        email kami. <a href="mailto:xpora@bni.co.id"><span class="text-orient-800 ml-2">xpora@bni.co.id</span></a></p>

                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center">
            {{--                <img class="w-20" src="/img/core/logo/bni-logo.png" alt=""> --}}
            <div class="text-neutral-500 text-xs w-full text-center mt-10 mb-4">2024 © PT. Bank Negara Indonesia
                (Persero), Tbk. All Rights Reserved</a></div>

        </div>

    </div>

</body>

</html>
