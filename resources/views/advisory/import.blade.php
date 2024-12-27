<x-app-layout title="Import Data Advisory - Xpora">

    <div class="max-w-7xl mx-auto py-12">

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <div
            class="relative min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-white bg-no-repeat bg-cover rounded-xl">
            <div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10 flex flex-wrap justify-center">
                <div class="text-center">
                    <h2 class="mt-5 text-3xl font-bold text-gray-900">
                        Import Bulk Data
                    </h2>
                    <p class="mt-2 text-sm text-gray-400 bg-neutral-100 rounded-md mb-4 p-2">Download template file sheet impor
                        <span class="font-bold text-orient-800"><a href="/assets/AdvisoryImportTemplate.xlsx" rel="noopener noreferrer">XLSX</a></span>
                    </p>
                </div>
                <form action="{{ route('advisory.import-proses') }}" method="POST" enctype="multipart/form-data"
                    class="form">
                    @csrf
                    <div class="grid grid-cols-1 space-y-2">
                        <div class="flex items-center justify-center w-full">
                            <label
                                class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center">
                                <div class="h-full w-full text-center flex flex-col justify-center items-center  ">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10 text-orange-400 group-hover:text-orange-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>
                                    <div class="flex flex-auto max-h-48 w-2/5 mx-auto -mt-10">
                                    </div>
                                    <p class="pointer-none text-gray-500 "><span class="text-sm">
                                            "Pilih file sheet yang ingin diimpor yang hanya berformat XLSX dan CSV."
                                    </p>
                                </div>
                                <input name="file" type="file" class="hidden" required>
                            </label>
                        </div>
                    </div>
                    <p class="text-sm text-neutral-400 pt-3">
                        <span class="text-orange-600 font-bold">CATATAN</span> Sebelum mengimpor data, pastikan baris header pada lembar kerja / sheet anda dihapus terlebih dahulu.
                    </p>
                    <div>
                        <button type="submit"
                            class="my-5 w-full flex justify-center bg-orient-800 text-gray-100 p-4  rounded-lg tracking-wide
                                    font-semibold  focus:outline-none focus:shadow-outline hover:bg-orient-900 shadow-lg cursor-pointer transition ease-in duration-300">
                            Upload
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
