<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    <div class="fixed w-full h-full cursor-not-allowed bg-black bg-opacity-60 z-20 flex justify-center items-center text-7xl text-white font-bold">COMING SOON</div>

    <div class="max-w-full py-6 px-8 flex gap-5">

        <div class="flex-auto w-64">
            <div>
                <img src="\img\core\dashboard\maps.png" alt="">
                <div class="bg-white shadow-xl p-8 grid justify-center text-center absolute -mt-36 rounded-xl">
                    <div class="text-4xl font-semibold text-orange-600 z-10">150</div>
                    <div class="text-xs text-black">UMKM TERDAFTAR</div>
                </div>
            </div>

            <div class="flex justify-between mb-3">
                <div class="font-bold text-lg text-neutral-600">UMKM TERBARU</div>
                <x-abutton url="#" text="lihat lengkap"></x-abutton>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-md mb-6">
                <div class="p-6 text-gray-900 rounded-md dark:text-gray-100">

                    {{-- <form-umkm/> --}}

                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                            <div class="py-2 inline-block min-w-full">
                                <div class="overflow-hidden">
                                    <table class="min-w-full rouned-lg">
                                        <thead class="border-b text-xs font-semibold text-neutral-400 text-center">
                                            <tr>
                                                <th scope="col" class="px-6 py-4">
                                                    KODE UMKM
                                                </th>
                                                <th scope="col" class="px-6 py-4">
                                                    TANGGAL REGISTER
                                                </th>
                                                <th scope="col" class="px-6 py-4">
                                                    NAMA PERUSAHAAN
                                                </th>
                                                <th scope="col" class="px-6 py-4">
                                                    KATEGORI
                                                </th>
                                                <th scope="col" class="px-6 py-4">
                                                    NAMA PIC
                                                </th>
                                                <th scope="col" class="px-6 py-4">
                                                    ACTION
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($umkm as $u)
                                                <tr
                                                    class="odd:bg-orange-50 odd:dark:bg-gray-900 even:bg-wite even:dark:bg-gray-800 border-b dark:border-gray-700">
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $u->kode_umkm }}
                                                    </th>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $u->created_at }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $u->nama_perusahaan }}
                                                    </td>

                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $u->nama_personal }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        <a
                                                            href="tel:{{ $u->no_telp_personal }}">{{ $u->no_telp_personal }}</a>
                                                    </td>
                                                    <td class="flex gap-4 p-4 justify-center">
                                                        <a href="/umkm/profil/{{ $u->id }}" type="button"
                                                            class="rounded-md p-2 px-2 bg-orange-100 hover:bg-orange-200">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-5 h-5 stroke-black">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                            </svg>
                                                        </a>
                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="flex gap-3 mb-3">
                <div class="flex-auto w-72">
                    <div class="bg-white rounded-md p-7 w-full h-96 grid place-content-between">
                        <div class="text-sm font-semibold text-black">BUSINESS IMPACT</div>
                        <div class="">
                            <img src="\img\core\dashboard\dmmy-01.png" class="mb-3" alt="">
                            <x-abutton url="" text="LIHAT LENGKAP"></x-abutton>
                        </div>
                    </div>
                </div>
                <div class="flex-none w-4/12">
                    <div class="bg-white rounded-md p-7 w-full h-96 grid place-content-between">
                        <div class="text-sm font-semibold text-black">BUDGET</div>
                        <div class="grid w-full justify-center">
                            <img src="\img\core\dashboard\dmmy-02.png" class=" h-56 mb-3" alt="">
                            <x-abutton url="" text="LIHAT LENGKAP"></x-abutton>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex gap-3 mb-3">
                <div class="flex-none w-2/12 gap-3 grid">
                    <div class="bg-white rounded-md p-5 w-full grid justify-center">
                        <div class="text-sm font-semibold text-neutral-500">ADVISORY</div>
                        <div class="text-7xl font-bold text-black">19</div>
                    </div>
                    <div class="bg-white rounded-md p-5 w-full grid justify-center">
                        <div class="text-sm font-semibold text-neutral-500">BIZMATH</div>
                        <div class="text-7xl font-bold text-black">6</div>
                    </div>
                </div>
                <div class="flex-auto">
                    <div class="bg-white rounded-md p-7 w-full h-96 grid place-content-between">
                        <div class="text-sm font-semibold text-black">PROGRESS ADVISORY</div>
                        <div class="">
                            <img src="\img\core\dashboard\dmmy-04.png" class="mb-3" alt="">
                            <x-abutton url="" text="LIHAT LENGKAP"></x-abutton>
                        </div>
                    </div>
                </div>
                <div class="flex-auto">
                    <div class="bg-white rounded-md p-7 w-full h-96 grid place-content-between">
                        <div class="text-sm font-semibold text-black">PRODUK EXPORT INDONESIA 2024</div>
                        <div class="">
                            <img src="\img\core\dashboard\dmmy-03.png" class="mb-3" alt="">
                            <x-abutton url="" text="LIHAT LENGKAP"></x-abutton>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex gap-3 mb-3">
                <div class="flex-none w-2/12 gap-3 grid">
                    <div class="bg-white rounded-md p-5 w-full grid justify-center">
                        <div class="text-sm font-semibold text-neutral-500">EVENT</div>
                        <div class="text-7xl font-bold text-black">10</div>
                    </div>
                    <div class="bg-white rounded-md p-5 w-full grid justify-center">
                        <div class="text-sm font-semibold text-neutral-500">RELEASE</div>
                        <div class="text-7xl font-bold text-black">5</div>
                    </div>
                </div>
                <div class="flex-auto">
                    <div class="bg-white rounded-md p-7 w-full h-96 grid place-content-between">
                        <div class="text-sm font-semibold text-black">PROGRESS BUSINESS MATCH</div>
                        <div class="">
                            <img src="\img\core\dashboard\dmmy-04.png" class="mb-3" alt="">
                            <x-abutton url="" text="LIHAT LENGKAP"></x-abutton>
                        </div>
                    </div>
                </div>
                <div class="flex-auto">
                    <div class="bg-white rounded-md p-7 w-full h-96 grid place-content-between">
                        <div class="text-sm font-semibold text-black">10 NEGARA TUKUTAN UTAMA EXPORT INDONESIA <br> DI
                            TIMUR TENGAH DAN AFRIKA</div>
                        <div class="">
                            <img src="\img\core\dashboard\dmmy-03.png" class="mb-3" alt="">
                            <x-abutton url="" text="LIHAT LENGKAP"></x-abutton>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex gap-3 mb-3">
                <div class="flex-none w-2/12 gap-3 grid">
                    <div class="bg-white rounded-md p-5 w-full grid justify-center">
                        <div class="text-sm font-semibold text-neutral-500">EVENT</div>
                        <div class="text-7xl font-bold text-black">10</div>
                    </div>

                </div>
                <div class="flex-auto">
                    <div
                        class="bg-gradient-to-br from-cyan-800 via-violet-600 to-amber-600 rounded-md p-7 w-full h-full grid justify-center items-center">
                        <div class="text-6xl font-semibold text-white">STILL PROGRESS!!</div>
                    </div>
                </div>

            </div>

        </div>


        <div class="flex-none w-4/12">
            <div class="sticky top-20">
                <div
                    class="mb-3 bg-white rounded-md p-12 bg-gradient-to-br from-cyan-800 via-violet-600 to-amber-600 flex justify-center items-center text-6xl text-white font-bold">
                    UP COMING</div>

                <div class="bg-white rounded-md p-12 mb-3">

                    <ol class="relative border-s border-gray-200 dark:border-gray-700">

                        <li class="mb-10 ms-4">
                            <div
                                class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">FEBRUARY 2024</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Xpora Project Started</h3>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </li>
                        <li class="ms-4">
                            <div
                                class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">MARCH 2024</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">XPORA DASHBOARD RELEASE</h3>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </li>
                    </ol>


                </div>
            </div>
        </div>

    </div>


</x-app-layout>
