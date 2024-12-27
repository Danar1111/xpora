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
    <style>

    </style>
</head>

<body class="font-sans antialiased bg-gray-200">
    <form method="POST" action="{{ route('umkm.thankyou') }}">

        <div class="max-w-full flex justify-center items-center">
            <div class="flex justify-between absolute gap-5">
                <div class="flex justify-start items-center">
                    {{--            <a href="/" class="flex text-white p-2 rounded-full bg-orange-600 transition duration-150 ease-in-out hover:-translate-y-1 hover:scale-110 "> --}}
                    {{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" --}}
                    {{--                     stroke="currentColor" class="w-6 h-6 stroke-white"> --}}
                    {{--                    <path stroke-linecap="round" stroke-linejoin="round" --}}
                    {{--                          d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18"/> --}}
                    {{--                </svg> --}}
                    {{--            </a> --}}
                    {{-- <div class="text-white md:text-6xl text-3xl font-bold z-10">KONFIRMASI INFORMASI UMKM</div> --}}
                    <div class="text-2xl text-white">{{ $formData['badan_usaha'] }}.</div>
                    <div class="text-8xl text-white">{{ $formData['nama_perusahaan'] }}.</div>
                </div>
            </div>
            <img src="/img/umkm/core/cover-profil.jpg" class="w-full  -z-10" alt="">

        </div>
        @csrf
        <div class="min-h-screen  dark:bg-gray-900">

            {{-- <div class="flex justify-center items-center">
                <div class="absolute z-10 flex-nowrap justify-center">
                    <div class="text-2xl text-white">{{ $formData['badan_usaha'] }}.</div>
                    <div class="text-8xl text-white">{{ $formData['nama_perusahaan'] }}.</div>

                </div>
                <img src="/img/umkm/core/cover-profil.jpg" class="w-100 z-0" alt="">
            </div> --}}

            <div>
                <div class="max-w-7xl mx-auto py-12">
                    <div class="text-4xl p-4 text-neutral-300">DATA PERSONAL</div>
                    <div class="max-w-7x1 grid grid-cols-4 mx-auto gap-4 ">

                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Nama Pemilik</div>
                            <div class="text-2xl">{{ $formData['nama_personal'] }}</div>
                        </div>
                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Jenis Kelamin</div>
                            <div class="text-2xl">{{ $formData['identitas_personal'] }}</div>
                        </div>
                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">No. Handphone</div>
                            <div class="text-2xl">{{ $formData['no_telp_personal'] }}</div>
                        </div>

                    </div>
                </div>
                <div class="max-w-7xl mx-auto">
                    <div class="max-w-7x1 grid grid-cols-4 mx-auto gap-4 ">

                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Alamat</div>
                            <div class="text-2xl">{{ $formData['alamat_personal'] }}</div>
                        </div>
                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Keluaragan</div>
                            <div class="text-2xl">{{ $formData['kelurahan_personal'] }}</div>
                        </div>
                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Kecamatan</div>
                            <div class="text-2xl">{{ $formData['kecamatan_personal'] }}</div>
                        </div>
                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Kota</div>
                            <div class="text-2xl">{{ $formData['kota_personal'] }}</div>
                        </div>
                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Provinsi</div>
                            <div class="text-2xl">{{ $formData['provinsi_personal'] }}</div>
                        </div>
                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Kode Pos</div>
                            <div class="text-2xl">{{ $formData['kode_pos_personal'] }}</div>
                        </div>

                    </div>
                </div>
            </div>


            <div>
                <div class="max-w-7xl mx-auto py-12">
                    <div class="text-4xl p-4 text-neutral-300">DATA PERUSAHAAN</div>
                    <div class="max-w-7x1 grid grid-cols-4 mx-auto gap-4 ">

                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Bentuk Badan</div>
                            <div class="text-2xl">{{ $formData['badan_usaha'] }}</div>
                        </div>
                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Nama Perusahaan</div>
                            <div class="text-2xl">{{ $formData['nama_perusahaan'] }}</div>
                        </div>
                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Nomor Legalitas</div>
                            <div class="text-2xl">{{ $formData['nomor_badan_usaha'] }}</div>
                        </div>
                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Nomor NPWP Perusahaan</div>
                            <div class="text-2xl">{{ $formData['nomor_npwp_usaha'] }}</div>
                        </div>

                    </div>
                </div>

                <div class="max-w-7xl mx-auto">
                    <div class="max-w-7x1 grid grid-cols-4 mx-auto gap-4 ">

                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Company Profil</div>
                            <a href="#" type="" class="text-2xl">DOWNLOAD FILE</a>
                        </div>
                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Catalog Perusahaan</div>
                            <a href="#" type="" class="text-2xl">DOWNLOAD FILE</a>
                        </div>

                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Kategori / Sektor Usaha</div>
                            <div class="text-2xl">{{ $formData['kategori_perusahaan'] }}</div>
                        </div>
                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Jenis Usaha Pengolahan</div>
                            <div class="text-2xl">1</div>
                        </div>
                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Jenis Usaha Perdagangan</div>
                            <div class="text-2xl">
                                @isset($formData['perdagangan_perusahaan'])
                                    {{ $formData['perdagangan_perusahaan'] }}
                                @else
                                    <!-- Handle the case when the key is not set -->
                                    Tidak
                                @endisset
                            </div>
                        </div>


                    </div>
                </div>
                <div class="max-w-7xl mx-auto">
                    <div class="max-w-7x1 grid grid-cols-4 mx-auto gap-4 ">

                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">NO. Telepon Perusahaan</div>
                            <div class="text-2xl">{{ $formData['no_telp_perusahaan'] }}</div>
                        </div>
                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Website</div>
                            <div class="text-2xl">{{ $formData['website_perusahaan'] }}</div>
                        </div>
                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">Instagram Perusahaan</div>
                            <div class="text-2xl">{{ $formData['instagram_perusahaan'] }}</div>
                        </div>
                        <div
                            class="grid p-4 hover:bg-white hover:rounded-lg hover:border-2 hover:border-black duration-500 ease-in-out transition-all hover:-translate-y-1">
                            <div class="text-base">E-Mail Perusahaan</div>
                            <div class="text-2xl">{{ $formData['email_perusahaan'] }}</div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div
            class="flex justify-between items-center rounded-md p-6 dark:bg-slate-900 fixed bottom-0 right-0 left-0 bg-white border-t-2 border-cyan-900">

            <div class="flex w-8/12 items-start ">
                <label class="inline-flex items-start mr-3 ">
                    <input name="pengolahan_perusahaan" type="checkbox" class="form-checkbox h-5 w-5 text-orange-600"
                        unchecked value="1" />
                </label>
                <p class="text-black">
                    Dengan ini saya menyatakan bahwa data yang diberikan benar berdasarkan kondisi usaha Nasabah yang
                    sesungguhnya dan memberikan hak kepada BNI untuk dapat menggunakan data tersebut dalam rangka
                    perluasan akses pasar ekspor.

                </p>
            </div>
            <div class="flex justify-center gap-5">
                <a href="{{ route('umkm.form') }}"
                    class="hover:-translate-y-1 transition duration-150 ease-in-out bg-cyan-900 text-white px-6 uppercase py-2 rounded-lg hover:shadow-2xl hover:shadow-neutral-900 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50">
                    EDIT KEMBALI
                </a>
                <button type="submit"
                    class="text-left hover:-translate-y-1 transition duration-150 ease-in-out bg-orange-500 uppercase text-white px-8 py-2 rounded-lg hover:shadow-2xl hover:shadow-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50">
                    SUBMIT
                </button>
            </div>
        </div>
    </form>

</body>

</html>
