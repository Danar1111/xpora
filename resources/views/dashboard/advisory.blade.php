<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('DATA UMKM') }}
        </h2>
    </x-slot> --}}

    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">

            <div class="flex gap-8  items-center justify-end">
                {{-- DATA FILTER --}}
                {{-- <div class="flex gap-8">
                    <div class="relative">
                        <details class="group [&_summary::-webkit-details-marker]:hidden">
                            <summary
                                class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
                                <span class="text-sm font-medium"> Kategori </span>

                                <span class="transition group-open:-rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </summary>

                            <div
                                class="z-50 group-open:absolute group-open:start-0 group-open:top-auto group-open:mt-2">
                                <div class="w-96 rounded border border-gray-200 bg-white">
                                    <header class="flex items-center justify-between p-4">
                                        <span class="text-sm text-gray-700"> 0 Selected </span>
                                        <button type="button"
                                            class="text-sm text-gray-900 underline underline-offset-4">
                                            Reset
                                        </button>
                                    </header>

                                    <ul class="space-y-1 border-t border-gray-200 p-4">
                                        <li>
                                            <label for="FilterInStock"
                                                class="inline-flex items-center gap-2">
                                                <input type="checkbox" id="FilterInStock"
                                                    class="h-5 w-5 rounded border-gray-300" />

                                                <span class="text-sm font-medium text-gray-700"> Food &
                                                    Beverage</span>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="FilterPreOrder"
                                                class="inline-flex items-center gap-2">
                                                <input type="checkbox" id="FilterPreOrder"
                                                    class="h-5 w-5 rounded border-gray-300" />

                                                <span class="text-sm font-medium text-gray-700">
                                                    Automotive</span>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="FilterOutOfStock"
                                                class="inline-flex items-center gap-2">
                                                <input type="checkbox" id="FilterOutOfStock"
                                                    class="h-5 w-5 rounded border-gray-300" />

                                                <span class="text-sm font-medium text-gray-700">
                                                    Electronic</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </details>
                    </div>

                    <div class="relative">
                        <details class="group [&_summary::-webkit-details-marker]:hidden">
                            <summary
                                class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
                                <span class="text-sm font-medium"> Tanggal </span>

                                <span class="transition group-open:-rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </summary>

                            <div
                                class="z-50 group-open:absolute group-open:start-0 group-open:top-auto group-open:mt-2">
                                <div class="w-96 rounded border border-gray-200 bg-white">
                                    <header class="flex items-center justify-between p-4">
                                        <span class="text-sm text-gray-700"> Tentukan range waktu</span>

                                        <button type="button"
                                            class="text-sm text-gray-900 underline underline-offset-4">
                                            Reset
                                        </button>
                                    </header>

                                    <div class="border-t border-gray-200 p-4">
                                        <div class="flex justify-between gap-4">
                                            <label for="FilterPriceFrom" class="flex items-center gap-2">
                                                <span class="text-sm text-gray-600">Dari</span>

                                                <input type="number" id="FilterPriceFrom"
                                                    placeholder="From"
                                                    class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                                            </label>

                                            <label for="FilterPriceTo" class="flex items-center gap-2">
                                                <span class="text-sm text-gray-600">Ke</span>

                                                <input type="number" id="FilterPriceTo" placeholder="To"
                                                    class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </details>
                    </div>
                </div> --}}
                <div class="flex w-[25rem] bg-white rounded-md p-3 mb-5" x-data="{ search: '' }">
                    <input type="search"
                        class="w-full border-none px-4 py-1 focus:ring-transparent text-gray-900 focus:outline-none"
                        placeholder="Cari nama UMKM, Pemilik, atau Kategori" x-model="search" />
                    <button class="m rounded px-4 py-2 text-gray-100"
                        :class="(search) ? 'bg-purple-500' : 'bg-orange-600 cursor-not-allowed'"
                        :disabled="!search">Cari
                    </button>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-md">
                <div class="p-6 text-gray-900 rounded-md dark:text-gray-100">

                    {{-- <form-umkm/> --}}

                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                            <div class="py-2 inline-block min-w-full">
                                <div class="overflow-hidden">
                                    <table class="min-w-full rouned-lg">
                                        <thead class="border-b text-xs font-semibold text-neutral-400">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-4 text-left">
                                                    KODE ADVISORY
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-4 text-left">
                                                    TANGGAL REGISTER
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-4 text-left">
                                                    NAMA PIC
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-4 text-left">
                                                    NAMA PELATIHAN
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-4 text-left">
                                                    PROVINSI
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-4 text-left">
                                                    KOTA
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-4 text-left">
                                                    TIPE PELATIHAN
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-4 text-left">
                                                    ACTION
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($advisory as $u)
                                                <tr class="odd:bg-orange-50 odd:dark:bg-gray-900 even:bg-wite even:dark:bg-gray-800 border-b dark:border-gray-700">
                                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $u->id }}
                                                    </th>
                                                    <td 
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap dark:text-white" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px;">
                                                        {{ $u->created_at }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap dark:text-white" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px;">
                                                        {{ $u->pic_name }}
                                                    </td>
                                                    <td 
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap dark:text-white" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px;">
                                                        {{ $u->training_name }}
                                                    </td>
                                                    <td 
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap dark:text-white" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px;">
                                                        {{ $u->province }}
                                                    </td>
                                                    <td 
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap dark:text-white" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px;">
                                                        {{ $u->city }}
                                                    </td>
                                                    <td 
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap dark:text-white" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px;">
                                                        {{ $u->training_type }}
                                                    </td>
                                                    <td class="flex gap-4 p-4">
                                                        <a href="/dashboard/advisory/{{ $u->id }}" type="button"
                                                            class="rounded-md p-2 px-2 bg-orange-100 hover:bg-orange-200">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor"
                                                                class="w-5 h-5 stroke-black">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                            </svg>
                                                        </a>
                                                        <a href="/umkm/export/cataloguepdf/{{ $u->id }}"
                                                            type="button"
                                                            class="rounded-md p-2 px-2 bg-orange-100 hover:bg-orange-200">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor"
                                                                class="w-5 h-5 stroke-black">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                                            </svg>

                                                        </a>
                                                        <form action="/dashboard/advisory/{{ $u->id }}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit"
                                                                class="rounded-md p-2 px-2 bg-red-600 text-white hover:bg-red-900"
                                                                value="Delete">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-5 h-5 stroke-white">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                                </svg>
                                                            </button>
                                                        </form>
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

            <div class="flex justify-between mt-5">
                <x-abutton url="{{ url('dashboard/advisory/daftar') }}" text="tambahkan"></x-abutton>

                <div class="flex gap-4">
                    <x-abutton url="{{ url('dashboard/advisory/import') }}" text="import data"></x-abutton>
                    <x-abutton url="{{ url('dashboard/advisory/export/excel') }}" text="EXPORT TO EXCEL"></x-abutton>
                    <x-abutton url="{{ url('dashboard/advisory/export/pdf') }}" text="EXPORT TO PDF"></x-abutton>
                </div>
            </div>
        </div>
    </div>


    <div class="w-f"></div>
</x-app-layout>
