<x-master-layout title="Pendaftaran UMKM">

    <div class="max-w-full flex justify-center items-center">
        <div class="flex justify-between absolute gap-5">
            <div class="flex justify-start items-center">
                <div class="text-white md:text-4xl text-l font-bold z-10">INFORMASI NASABAH BERORIENTASI EKSPOR</div>
            </div>
        </div>
        <img src="/img/umkm/core/cover-profil-new.jpg" class="w-full" alt="">
    </div>

    @if ($errors->any())
        <div class="bg-white py-6">
            <div
                class="error container mx-auto p-6 gap-6 flex w-full relative bg-red-500 rounded-lg items-center justify-center text-white font-bold text-xl">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div class="min-h-screen bg-white ">
        <!-- Page Content -->
        <div class="bg-white sm:p-8">
            <div class="container mx-auto pt-6 gap-6 flex w-full relative justify-center" x-data="{ openSection: 1, modalSubmit: false, modalBack: false, addressSame: false }">
                <form action="" method="POST" enctype="multipart/form-data" class="form">
                @csrf

                <div class="form-container">
                    <!-- DATA PERSONAL -->
                    @isset($release)
                    <div x-show="openSection === 1" class="transition-all duration-300 ease-in-out transform"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95">
                        <div class="mb-4 p-4 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                            <div class="text-tosca text-base font-semibold leading-normal text-center">DATA RELEASE</div>
                            <div class="flex justify-between mb-4 flex-wrap">
                                <div class="width-100 md-mt-6 mb-6">
                                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                                        ID Release <span class="text-red-400">*</span>
                                    </label>
                                    <input type="text" name="bizmatch_event_name" required placeholder="Masukkan Nama Bizmatch & Event/Advisory"
                                        autocomplete="off"
                                        class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full" disabled value="{{ $release->id }}"/>
                                </div>
                                <div class="width-100 md-mt-6 mb-6">
                                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                                        Tanggal Release <span class="text-red-400">*</span>
                                    </label>
                                    <input type="date" name="release_date" required disabled
                                        style="outline: none; padding: 0.5rem; border-radius: 0.375rem; background-color: #ffffff; border: 1px solid #d1d5db; width: 100%; color: #4b5563; text-align: center;" 
                                        placeholder="DD/MM/YYYY" value="{{ $release->release_date }}"/>
                                </div>
                                <div class="width-100 md-mt-6 mb-6">
                                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                                    kategori publikasi <span class="text-red-400">*</span>
                                    </label>
                                    <input type="text" name="event_category" required placeholder="Masukkan kategori publikasi"
                                        autocomplete="off"
                                        class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full" disabled value="{{ $release->event_category }}"/>
                                </div>
                                <div class="width-100 md-mt-6 mb-6">
                                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                                    Nama Publikasi <span class="text-red-400">*</span>
                                    </label>
                                    <input type="text" name="bizmatch_event_name" required placeholder="Masukkan Nama Publikasi"
                                        autocomplete="off"
                                        class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full" disabled value="{{ $release->bizmatch_event_name }}"/>
                                </div>
                                <div class="width-100 md-mt-6 mb-6">
                                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                                    Nama Media Massa <span class="text-red-400">*</span>
                                    </label>
                                    <input type="text" name="media_name" required placeholder="Masukkan Nama Media Massa" disabled
                                        autocomplete="off"
                                        class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full" value="{{ $release->media_name }}"/>
                                </div>
                                <div class="width-100 md-mt-6 mb-6">
                                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                                    Link Berita <span class="text-red-400">*</span>
                                    </label>
                                    <input type="text" name="news_link" required placeholder="Masukkan Link Berita" disabled
                                        autocomplete="off"
                                        class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full" value="{{ $release->news_link }}"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end gap-5 p-6 button-container">
                    <button type="button" @click="modalBack = true"
                        class="flex justify-between items-center gap-2 text-left text-sm font-bold custom-bg-acsent text-tosca p-4 px-5 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 20 20" fill="none">
                            <path d="M15 5L5 15" stroke="#076281" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M5 5L15 15" stroke="#076281" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        Kembali
                        </a>
                        <button type="button" onclick="window.location.href='/dashboard/release/{{ $release->id }}/edit'"
                            class="flex justify-between items-center gap-2 text-left text-sm font-bold bg-orient-800 text-white p-4 px-5 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20"
                                viewBox="0 0 21 20" fill="none">
                                <g clip-path="url(#clip0_125_12543)">
                                    <path d="M8 9.16667L10.5 11.6667L17.1667 5" stroke="white"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M17.1663 10V15C17.1663 15.4421 16.9907 15.866 16.6782 16.1786C16.3656 16.4911 15.9417 16.6667 15.4997 16.6667H5.49967C5.05765 16.6667 4.63372 16.4911 4.32116 16.1786C4.0086 15.866 3.83301 15.4421 3.83301 15V5.00004C3.83301 4.55801 4.0086 4.13409 4.32116 3.82153C4.63372 3.50897 5.05765 3.33337 5.49967 3.33337H12.9997"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_125_12543">
                                        <rect width="20" height="20" fill="white"
                                            transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Edit Data
                        </button>
                </div>
                @endisset
                <div class="modal" x-show="modalSubmit" :class="{ 'modal-open': modalSubmit }">
                    <div class="modal-content rounded-md flex flex-col items-center justify-center"
                        id="modal-submit">
                    </div>
                </div>
                <div class="modal" x-show="modalBack" :class="{ 'modal-open': modalBack }">
                    <div class="modal-content rounded-md flex flex-col items-center justify-center">
                        <img src="/img/umkm/icon/icon-save-failed.png" alt="icon-save-success">
                        <p class="mt-4 font-bold">Apakah Anda yakin ingin kembali?</p>
                        <p class="mt-4 text-center">Data nasabah yang Anda masukkan akan terhapus, apabila Anda
                            melakukan pembatalan pengisian dengan klik “Iya, Kembali”</p>
                        <div class="flex justify-between gap-5 mt-6 button-container w-full">
                            <button type="button" @click="modalBack = false"
                                class="width-50 flex justify-center items-center gap-2 text-center text-sm font-bold custom-bg-tosca-50 text-tosca padding-button rounded-lg">
                                Tidak
                            </button>
                            <a href="/dashboard/release"
                                class="width-50 flex justify-center items-center gap-2 text-center text-sm font-bold bg-orient-800 text-white padding-button rounded-lg">
                                Iya, Kembali
                            </a>
                        </div>
                    </div>
                </div>
                @isset($nama_admin)
                    <div class="modal" x-show="!modalBack" :class="{ 'modal-open': !modalBack }">
                        <div class="modal-content rounded-md flex flex-col items-center justify-center">
                            <img src="/img/umkm/core/xporiaLogo.png" alt="icon-save-success">
                            <p class="mt-4 text-center font-bold">Selamat, <span
                                    class="text-orange">{{ $nama_admin }}</span> ! Proses pengisian informasi
                                nasabah anda telah berhasil. </p>
                            <p class="mt-4 text-center text-sm">Selamat dan Terima Kasih.</p>
                            {{-- <a href="/welcome/greetings"
                                class="mt-5 flex justify-center items-center gap-2 text-sm font-bold custom-bg-orange text-white p-4 px-5 rounded-lg w-full">
                                Download
                            </a> --}}
                            <a href='/welcome/greetings'
                                class="mt-5 flex justify-center items-center gap-2 text-sm font-bold custom-bg-tosca-50 text-tosca p-4 px-5 rounded-lg w-full">
                                Keluar
                            </a>
                        </div>
                    </div>
                @endisset
            </form>
        </div>
    </div>

    <div class="max-w-full bg-white footer">
        <div
            class="container mx-auto pt-6 pb-4 gap-6 w-full flex items-center justify-center text-sm text-neutral-400">
            <p>2024 © PT. Bank Negara Indonesia (Persero), Tbk. All Rights Reserved</p>
        </div>
    </div>

</x-master-layout>
