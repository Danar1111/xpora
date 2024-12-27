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
            <div class="container mx-auto pt-6 gap-6 flex w-full relative " x-data="{ openSection: 1, modalSubmit: false, modalBack: false, addressSame: false }">
                <form action="{{ route('umkm.store') }}" method="POST" enctype="multipart/form-data" class="form">
                    @csrf

                    <div class="form-container">
                        <!-- DATA PERSONAL -->
                        <div @click="openSection = (openSection === 1) ? 0 : 1"
                            class="mb-2 p-2 text-xl w-fullrounded-md px-6 cursor-pointer flex justify-between items-center border-bottom-tosca">
                            <div class="flex gap-2">
                                <svg class="scale-110" xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                    viewBox="0 0 24 25">
                                    <g clip-path="url(#clip0_17_499)">
                                        <path
                                            d="M12 6.4C13.16 6.4 14.1 7.34 14.1 8.5C14.1 9.66 13.16 10.6 12 10.6C10.84 10.6 9.9 9.66 9.9 8.5C9.9 7.34 10.84 6.4 12 6.4ZM12 15.4C14.97 15.4 18.1 16.86 18.1 17.5V18.6H5.9V17.5C5.9 16.86 9.03 15.4 12 15.4ZM12 4.5C9.79 4.5 8 6.29 8 8.5C8 10.71 9.79 12.5 12 12.5C14.21 12.5 16 10.71 16 8.5C16 6.29 14.21 4.5 12 4.5ZM12 13.5C9.33 13.5 4 14.84 4 17.5V19.5C4 20.05 4.45 20.5 5 20.5H19C19.55 20.5 20 20.05 20 19.5V17.5C20 14.84 14.67 13.5 12 13.5Z"
                                            :fill="(openSection === 1) ? '#076281' : '#076281'" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_17_499">
                                            <rect width="24" height="24" fill="white"
                                                transform="translate(0 0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div>
                                    <h2 :class="openSection === 1 ? 'text-orient-800' : 'text-tosca'" class="font-bold">
                                        Informasi Personal</h2>
                                    <p class="text-sm text-tertiery-400 font-normal">Informasi personal diisi dengan
                                        data identitas <i>ultimate owner</i> perusahaan <i>existing</i></p>
                                </div>
                            </div>
                            <div :class="openSection === 1 ? '' : 'rotate-180'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_4_102349)">
                                        <path d="M18 15L12 9L6 15" stroke="#076281" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4_102349">
                                            <rect width="24" height="24" fill="white"
                                                transform="matrix(-1 0 0 -1 24 24)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div x-show="openSection === 1" class="transition-all duration-300 ease-in-out transform"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95">
                            <div class="mb-4 p-4 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                <div class="text-tosca text-base font-semibold leading-normal">Data Personal</div>
                                <div class="flex justify-between mb-4 flex-wrap">
                                    <div class="width-30">
                                        <label for="fullName" class="block text-gray-700 text-sm font-semibold mb-2">
                                            Jenis Kelamin <span class="text-red-400">*</span>
                                        </label>
                                        <select name="identitas_personal"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full">
                                            <option value="Bapak">Bapak</option>
                                            <option value="Perempuan">Ibu</option>
                                        </select>
                                    </div>
                                    <div class="width-70 md-mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Nama <span class="text-red-400">*</span>
                                        </label>
                                        <input type="text" name="nama_personal" required placeholder="Masukkan nama"
                                            autocomplete="off"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full" />
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Nomor Telepon / Handphone <span class="text-red-400">*</span>
                                        </label>
                                        <div class="relative">
                                            <input type="text" name="no_telp_personal"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full pl-11"
                                                required />
                                            <div class="absolute-center text-gray-500 z-20">+62</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 p-4 mt-8 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                <div class="text-tosca text-base font-semibold leading-normal">Alamat Personal</div>
                                <div class="flex justify-between mb-4 flex-wrap">
                                    <div class="width-100">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Alamat <span class="text-red-400">*</span>
                                        </label>
                                        <textarea name="alamat_personal" required placeholder="Masukan alamat nasabah" autocomplete="off"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"></textarea>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Provinsi <span class="text-red-400">*</span>
                                        </label>
                                        <select id="provinsi" name="provinsi_personal"
                                            class="select2 outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full">
                                            <option value="" disabled selected>Pilih Provinsi</option>
                                            @foreach ($provinces as $provinsi)
                                                <option value="{{ $provinsi->name }}" data-id={{ $provinsi->id }}>
                                                    {{ $provinsi->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Kota / Kabupaten <span class="text-red-400">*</span>
                                        </label>
                                        <select id="kabupaten" name="kota_personal"
                                            class="select2 outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full">
                                            <option value="" disabled selected>Pilih Kota / Kabupaten</option>
                                            @foreach ($regencies as $regency)
                                                <option value="{{ $regency->name }}" data-id={{ $regency->id }}>
                                                    {{ $regency->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Kecamatan <span class="text-red-400">*</span>
                                        </label>
                                        <input type="text" name="kecamatan_personal"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            required placeholder="Masukkan Kecamatan" autocomplete="off"/>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Kelurahan <span class="text-red-400">*</span>
                                        </label>
                                        <input type="text" name="kelurahan_personal"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            required placeholder="Masukkan Kelurahan" autocomplete="off"/>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Kode Pos <span class="text-red-400">*</span>
                                        </label>
                                        <input type="number" name="kode_pos_personal"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            required placeholder="Masukkan kode pos" autocomplete="off"
                                            onkeydown="javascript: return event.keyCode == 69 ? false : true" />
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- DATA USAHA -->
                        <div @click="openSection = (openSection === 2) ? 0 : 2"
                            class="mb-2 p-2 text-xl w-fullrounded-md px-6 cursor-pointer flex justify-between items-center border-bottom-tosca">
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                    viewBox="0 0 24 25" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.8 0.5C12.7882 0.5 14.4 2.11177 14.4 4.1L14.4001 5.50481C14.7754 5.37217 15.1793 5.3 15.6 5.3H20.4C22.3882 5.3 24 6.91178 24 8.9V20.9C24 22.8882 22.3882 24.5 20.4 24.5H3.6C1.61177 24.5 0 22.8882 0 20.9V4.1C0 2.11177 1.61177 0.5 3.6 0.5H10.8ZM10.8 2.9H3.6C2.93726 2.9 2.4 3.43726 2.4 4.1V20.9C2.4 21.5627 2.93726 22.1 3.6 22.1H12V4.1C12 3.43726 11.4627 2.9 10.8 2.9ZM20.4 7.7H15.6C14.9373 7.7 14.4 8.23726 14.4 8.9V22.1H20.4C21.0627 22.1 21.6 21.5627 21.6 20.9V8.9C21.6 8.23726 21.0627 7.7 20.4 7.7ZM8.4 14.9C9.06274 14.9 9.6 15.4373 9.6 16.1C9.6 16.7627 9.06274 17.3 8.4 17.3H6C5.33726 17.3 4.8 16.7627 4.8 16.1C4.8 15.4373 5.33726 14.9 6 14.9H8.4ZM19.2 14.9C19.8627 14.9 20.4 15.4373 20.4 16.1C20.4 16.7627 19.8627 17.3 19.2 17.3H16.8C16.1373 17.3 15.6 16.7627 15.6 16.1C15.6 15.4373 16.1373 14.9 16.8 14.9H19.2ZM8.4 10.1C9.06274 10.1 9.6 10.6373 9.6 11.3C9.6 11.9627 9.06274 12.5 8.4 12.5H6C5.33726 12.5 4.8 11.9627 4.8 11.3C4.8 10.6373 5.33726 10.1 6 10.1H8.4ZM19.2 10.1C19.8627 10.1 20.4 10.6373 20.4 11.3C20.4 11.9627 19.8627 12.5 19.2 12.5H16.8C16.1373 12.5 15.6 11.9627 15.6 11.3C15.6 10.6373 16.1373 10.1 16.8 10.1H19.2ZM8.4 5.3C9.06274 5.3 9.6 5.83726 9.6 6.5C9.6 7.16274 9.06274 7.7 8.4 7.7H6C5.33726 7.7 4.8 7.16274 4.8 6.5C4.8 5.83726 5.33726 5.3 6 5.3H8.4Z"
                                        :fill="(openSection === 2) ? '#076281' : '#076281'" />
                                </svg>
                                <div>
                                    <h2 :class="openSection === 2 ? 'text-orient-800' : 'text-tosca'"
                                        class="font-bold">Informasi Perusahaan</h2>
                                    <p class="text-sm text-tertiery-400 font-normal">Informasi perusahaan diisi dengan
                                        data kondisi perusahaan <i>existing</i></p>
                                </div>
                            </div>
                            <div :class="openSection === 2 ? '' : 'rotate-180'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_4_102349)">
                                        <path d="M18 15L12 9L6 15" stroke="#076281" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4_102349">
                                            <rect width="24" height="24" fill="white"
                                                transform="matrix(-1 0 0 -1 24 24)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div x-show="openSection === 2" class="transition-all duration-300 ease-in-out transform"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95">
                            <div class="mb-4 p-4 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                <div class="text-tosca font-semibold leading-normal">Data Perusahaan</div>
                                <div class="flex justify-between mb-4 flex-wrap">
                                    <div class="width-30">
                                        <label for="fullName" class="block text-gray-700 text-sm font-semibold mb-2">
                                            Badan Usaha <span class="text-red-400">*</span>
                                        </label>
                                        <select name="badan_usaha"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full">
                                            <option value="PT">PT</option>
                                            <option value="PT_Perseorangan">PT Perseorangan</option>
                                            <option value="CV">CV</option>
                                            <option value="PT_Perseorangan">Perorangan</option>
                                        </select>
                                    </div>
                                    <div class="width-70 md-mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Nama Perusahaan <span class="text-red-400">*</span>
                                        </label>
                                        <input type="text" name="nama_perusahaan" required
                                            placeholder="Masukkan nama perusahaan" autocomplete="off"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full" />
                                    </div>
                                    <div class="width-30 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Tahun Berdiri <span class="text-red-400">*</span>
                                        </label>
                                        <input type="number" name="berdiri_perusahaan" required
                                            placeholder="Masukkan tahun berdiri" autocomplete="off"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full" />
                                    </div>
                                    <div class="width-70 mt-6">
                                        <label for="fullName" class="block text-gray-700 text-sm font-semibold mb-2">
                                            Kategori / Sektor Usaha <span class="text-red-400">*</span>
                                        </label>
                                        <select name="kategori_perusahaan"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full">
                                            <option value="Agriculture, Plantation, & Crop Products">Agriculture, Plantation, & Crop Products</option>
                                            <option value="Herb and Spices">Herb and Spices</option>
                                            <option value="Animal and Animal Products">Animal and Animal Products</option>
                                            <option value="Fisheries">Fisheries</option>
                                            <option value="Food Stuffs">Food Stuffs</option>
                                            <option value="Food and Beverages">Food and Beverages</option>
                                            <option value="Health and Beauty">Health and Beauty</option>
                                            <option value="Textiles">Textiles</option>
                                            <option value="Fashion and Accessories">Fashion and Accessories</option>
                                            <option value="Raw Hides Skin Leather Furs">Raw Hides Skin Leather Furs</option>
                                            <option value="Footwear Headgear">Footwear Headgear</option>
                                            <option value="Wood & Wood Processing">Wood & Wood Processing</option>
                                            <option value="Furniture & Home Decor">Furniture & Home Decor</option>
                                            <option value="Handicraft">Handicraft</option>
                                            <option value="Heavy Machinery & Equipment">Heavy Machinery & Equipment</option>
                                            <option value="Electronics Household Appliances">Electronics Household Appliances</option>
                                            <option value="Packaging & Office Supplies">Packaging & Office Supplies</option>
                                            <option value="Mining and Mineral Products">Mining and Mineral Products</option>
                                            <option value="Stone Glass">Stone Glass</option>
                                            <option value="Chemicals Rubber Metallurgy">Chemicals Rubber Metallurgy</option>
                                            <option value="Plastics Rubbers">Plastics Rubbers</option>
                                            <option value="Automotive and Transportation">Automotive and Transportation</option>
                                            <option value="Lainnya">Other Services</option>
                                        </select>
                                    </div>
                                    {{-- <div class=" width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Nomor Legalitas atau Nomor KTP <span class="text-red-400">*</span>
                                        </label>
                                        <input type="number" name="nomor_badan_perusahaan" required
                                            autocomplete="off" placeholder="Masukkan nomor legalitas"
                                            onkeydown="javascript: return event.keyCode == 69 ? false : true"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full" />
                                        <p class="text-xs text-gray-500 mt-1">*Nomor legalitas atau KTP jika perorangan
                                        </p>
                                    </div>
                                    <div class=" width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Nomor NPWP <span class="text-red-400">*</span>
                                        </label>
                                        <input type="number" name="nomor_npwp_perusahaan" required
                                            autocomplete="off" placeholder="Masukkan nomor NPWP"
                                            onkeydown="javascript: return event.keyCode == 69 ? false : true"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full" />
                                    </div> --}}
                                    <div class="width-50 mt-6">
                                        <label for="fullName" class="block text-gray-700 text-sm font-semibold mb-2">
                                            Kategori Exportir
                                            {{-- <span class="text-red-400">*</span> --}}
                                        </label>
                                        <div class="flex gap-8">
                                            <label class="inline-flex items-start">
                                                <input name="ekspordirect_perusahaan" type="checkbox"
                                                    class="form-checkbox h-5 w-5" unchecked value="1" />
                                                <span class="ml-2 text-gray-700">Direct</span>
                                            </label>
                                            <label class="inline-flex items-start">
                                                <input name="eksporindirect_perusahaan" type="checkbox"
                                                    class="form-checkbox h-5 w-5" unchecked value="1" />
                                                <span class="ml-2 text-gray-700">Indirect</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label for="fullName" class="block text-gray-700 text-sm font-semibold mb-2">
                                            Jenis Industri
                                            {{-- <span class="text-red-400">*</span> --}}
                                        </label>
                                        <div class="flex gap-8 flex-wrap">
                                            <label class="inline-flex items-start">
                                                <input name="pengolahan_perusahaan" type="checkbox"
                                                    class="form-checkbox h-5 w-5" unchecked value="1" />
                                                <span class="ml-2 text-gray-700">Pengolahan</span>
                                            </label>
                                            <label class="inline-flex items-start">
                                                <input name="perdagangan_perusahaan" type="checkbox"
                                                    class="form-checkbox h-5 w-5" unchecked value="1" />
                                                <span class="ml-2 text-gray-700">Perdagangan</span>
                                            </label>
                                            <label class="inline-flex items-start">
                                                <input name="jasa_perusahaan" type="checkbox"
                                                    class="form-checkbox h-5 w-5" unchecked value="1" />
                                                <span class="ml-2 text-gray-700">Jasa</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 p-4 mt-8 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                <div class="flex justify-between items-center address-flex">
                                    <h4 class="text-tosca text-base font-semibold leading-normal flex items-center">
                                        Alamat Perusahaan</h4>
                                    <div class="flex gap-2 items-center">
                                        <label class="switch">
                                            <input class="switch-input" type="checkbox" name="same_address"
                                                :checked="addressSame" @click="addressSame = !addressSame"
                                                value="on">
                                            <span class="switch-toggle"></span>
                                        </label>
                                        <p class="switch-text">Alamat perusahaan sama dengan alamat personal</p>
                                    </div>
                                </div>
                                <div x-show="!addressSame" class="flex justify-between mb-4 flex-wrap">
                                    <div class="width-100">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Alamat<span class="text-red-400">*</span>
                                        </label>
                                        <textarea name="alamat_perusahaan" :required="!addressSame" placeholder="Masukan alamat perusahaan"
                                            autocomplete="off" class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"></textarea>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Provinsi <span class="text-red-400">*</span>
                                        </label>
                                        <select id="provinsi_perusahaan" name="provinsi_perusahaan"
                                            style="width: 100%"
                                            class="select2 outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            :required="!addressSame">
                                            <option value="" disabled selected>Pilih Provinsi</option>
                                            @foreach ($provinces as $provinsi)
                                                <option value="{{ $provinsi->name }}" data-id="{{ $provinsi->id }}">
                                                    {{ $provinsi->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Kota / Kabupaten <span class="text-red-400">*</span>
                                        </label>
                                        <select id="kabupaten_perusahaan" name="kota_perusahaan" style="width: 100%"
                                            class="select2 outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            :required="!addressSame">
                                            <option value="" disabled selected>Pilih Kota / Kabupaten</option>
                                            @foreach ($regencies as $regency)
                                                <option value="{{ $regency->name }}" data-id={{ $regency->id }}>
                                                    {{ $regency->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Kecamatan <span class="text-red-400">*</span>
                                        </label>
                                        <input type="text" name="kecamatan_perusahaan"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            required placeholder="Masukkan Kecamatan" autocomplete="off"/>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Kelurahan <span class="text-red-400">*</span>
                                        </label>
                                        <input type="text" name="kelurahan_perusahaan"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            required placeholder="Masukkan Kecamatan" autocomplete="off"/>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Kode Pos <span class="text-red-400">*</span>
                                        </label>
                                        <input type="number" name="kode_pos_perusahaan" :required="!addressSame"
                                            placeholder="Masukkan kode pos" autocomplete="off"
                                            onkeydown="javascript: return event.keyCode == 69 ? false : true"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full" />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 p-4 mt-8 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                <div class="text-tosca text-base font-semibold leading-normal">Kontak Perusahaan</div>
                                <div class="flex justify-between mb-4 flex-wrap">
                                    <div class="width-50">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Nomor Telepon Perusahaan
                                            <span class="text-red-400">*</span>
                                        </label>
                                        <div class="relative">
                                            <input type="text" name="no_telp_perusahaan"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full pl-11"
                                                required />
                                            <div class="absolute-center text-gray-500 z-20">+62</div>
                                        </div>
                                    </div>
                                    <div class="width-50">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2 md-mt-6">
                                            Email perusahaan
                                            <span class="text-red-400">*</span>
                                        </label>
                                        <input type="email" name="email_perusahaan" required
                                            placeholder="Masukkan email" autocomplete="off"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full" />
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Website perusahaan
                                            <span class="text-red-400">*</span>
                                        </label>
                                        <div class="relative">
                                            <input type="text" name="website_perusahaan"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full pl-14"
                                                required />
                                            <div class="absolute-center text-gray-500 z-20">www.</div>
                                        </div>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            ID Instagram Perusahaan
                                            <span class="text-red-400">*</span>
                                        </label>
                                        <div class="relative">
                                            <input type="text" name="instagram_perusahaan"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full pl-8"
                                                required />
                                            <div class="absolute-center text-gray-500 z-20">@</div>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-6 width-50 flex justify-between p-4 border border-dashed bg-gray-50 rounded-lg file">
                                        <div class="flex gap-6 items-center" id="compro_perusahaan_label">
                                            <div class="custom-bg-tosca-50 rounded-full p-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M12 4C15.5201 4 17.517 6.27298 17.8075 9.01799L17.8963 9.01798C20.1616 9.01798 21.9981 10.8048 21.9981 13.009C21.9981 15.2132 20.1616 17 17.8963 17H13.7392L13.7386 12.9647L14.7133 13.9405L14.8533 14.0614L14.8829 14.0834C15.5688 14.5922 16.5405 14.5367 17.1625 13.9148C17.8459 13.2313 17.8459 12.1233 17.1625 11.4399L13.2115 7.48892L13.0717 7.36823L13.042 7.34623C12.3562 6.83736 11.3844 6.89291 10.7625 7.51483L6.81155 11.4658L6.69087 11.6056L6.66887 11.6352C6.16 12.3211 6.21554 13.2928 6.83746 13.9148L6.86337 13.9407L7.00317 14.0614L7.03281 14.0834C7.71864 14.5922 8.69051 14.5366 9.31243 13.9147L10.2406 12.9863L10.2401 17H6.10372C3.83838 17 2.00195 15.2132 2.00195 13.009C2.00195 10.8048 3.83838 9.01798 6.10375 9.01798L6.19256 9.01799C6.48467 6.25494 8.47989 4 12 4ZM11.2409 10.5713L11.2397 20.2562C11.2397 20.6704 11.5755 21.0062 11.9897 21.0062C12.4039 21.0062 12.7397 20.6704 12.7397 20.2562L12.7383 10.5481L15.3947 13.2077L15.4788 13.2803C15.4979 13.2944 15.5175 13.3076 15.5376 13.3197C15.585 13.3484 15.6349 13.3713 15.6863 13.3885C15.9475 13.476 16.2474 13.4157 16.4554 13.2077C16.7483 12.9148 16.7483 12.4399 16.4554 12.147L12.5303 8.22196L12.4462 8.14934C12.4044 8.11827 12.36 8.09213 12.3139 8.07091C12.0368 7.94328 11.6979 7.99362 11.4696 8.22193L7.54456 12.147L7.47195 12.2311C7.25409 12.5247 7.2783 12.9414 7.54456 13.2077L7.62868 13.2803C7.64703 13.2939 7.66586 13.3066 7.6851 13.3183C7.73321 13.3476 7.78392 13.371 7.83617 13.3885C8.0974 13.476 8.39724 13.4157 8.60528 13.2077L11.2409 10.5713Z"
                                                        fill="#076281" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-bold">Unggah Company Profile</p>
                                                <p class="text-gray-500 text-sm">PDF, PPT (max. 50 Mb)</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <label for="compro_perusahaan">
                                                <p
                                                    class="text-orient-800 cursor-pointer border px-4 py-2 rounded-xl border-orient-800 bg-white">
                                                    Pilih file</p>
                                                <input type="file" id="compro_perusahaan" name="compro_perusahaan"
                                                    class="hidden" accept=".pdf, .ppt" required>
                                            </label>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-6 width-50 flex justify-between p-4 border border-dashed bg-gray-50 rounded-lg file">
                                        <div class="flex gap-6 items-center" id="logo_perusahaan_label">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M12 4C15.5201 4 17.517 6.27298 17.8075 9.01799L17.8963 9.01798C20.1616 9.01798 21.9981 10.8048 21.9981 13.009C21.9981 15.2132 20.1616 17 17.8963 17H13.7392L13.7386 12.9647L14.7133 13.9405L14.8533 14.0614L14.8829 14.0834C15.5688 14.5922 16.5405 14.5367 17.1625 13.9148C17.8459 13.2313 17.8459 12.1233 17.1625 11.4399L13.2115 7.48892L13.0717 7.36823L13.042 7.34623C12.3562 6.83736 11.3844 6.89291 10.7625 7.51483L6.81155 11.4658L6.69087 11.6056L6.66887 11.6352C6.16 12.3211 6.21554 13.2928 6.83746 13.9148L6.86337 13.9407L7.00317 14.0614L7.03281 14.0834C7.71864 14.5922 8.69051 14.5366 9.31243 13.9147L10.2406 12.9863L10.2401 17H6.10372C3.83838 17 2.00195 15.2132 2.00195 13.009C2.00195 10.8048 3.83838 9.01798 6.10375 9.01798L6.19256 9.01799C6.48467 6.25494 8.47989 4 12 4ZM11.2409 10.5713L11.2397 20.2562C11.2397 20.6704 11.5755 21.0062 11.9897 21.0062C12.4039 21.0062 12.7397 20.6704 12.7397 20.2562L12.7383 10.5481L15.3947 13.2077L15.4788 13.2803C15.4979 13.2944 15.5175 13.3076 15.5376 13.3197C15.585 13.3484 15.6349 13.3713 15.6863 13.3885C15.9475 13.476 16.2474 13.4157 16.4554 13.2077C16.7483 12.9148 16.7483 12.4399 16.4554 12.147L12.5303 8.22196L12.4462 8.14934C12.4044 8.11827 12.36 8.09213 12.3139 8.07091C12.0368 7.94328 11.6979 7.99362 11.4696 8.22193L7.54456 12.147L7.47195 12.2311C7.25409 12.5247 7.2783 12.9414 7.54456 13.2077L7.62868 13.2803C7.64703 13.2939 7.66586 13.3066 7.6851 13.3183C7.73321 13.3476 7.78392 13.371 7.83617 13.3885C8.0974 13.476 8.39724 13.4157 8.60528 13.2077L11.2409 10.5713Z"
                                                    fill="#076281" />
                                            </svg>
                                            <div>
                                                <p class="font-bold">Unggah Logo Perusahaan</p>
                                                <p class="text-gray-500 text-sm">SVG, PNG, or JPG (max. 15 Mb)</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <label for="logo_perusahaan">
                                                <p
                                                    class="text-orient-800 cursor-pointer border px-4 py-2 rounded-xl border-orient-800 bg-white">
                                                    Pilih file</p>
                                                <input type="file" id="logo_perusahaan" name="logo_perusahaan"
                                                    class="hidden" accept=".svg, .png, .jpg" required>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DATA LEGALITAS -->
                        <div @click="openSection = (openSection === 3) ? 0 : 3"
                            class="mb-2 p-2 text-xl w-fullrounded-md px-6 cursor-pointer flex justify-between items-center border-bottom-tosca">
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="23"
                                    viewBox="0 0 24 23" fill="none">
                                    <path
                                        d="M8.3999 4.8999H14.3999V7.2999H8.3999V4.8999ZM14.3999 9.6999H8.3999V12.0999H14.3999V9.6999Z"
                                        :fill="(openSection === 3) ? '#076281' : '#076281'" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M19.2 19.3001C19.2 20.2549 18.8207 21.1705 18.1456 21.8457C17.4705 22.5208 16.5548 22.9001 15.6 22.9001H3.6C2.64522 22.9001 1.72955 22.5208 1.05442 21.8457C0.379285 21.1705 0 20.2549 0 19.3001L0 17.5001C0 17.0227 0.189642 16.5649 0.527208 16.2273C0.864773 15.8897 1.32261 15.7001 1.8 15.7001H3.6V3.7001C3.6 2.74532 3.97929 1.82964 4.65442 1.15451C5.32955 0.479382 6.24522 0.100098 7.2 0.100098H20.4C20.8728 0.100098 21.3409 0.193214 21.7777 0.374131C22.2144 0.555048 22.6113 0.820222 22.9456 1.15451C23.2799 1.4888 23.5451 1.88567 23.726 2.32244C23.9069 2.75921 24 3.22734 24 3.7001C24 4.17286 23.9069 4.64099 23.726 5.07776C23.5451 5.51453 23.2799 5.91139 22.9456 6.24568C22.6113 6.57997 22.2144 6.84515 21.7777 7.02606C21.3409 7.20698 20.8728 7.3001 20.4 7.3001H19.2V19.3001ZM6 3.7001C6 3.38184 6.12643 3.07661 6.35147 2.85157C6.57652 2.62653 6.88174 2.5001 7.2 2.5001H17.004C16.872 2.8757 16.8 3.2801 16.8 3.7001V19.3001C16.8 19.6184 16.6736 19.9236 16.4485 20.1486C16.2235 20.3737 15.9183 20.5001 15.6 20.5001C15.2817 20.5001 14.9765 20.3737 14.7515 20.1486C14.5264 19.9236 14.4 19.6184 14.4 19.3001V15.7001H6V3.7001ZM20.4 2.5001C20.0817 2.5001 19.7765 2.62653 19.5515 2.85157C19.3264 3.07661 19.2 3.38184 19.2 3.7001V4.9001H20.4C20.7183 4.9001 21.0235 4.77367 21.2485 4.54863C21.4736 4.32358 21.6 4.01836 21.6 3.7001C21.6 3.38184 21.4736 3.07661 21.2485 2.85157C21.0235 2.62653 20.7183 2.5001 20.4 2.5001ZM12 19.3001C12 19.7201 12.072 20.1245 12.204 20.5001H3.6C3.28174 20.5001 2.97652 20.3737 2.75147 20.1486C2.52643 19.9236 2.4 19.6184 2.4 19.3001V18.1001H12V19.3001Z"
                                        :fill="(openSection === 3) ? '#076281' : '#076281'" />
                                </svg>
                                <div>
                                    <h2 :class="openSection === 3 ? 'text-orient-800' : 'text-tosca'"
                                        class="font-bold">Informasi Legalitas</h2>
                                    <p class="text-sm text-tertiery-400 font-normal">Informasi legalitas diisi dengan
                                        data kepemilikan legalitas perusahaan yang masih berlaku</p>
                                </div>
                            </div>
                            <div :class="openSection === 3 ? '' : 'rotate-180'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_4_102349)">
                                        <path d="M18 15L12 9L6 15" stroke="#076281" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4_102349">
                                            <rect width="24" height="24" fill="white"
                                                transform="matrix(-1 0 0 -1 24 24)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div x-show="openSection === 3" class="transition-all duration-300 ease-in-out transform"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95">
                            <div class="mb-4 p-4 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                <div class="text-tosca text-base font-semibold leading-normal">Export Permit</div>
                                <div class="flex justify-between flex-wrap">
                                    <div class="width-50">
                                        <label class="inline-flex items-start">
                                            <input name="export_permit_us_food_and_drug_administration"
                                                type="checkbox" class="form-checkbox h-5 w-5mt-05" unchecked
                                                value="1" />
                                            <span class="ml-2 text-gray-700">Food and Drug Adminstration (FDA)
                                                AMERIKA</span>
                                        </label>
                                    </div>
                                    <div class="width-50 md-mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="export_permit_south_korea_korean_food_and_drug_administration"
                                                type="checkbox" class="form-checkbox h-5 w-5mt-05" unchecked
                                                value="1" />
                                            <span class="ml-2 text-gray-700">Korean Food and Drug Adminstration (KFDA)
                                                KOREA SELATAN</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="export_permit_japan_japanese_agriculture_standards"
                                                type="checkbox" class="form-checkbox h-5 w-5mt-05" unchecked
                                                value="1" />
                                            <span class="ml-2 text-gray-700">Japanese Agriculture Standards (JAS)
                                                JEPANG</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="export_permit_canada_organic_agriculture_centre"
                                                type="checkbox" class="form-checkbox h-5 w-5mt-05" unchecked
                                                value="1" />
                                            <span class="ml-2 text-gray-700">Canada Organic Agriculture</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="export_permit_china_general_administration_of_customs"
                                                type="checkbox" class="form-checkbox h-5 w-5mt-05" unchecked
                                                value="1" />
                                            <span class="ml-2 text-gray-700">Adminstration of Costum China (GACC) -
                                                China</span>
                                        </label>
                                    </div>
                                    <div class="width-100 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Export Permit Lainnya
                                        </label>
                                        <div class="flex items-center gap-4 flex-wrap">
                                            <input name="export_permit1_lainya"
                                                placeholder="Masukkan export permit lainnya" autocomplete="off"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full" />
                                            <input name="export_permit2_lainya"
                                                placeholder="Masukkan export permit lainnya" autocomplete="off"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full" />
                                            <input name="export_permit3_lainya"
                                                placeholder="Masukkan export permit lainnya" autocomplete="off"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="mb-4 p-4 mt-8 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                <div class="text-tosca text-base font-semibold leading-normal">Sertifikat Domestik
                                </div>
                                <div class="flex justify-between flex-wrap">
                                    <div class="width-50">
                                        <label class="inline-flex items-start">
                                            <input name="legalcert_bpom" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Badan Pengawas Obat dan Makanan
                                                (BPOM)</span>
                                        </label>
                                    </div>
                                    <div class="width-50 md-mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="legalcert_indonesia_legal_wood" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Indonesian Legal Wood</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="legalcert_halal" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Halal</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="legalcert_nutriction_fact" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Nutrition Fact</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="legalcert_svkl" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Sistem Verifikasi Legalitas Kayu
                                                (SVLK)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-tosca text-base font-semibold leading-normal">Sertifikat Domestik
                                    Lainnya</div>
                                <div class="flex justify-between flex-wrap">
                                    <div class="width-100">
                                        <div class="flex items-center gap-4 flex-wrap">
                                            <input name="legalcert_domestik1_lainya"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                placeholder="Masukaan sertifikat domestik lainnya"
                                                autocomplete="off"></input>
                                            <input name="legalcert_domestik2_lainya"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                placeholder="Masukaan sertifikat domestik lainnya"
                                                autocomplete="off"></input>
                                            <input name="legalcert_domestik3_lainya"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                placeholder="Masukaan sertifikat domestik lainnya"
                                                autocomplete="off"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 p-4 mt-8 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                <div class="text-tosca text-base font-semibold leading-normal">Sertifikat Internasional
                                </div>
                                <div class="flex justify-between flex-wrap">
                                    <div class="width-50">
                                        <label class="inline-flex items-start">
                                            <input name="legalcert_haccp" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Hazard Anaylisis and Critical Control
                                                Points (HACCP)</span>
                                        </label>
                                    </div>
                                    <div class="width-50 md-mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="legalcert_usda" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">United Stated of Department of
                                                Agricurlture (USDA)</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="legalcert_usda_organic" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">United Stated of Departement of
                                                Agricurlture (USDA Organic)</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="legalcert_eu" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">European Union (EU)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-tosca text-base font-semibold leading-normal">Sertifikat Internasional
                                    Lainnya</div>
                                <div class="flex justify-between flex-wrap">
                                    <div class="width-100">
                                        <div class="flex items-center gap-4 flex-wrap">
                                            <input name="legalcert_inter1_lainya"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                placeholder="Masukaan sertifikat internasional lainnya"
                                                autocomplete="off"></input>
                                            <input name="legalcert_inter2_lainya"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                placeholder="Masukaan sertifikat internasional lainnya"
                                                autocomplete="off"></input>
                                            <input name="legalcert_inter3_lainya"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                placeholder="Masukaan sertifikat internasional lainnya"
                                                autocomplete="off"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DATA PRODUK -->
                        <div @click="openSection = (openSection === 4) ? 0 : 4"
                            class="mb-2 p-2 text-xl w-fullrounded-md px-6 cursor-pointer flex justify-between items-center border-bottom-tosca">
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                    viewBox="0 0 24 25" fill="none">
                                    <path d="M0 0.5H24V24.5H0V0.5Z" fill="white" fill-opacity="0.01" />
                                    <path
                                        d="M2 7.5L1.55279 6.60555C1.214 6.77495 1 7.12125 1 7.5H2ZM12 2.5L12.4472 1.60557C12.1657 1.46481 11.8343 1.46481 11.5528 1.60557L12 2.5ZM22 7.5H23C23 7.12125 22.786 6.77495 22.4472 6.60555L22 7.5ZM22 17.5L22.4472 18.3944C22.786 18.225 23 17.8787 23 17.5H22ZM12 22.5L11.5528 23.3944C11.8343 23.5352 12.1657 23.5352 12.4472 23.3944L12 22.5ZM2 17.5H1C1 17.8787 1.214 18.225 1.55279 18.3944L2 17.5ZM2.44722 8.39445L12.4472 3.39442L11.5528 1.60557L1.55279 6.60555L2.44722 8.39445ZM21 7.5V17.5H23V7.5H21ZM21.5528 16.6055L11.5528 21.6055L12.4472 23.3944L22.4472 18.3944L21.5528 16.6055ZM12.4472 21.6055L2.44722 16.6055L1.55279 18.3944L11.5528 23.3944L12.4472 21.6055ZM3 17.5V7.5H1V17.5H3ZM22.4472 6.60555L12.4472 1.60557L11.5528 3.39442L21.5528 8.39445L22.4472 6.60555Z"
                                        :fill="(openSection === 4) ? '#076281' : '#076281'" />
                                    <path d="M2 7.5L12 12.5" :stroke="(openSection === 4) ? '#076281' : '#076281'"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 22.5V12.5" :stroke="(openSection === 4) ? '#076281' : '#076281'""
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M22 7.5L12 12.5" :stroke="(openSection === 4) ? '#076281' : '#076281'""
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M17.4474 5.89467C17.9414 5.64767 18.1416 5.04698 17.8947 4.553C17.6477 4.05903 17.047 3.8588 16.553 4.10579L17.4474 5.89467ZM6.55302 9.10577C6.05902 9.35277 5.85882 9.95347 6.10577 10.4474C6.35277 10.9414 6.95347 11.1416 7.44742 10.8947L6.55302 9.10577ZM16.553 4.10579L6.55302 9.10577L7.44742 10.8947L17.4474 5.89467L16.553 4.10579Z"
                                        :fill="(openSection === 4) ? '#076281' : '#076281'" />
                                </svg>
                                <div>
                                    <h2 :class="openSection === 4 ? 'text-orient-800' : 'text-tosca'"
                                        class="font-bold">Informasi Produk</h2>
                                    <p class="text-sm text-tertiery-400 font-normal">Informasi produk diisi dengan data
                                        detail produk hasil produksi perusahaan <i>existing</i></p>
                                </div>
                            </div>
                            <div :class="openSection === 4 ? '' : 'rotate-180'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_4_102349)">
                                        <path d="M18 15L12 9L6 15" stroke="#076281" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4_102349">
                                            <rect width="24" height="24" fill="white"
                                                transform="matrix(-1 0 0 -1 24 24)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div x-show="openSection === 4" class="transition-all duration-300 ease-in-out transform"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95">
                            <div class="mb-4 p-4 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                <div class="text-tosca text-base font-semibold leading-normal">Brand / Merk</div>
                                <div class="flex justify-between">
                                    <div class="width-100">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Nama Brand / Merk <span class="text-red-400">*</span>
                                        </label>
                                        <input name="nama_brand" required placeholder="Masukaan nama brand / merk"
                                            autocomplete="off"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"></input>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 p-4 mt-8 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                <div class="text-tosca text-base font-semibold leading-normal">Data Produk</div>
                                <div class="flex justify-between flex-wrap">
                                    <div class="width-100">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Jenis Produk 1 <span class="text-red-400">*</span>
                                        </label>
                                        <div class="flex items-center gap-4">
                                            <input name="jenis_produk_1_brand"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                required placeholder="Masukkan jenis produk"
                                                autocomplete="off"></input>
                                        </div>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            HS Code <span class="text-red-400">*</span>
                                        </label>
                                        <input name="hscode1_perusahaan"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            required placeholder="Masukkan HS code" autocomplete="off"></input>
                                        <div class="mt-1 text-xs">Informasi terkait HS Code dapat ditanyakan langsung kepada Nasabah atau kunjungi website <a
                                                href="https://insw.go.id/intr" target="_blank"
                                                class="text-orient-800 font-semibold">https://insw.go.id/intr</a></div>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Unggah Foto Product Unggulan <span class="text-red-400">*</span>
                                        </label>
                                        <div
                                            class="flex file justify-between p-4 border border-dashed bg-gray-50 rounded-lg">
                                            <div class="flex gap-6 items-center" id="foto_produk_1_brand_label">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M12 4C15.5201 4 17.517 6.27298 17.8075 9.01799L17.8963 9.01798C20.1616 9.01798 21.9981 10.8048 21.9981 13.009C21.9981 15.2132 20.1616 17 17.8963 17H13.7392L13.7386 12.9647L14.7133 13.9405L14.8533 14.0614L14.8829 14.0834C15.5688 14.5922 16.5405 14.5367 17.1625 13.9148C17.8459 13.2313 17.8459 12.1233 17.1625 11.4399L13.2115 7.48892L13.0717 7.36823L13.042 7.34623C12.3562 6.83736 11.3844 6.89291 10.7625 7.51483L6.81155 11.4658L6.69087 11.6056L6.66887 11.6352C6.16 12.3211 6.21554 13.2928 6.83746 13.9148L6.86337 13.9407L7.00317 14.0614L7.03281 14.0834C7.71864 14.5922 8.69051 14.5366 9.31243 13.9147L10.2406 12.9863L10.2401 17H6.10372C3.83838 17 2.00195 15.2132 2.00195 13.009C2.00195 10.8048 3.83838 9.01798 6.10375 9.01798L6.19256 9.01799C6.48467 6.25494 8.47989 4 12 4ZM11.2409 10.5713L11.2397 20.2562C11.2397 20.6704 11.5755 21.0062 11.9897 21.0062C12.4039 21.0062 12.7397 20.6704 12.7397 20.2562L12.7383 10.5481L15.3947 13.2077L15.4788 13.2803C15.4979 13.2944 15.5175 13.3076 15.5376 13.3197C15.585 13.3484 15.6349 13.3713 15.6863 13.3885C15.9475 13.476 16.2474 13.4157 16.4554 13.2077C16.7483 12.9148 16.7483 12.4399 16.4554 12.147L12.5303 8.22196L12.4462 8.14934C12.4044 8.11827 12.36 8.09213 12.3139 8.07091C12.0368 7.94328 11.6979 7.99362 11.4696 8.22193L7.54456 12.147L7.47195 12.2311C7.25409 12.5247 7.2783 12.9414 7.54456 13.2077L7.62868 13.2803C7.64703 13.2939 7.66586 13.3066 7.6851 13.3183C7.73321 13.3476 7.78392 13.371 7.83617 13.3885C8.0974 13.476 8.39724 13.4157 8.60528 13.2077L11.2409 10.5713Z"
                                                        fill="#076281" />
                                                </svg>
                                                <div>
                                                    <p class="font-bold">Unggah Foto Produk</p>
                                                    <p class="text-gray-500 text-sm">SVG, PNG, or JPG (max. 15 Mb)</p>
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <label for="foto_produk_1_brand">
                                                    <p
                                                        class="text-orient-800 cursor-pointer border px-4 py-2 rounded-xl border-orient-800 bg-white">
                                                        Pilih file</p>
                                                    <input required type="file" id="foto_produk_1_brand"
                                                        name="foto_produk_1_brand" class="hidden"
                                                        accept=".svg, .png, .jpg">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="flex justify-between flex-wrap">
                                    <div class="width-100">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Jenis Produk 2<span class="text-red-400">*</span>
                                        </label>
                                        <div class="flex items-center gap-4">
                                            <input name="jenis_produk_2_brand"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                placeholder="Masukkan jenis produk" autocomplete="off"
                                                required></input>
                                        </div>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            HS Code <span class="text-red-400">*</span>
                                        </label>
                                        <input name="hscode2_perusahaan"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            placeholder="Masukkan HS code" autocomplete="off" required></input>
                                        <div class="mt-1 text-xs">Informasi terkait HS Code dapat ditanyakan langsung kepada Nasabah atau kunjungi website <a
                                                href="https://insw.go.id/intr" target="_blank"
                                                class="text-orient-800 font-semibold">https://insw.go.id/intr</a></div>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Unggah Foto Product Unggulan <span class="text-red-400">*</span>
                                        </label>
                                        <div
                                            class="flex file justify-between p-4 border border-dashed bg-gray-50 rounded-lg">
                                            <div class="flex gap-6 items-center" id="foto_produk_2_brand_label">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M12 4C15.5201 4 17.517 6.27298 17.8075 9.01799L17.8963 9.01798C20.1616 9.01798 21.9981 10.8048 21.9981 13.009C21.9981 15.2132 20.1616 17 17.8963 17H13.7392L13.7386 12.9647L14.7133 13.9405L14.8533 14.0614L14.8829 14.0834C15.5688 14.5922 16.5405 14.5367 17.1625 13.9148C17.8459 13.2313 17.8459 12.1233 17.1625 11.4399L13.2115 7.48892L13.0717 7.36823L13.042 7.34623C12.3562 6.83736 11.3844 6.89291 10.7625 7.51483L6.81155 11.4658L6.69087 11.6056L6.66887 11.6352C6.16 12.3211 6.21554 13.2928 6.83746 13.9148L6.86337 13.9407L7.00317 14.0614L7.03281 14.0834C7.71864 14.5922 8.69051 14.5366 9.31243 13.9147L10.2406 12.9863L10.2401 17H6.10372C3.83838 17 2.00195 15.2132 2.00195 13.009C2.00195 10.8048 3.83838 9.01798 6.10375 9.01798L6.19256 9.01799C6.48467 6.25494 8.47989 4 12 4ZM11.2409 10.5713L11.2397 20.2562C11.2397 20.6704 11.5755 21.0062 11.9897 21.0062C12.4039 21.0062 12.7397 20.6704 12.7397 20.2562L12.7383 10.5481L15.3947 13.2077L15.4788 13.2803C15.4979 13.2944 15.5175 13.3076 15.5376 13.3197C15.585 13.3484 15.6349 13.3713 15.6863 13.3885C15.9475 13.476 16.2474 13.4157 16.4554 13.2077C16.7483 12.9148 16.7483 12.4399 16.4554 12.147L12.5303 8.22196L12.4462 8.14934C12.4044 8.11827 12.36 8.09213 12.3139 8.07091C12.0368 7.94328 11.6979 7.99362 11.4696 8.22193L7.54456 12.147L7.47195 12.2311C7.25409 12.5247 7.2783 12.9414 7.54456 13.2077L7.62868 13.2803C7.64703 13.2939 7.66586 13.3066 7.6851 13.3183C7.73321 13.3476 7.78392 13.371 7.83617 13.3885C8.0974 13.476 8.39724 13.4157 8.60528 13.2077L11.2409 10.5713Z"
                                                        fill="#076281" />
                                                </svg>
                                                <div>
                                                    <p class="font-bold">Unggah Foto Produk</p>
                                                    <p class="text-gray-500 text-sm">SVG, PNG, or JPG (max. 15 Mb)</p>
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <label for="foto_produk_2_brand">
                                                    <p
                                                        class="text-orient-800 cursor-pointer border px-4 py-2 rounded-xl border-orient-800 bg-white">
                                                        Pilih file</p>
                                                    <input required type="file" id="foto_produk_2_brand"
                                                        name="foto_produk_2_brand" class="hidden"
                                                        accept=".svg, .png, .jpg">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="flex justify-between flex-wrap">
                                    <div class="width-100">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Jenis Produk 3<span class="text-red-400">*</span>
                                        </label>
                                        <div class="flex items-center gap-4">
                                            <input name="jenis_produk_3_brand"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                placeholder="Masukkan jenis produk" autocomplete="off"
                                                required></input>
                                        </div>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            HS Code <span class="text-red-400">*</span>
                                        </label>
                                        <input name="hscode3_perusahaan"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            placeholder="Masukkan HS code" autocomplete="off" required></input>
                                        <div class="mt-1 text-xs">Informasi terkait HS Code dapat ditanyakan langsung kepada Nasabah atau kunjungi website <a
                                                href="https://insw.go.id/intr" target="_blank"
                                                class="text-orient-800 font-semibold">https://insw.go.id/intr</a></div>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Unggah Foto Produk Unggulan <span class="text-red-400">*</span>
                                        </label>
                                        <div
                                            class="flex file justify-between p-4 border border-dashed bg-gray-50 rounded-lg">
                                            <div class="flex gap-6 items-center" id="foto_produk_3_brand_label">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M12 4C15.5201 4 17.517 6.27298 17.8075 9.01799L17.8963 9.01798C20.1616 9.01798 21.9981 10.8048 21.9981 13.009C21.9981 15.2132 20.1616 17 17.8963 17H13.7392L13.7386 12.9647L14.7133 13.9405L14.8533 14.0614L14.8829 14.0834C15.5688 14.5922 16.5405 14.5367 17.1625 13.9148C17.8459 13.2313 17.8459 12.1233 17.1625 11.4399L13.2115 7.48892L13.0717 7.36823L13.042 7.34623C12.3562 6.83736 11.3844 6.89291 10.7625 7.51483L6.81155 11.4658L6.69087 11.6056L6.66887 11.6352C6.16 12.3211 6.21554 13.2928 6.83746 13.9148L6.86337 13.9407L7.00317 14.0614L7.03281 14.0834C7.71864 14.5922 8.69051 14.5366 9.31243 13.9147L10.2406 12.9863L10.2401 17H6.10372C3.83838 17 2.00195 15.2132 2.00195 13.009C2.00195 10.8048 3.83838 9.01798 6.10375 9.01798L6.19256 9.01799C6.48467 6.25494 8.47989 4 12 4ZM11.2409 10.5713L11.2397 20.2562C11.2397 20.6704 11.5755 21.0062 11.9897 21.0062C12.4039 21.0062 12.7397 20.6704 12.7397 20.2562L12.7383 10.5481L15.3947 13.2077L15.4788 13.2803C15.4979 13.2944 15.5175 13.3076 15.5376 13.3197C15.585 13.3484 15.6349 13.3713 15.6863 13.3885C15.9475 13.476 16.2474 13.4157 16.4554 13.2077C16.7483 12.9148 16.7483 12.4399 16.4554 12.147L12.5303 8.22196L12.4462 8.14934C12.4044 8.11827 12.36 8.09213 12.3139 8.07091C12.0368 7.94328 11.6979 7.99362 11.4696 8.22193L7.54456 12.147L7.47195 12.2311C7.25409 12.5247 7.2783 12.9414 7.54456 13.2077L7.62868 13.2803C7.64703 13.2939 7.66586 13.3066 7.6851 13.3183C7.73321 13.3476 7.78392 13.371 7.83617 13.3885C8.0974 13.476 8.39724 13.4157 8.60528 13.2077L11.2409 10.5713Z"
                                                        fill="#076281" />
                                                </svg>
                                                <div>
                                                    <p class="font-bold">Unggah Foto Produk</p>
                                                    <p class="text-gray-500 text-sm">SVG, PNG, or JPG (max. 15 Mb)</p>
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <label for="foto_produk_3_brand">
                                                    <p
                                                        class="text-orient-800 cursor-pointer border px-4 py-2 rounded-xl border-orient-800 bg-white">
                                                        Pilih file</p>
                                                    <input required type="file" id="foto_produk_3_brand"
                                                        name="foto_produk_3_brand" class="hidden"
                                                        accept=".svg, .png, .jpg">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="mb-4 p-4 mt-8 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                <div class="text-tosca text-base font-semibold leading-normal">Kapasitas Produksi dan
                                    Minimum Order Quantity (MOQ)</div>
                                <div class="flex justify-between flex-wrap">
                                    <div class="width-70">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Kapasitas Produksi (Per-Tahun) <span class="text-red-400">*</span>
                                        </label>
                                        <input type="number" name="produk_kapasitas"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            required placeholder="Masukkan kapasitas produksi" autocomplete="off"
                                            onkeydown="javascript: return event.keyCode == 69 ? false : true" />
                                    </div>
                                    <div class="width-30 md-mt-6">
                                        <label for="fullName" class="block text-gray-700 text-sm font-semibold mb-2">
                                            Satuan <span class="text-red-400">*</span>
                                        </label>
                                        <select name="jenis_satuan_kapasitas"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full">
                                            <option value="kg">Kg</option>
                                            <option value="ton">Ton</option>
                                            <option value="metric_ton">Metric Ton</option>
                                            <option value="meter">Meter</option>
                                            <option value="meter" class="ordinal">Meter Cubic</option>
                                            <option value="liter">Liter</option>
                                            <option value="pcs">Pcs</option>
                                            <option value="kontainer_20ft">Kontainer 20ft</option>
                                            <option value="kontainer_40ft">Kontainer 40ft</option>
                                        </select>
                                    </div>
                                    <div class="width-70 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Minimum Order Quantity (MOQ) <span class="text-red-400">*</span>
                                        </label>
                                        <input type="number" name="produk_min_qty"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            required placeholder="Masukkan minimum order quantity (MOQ)"
                                            autocomplete="off"
                                            onkeydown="javascript: return event.keyCode == 69 ? false : true" />
                                    </div>
                                    <div class="width-30 mt-6">
                                        <label for="fullName" class="block text-gray-700 text-sm font-semibold mb-2">
                                            Satuan <span class="text-red-400">*</span>
                                        </label>
                                        <select name="jenis_satuan_order"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full">
                                            <option value="kg">Kg</option>
                                            <option value="ton">Ton</option>
                                            <option value="metric_ton">Metric Ton</option>
                                            <option value="meter">Meter</option>
                                            <option value="meter" class="ordinal">Meter Cubic</option>
                                            <option value="liter">Liter</option>
                                            <option value="pcs">Pcs</option>
                                            <option value="kontainer_20ft">Kontainer 20ft</option>
                                            <option value="kontainer_40ft">Kontainer 40ft</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 p-4 mt-8 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                <div class="text-tosca text-base font-semibold leading-normal">Total dan Persentase
                                    Omzet</div>
                                <div class="flex justify-between flex-wrap">
                                    <div class="width-100">
                                        <label
                                            class="text-gray-700 text-sm font-semibold mb-2 flex justify-between omset">
                                            <div>
                                                Total Omzet per-Tahun IDR <span class="text-red-400">*</span>
                                            </div>
                                            <div class="text-gray-400">
                                                (Dari Total Omzet Domestik + Export)
                                            </div>
                                        </label>
                                        <div class="relative">
                                            <input type="text" id="currencyInput" oninput="formatCurrency(this)"
                                                name="omzet_total_all" required
                                                placeholder="Masukkan total omzet per-tahun" autocomplete="off"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full padding-left-5"></input>
                                            <div class="absolute-center text-gray-500">IDR</div>
                                        </div>
                                    </div>
                                    <div class="width-100 mt-6">
                                        <label
                                            class="text-gray-700 text-sm font-semibold mb-2 flex justify-between omset">
                                            <div>
                                                Persentase Omzet Ekspor (%) <span class="text-red-400">*</span>
                                            </div>
                                            <div class="text-gray-400">
                                                (Dari Total Omzet per-Tahun)
                                            </div>
                                        </label>
                                        <div class="relative">
                                            <input type="number" name="omzet_total_export" required
                                                placeholder="Masukkan persentase omzet ekspor (%)" autocomplete="off"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full padding-right-5"></input>
                                            <div class="absolute-center-right text-gray-500">%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 p-4 mt-8 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                <div class="text-tosca text-base font-semibold leading-normal">Top 5 Negara Tujuan
                                    Ekspor dan Nilai Ekspor Per-Negara</div>
                                <div class="flex justify-between items-center export">
                                    <div class="width-30">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Negara Tujuan Ekspor 1 <span class="text-red-400">*</span>
                                        </label>
                                        <input type="text" name="omzet_intExport_1"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            placeholder="Masukkan negara tujuan ekspor" autocomplete="off" required />
                                    </div>
                                    <div class="width-10 mt-6">Sebanyak</div>
                                    <div class="width-30">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Persentase Omzet Ekspor <span class="text-red-400">*</span>
                                        </label>
                                        <div class="flex items-center gap-4">
                                            <input type="number" name="omzet_export_1"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                placeholder="Persentase" autocomplete="off" required></input>
                                        </div>
                                    </div>
                                    <div class="width-30 mt-6">% dari total omzet ekspor</div>
                                </div>
                                <div class="flex justify-between items-center export">
                                    <div class="width-30">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Negara Tujuan Ekspor 2
                                        </label>
                                        <input type="text" name="omzet_intExport_2"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            placeholder="Masukkan negara tujuan ekspor" autocomplete="off" />
                                    </div>
                                    <div class="width-10 mt-6">Sebanyak</div>
                                    <div class="width-30">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Persentase Omzet Ekspor
                                        </label>
                                        <div class="flex items-center gap-4">
                                            <input type="number" name="omzet_export_2"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                placeholder="Persentase" autocomplete="off"></input>
                                        </div>
                                    </div>
                                    <div class="width-30 mt-6">% dari total omzet ekspor</div>
                                </div>
                                <div class="flex justify-between items-center export">
                                    <div class="width-30">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Negara Tujuan Ekspor 3
                                        </label>
                                        <input type="text" name="omzet_intExport_3"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            placeholder="Masukkan negara tujuan ekspor" autocomplete="off" />
                                    </div>
                                    <div class="width-10 mt-6">Sebanyak</div>
                                    <div class="width-30">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Persentase Omzet Ekspor
                                        </label>
                                        <div class="flex items-center gap-4">
                                            <input type="number" name="omzet_export_3"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                placeholder="Persentase" autocomplete="off"></input>
                                        </div>
                                    </div>
                                    <div class="width-30 mt-6">% dari total omzet ekspor</div>
                                </div>
                                <div class="flex justify-between items-center export">
                                    <div class="width-30">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Negara Tujuan Ekspor 4
                                        </label>
                                        <input type="text" name="omzet_intExport_4"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            placeholder="Masukkan negara tujuan ekspor" autocomplete="off" />
                                    </div>
                                    <div class="width-10 mt-6">Sebanyak</div>
                                    <div class="width-30">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Persentase Omzet Ekspor
                                        </label>
                                        <div class="flex items-center gap-4">
                                            <input type="number" name="omzet_export_4"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                placeholder="Persentase" autocomplete="off"></input>
                                        </div>
                                    </div>
                                    <div class="width-30 mt-6">% dari total omzet ekspor</div>
                                </div>
                                <div class="flex justify-between items-center export">
                                    <div class="width-30">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Negara Tujuan Ekspor 5
                                        </label>
                                        <input type="text" name="omzet_intExport_5"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            placeholder="Masukkan negara tujuan ekspor" autocomplete="off" />
                                    </div>
                                    <div class="width-10 mt-6">Sebanyak</div>
                                    <div class="width-30">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Persentase Omzet Ekspor
                                        </label>
                                        <div class="flex items-center gap-4">
                                            <input type="number" name="omzet_export_5"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                placeholder="Persentase" autocomplete="off"></input>
                                        </div>
                                    </div>
                                    <div class="width-30 mt-6">% dari total omzet ekspor</div>
                                </div>
                                <div class="flex justify-between items-center export">
                                    <div class="width-30">













                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Negara Tujuan Ekspor Lainya
                                        </label>
                                        <input type="text"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            placeholder="Bisa lebih dari satu negara (Jika ada)" autocomplete="off" />
                                    </div>
                                    <div class="width-10 mt-6">Sebanyak</div>
                                    <div class="width-30">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Persentase Omzet Ekspor
                                        </label>
                                        <div class="flex items-center gap-4">
                                            <input type="number"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                placeholder="Persentase" autocomplete="off"></input>
                                        </div>
                                    </div>
                                    <div class="width-30 mt-6">% dari total omzet ekspor</div>
                                </div>
                            </div>
                            <div class="mb-4 p-4 mt-8 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                <div class="text-tosca text-base font-semibold leading-normal">Inconterm</div>
                                <div class="flex justify-between flex-wrap">
                                    <div class="width-50">
                                        <label class="inline-flex items-start">
                                            <input name="incoterms_ex_works" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Ex Works (EXW)</span>
                                        </label>
                                    </div>
                                    <div class="width-50 md-mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="incoterms_delivered_duty_paid" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Delivered Duty Paid (DDP)</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="incoterms_free_carrier" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Free Carrier (FCA)</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="incoterms_carriage_paid_to" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Carriage Paid To (CPT)</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="incoterms_free_on_board" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Free on Board (FOB)</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="incoterms_delivered_at_terminal" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Delivered at Terminal (DAT)</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="incoterms_cost_and_freight" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Cost and Freight (CFR)</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="incoterms_delivered_at_place" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Delivery at Place (DAP)</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="incoterms_cost_insurance_and_freight" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Cost Insurance and Freight (CIF)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 p-4 mt-8 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                <div class="text-tosca text-base font-semibold leading-normal">Payment Term</div>
                                <div class="flex justify-between flex-wrap">
                                    <div class="width-50">
                                        <label class="inline-flex items-start">
                                            <input name="paymentterms_tt" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Cash in Advance (Telegraphic
                                                Transfer/TT)</span>
                                        </label>
                                    </div>
                                    <div class="width-50 md-mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="paymentterms_open_account" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Open Account</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="paymentterms_lc" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Letter Of Credit (L/C)</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="paymentterms_documentary_collection" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Document Collection (D/C)</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="paymentterms_consignment" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Consignment</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- INFORMASI PERBANKAN -->
                        <div @click="openSection = (openSection === 5) ? 6 : 5"
                            class="mb-2 p-2 text-xl w-fullrounded-md px-6 cursor-pointer flex justify-between items-center border-bottom-tosca">
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="23"
                                    viewBox="0 0 24 23" fill="none">
                                    <path
                                        d="M24 5.09982V5.89982C24 6.0059 23.9579 6.10765 23.8828 6.18266C23.8078 6.25768 23.7061 6.29982 23.6 6.29982H22.4V6.89982C22.4 7.23117 22.1313 7.49982 21.8 7.49982H2.2C1.86865 7.49982 1.6 7.23117 1.6 6.89982V6.29982H0.4C0.293913 6.29982 0.192172 6.25768 0.117157 6.18266C0.0421427 6.10765 0 6.0059 0 5.89982V5.09982C5.72072e-07 5.02068 0.0234739 4.94333 0.06745 4.87754C0.111426 4.81175 0.173929 4.76048 0.24705 4.73022L11.847 0.330218C11.945 0.289667 12.055 0.289667 12.1529 0.330218L23.753 4.73022C23.8261 4.76048 23.8886 4.81175 23.9326 4.87754C23.9765 4.94333 24 5.02068 24 5.09982ZM22.8 20.2998H1.2C0.53725 20.2998 0 20.8371 0 21.4998V22.2998C0 22.4059 0.0421427 22.5076 0.117157 22.5827C0.192172 22.6577 0.293913 22.6998 0.4 22.6998H23.6C23.7061 22.6998 23.8078 22.6577 23.8828 22.5827C23.9579 22.5076 24 22.4059 24 22.2998V21.4998C24 20.8371 23.4627 20.2998 22.8 20.2998ZM4 8.29982V17.8998H2.2C1.86865 17.8998 1.6 18.1685 1.6 18.4998V19.4998H22.4V18.4998C22.4 18.1685 22.1313 17.8998 21.8 17.8998H20V8.29982H16.8V17.8998H13.6V8.29982H10.4V17.8998H7.2V8.29982H4Z"
                                        :fill="(openSection === 5) ? '#076281' : '#076281'" />
                                </svg>
                                <div>
                                    <h2 :class="openSection === 5 ? 'text-orient-800' : 'text-tosca'"
                                        class="font-bold">Informasi Perbankan dan Pengelola</h2>
                                    <p class="text-sm text-tertiery-400 font-normal">Informasi perbankan dan pengelola
                                        diisi dengan data penggunaan produk BNI dan identitas petugas pengelola</p>
                                </div>
                            </div>
                            <div :class="openSection === 5 ? '' : 'rotate-180'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_4_102349)">
                                        <path d="M18 15L12 9L6 15" stroke="#076281" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4_102349">
                                            <rect width="24" height="24" fill="white"
                                                transform="matrix(-1 0 0 -1 24 24)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div x-show="openSection === 5" class="transition-all duration-300 ease-in-out transform"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95">
                            <div class="mb-4 p-4 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                <div class="text-tosca text-base font-semibold leading-normal">Data Pengelola</div>
                                <div class="flex justify-between flex-wrap">
                                    <div class="width-50">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Nomor CIF <span class="text-red-400">*</span>
                                        </label>
                                        <input type="number" name="cif_admin"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            required autocomplete="off" placeholder="Masukkan nomor CIF"
                                            onkeydown="javascript: return event.keyCode == 69 ? false : true" />
                                    </div>
                                    <div class="width-50 md-mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Nama Pengelola <span class="text-red-400">*</span>
                                        </label>
                                        <input type="text" name="nama_admin"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            required placeholder="Masukkan nama pengelola" autocomplete="off" />
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Nomor NPP <span class="text-red-400">*</span>
                                        </label>
                                        <div class="relative">
                                            <input type="text" name="npp_admin"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full pl-11"
                                                required />
                                            <div class="absolute-center text-gray-500 z-20">P0-</div>
                                        </div>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                                            Nomor Handphone <span class="text-red-400">*</span>
                                        </label>
                                        <div class="relative">
                                            <input type="text" name="hp_admin"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full pl-11"
                                                required />
                                            <div class="absolute-center text-gray-500 z-20">+62</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 p-4 mt-8 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                <div class="text-tosca text-base font-semibold leading-normal">
                                    Produk Perbankan Lain Yang Digunakan
                                </div>
                                <div class="flex justify-between flex-wrap">
                                    <div class="width-50">
                                        <label class="inline-flex items-start">
                                            <input name="taplus_admin" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Taplus Bisnis</span>
                                        </label>
                                    </div>
                                    <div class="width-50 md-mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="c3_admin" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">C3</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="payroll_admin" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">Payroll</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="bnidirect_admin" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">BNI Direct</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="ki_admin" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">KI</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="lc_admin" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">L/C</span>
                                        </label>
                                    </div>
                                    <div class="width-50 mt-6">
                                        <label class="inline-flex items-start">
                                            <input name="kmk_admin" type="checkbox"
                                                class="form-checkbox h-5 w-5mt-05" unchecked value="1" />
                                            <span class="ml-2 text-gray-700">KMK</span>
                                        </label>
                                    </div>
                                    <div class="width-100 mt-6">
                                        <input type="text" name="phr_lainya_admin"
                                            class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                            autocomplete="off" placeholder="Produk perbankan lainnya" />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 p-4 mt-8 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                <div class="text-tosca text-base font-semibold leading-normal">Source Nasabah</div>
                                <div class="flex justify-between flex-wrap source" x-data="{ nasabahSource: false, lainnyaSource: false }">
                                    <div class="width-50 flex flex-col">
                                        <div class="flex items-center mb-6">
                                            <label class="w-6/12 inline-flex items-start">
                                                <input name="source_lainya_admin" type="radio" id="d_sbp"
                                                    onclick="sourceradio()"
                                                    @click="nasabahSource = false; lainnyaSource = false;"
                                                    class="h-5 w-5 text-orient-800 mt-05" unchecked />
                                                <span class="ml-2 text-gray-700"> Debitur Segmen SBP</span>
                                            </label>
                                            <input type="text" name="sbp_admin" id="sbp"
                                                onclick="sourceradio()"
                                                class="w-6/12 outline-none focus:outline-none py-1 px-2 rounded-md bg-white border-color-75 disabled:bg-neutral-100 text-xs"
                                                autocomplete="off" placeholder="Nama Cabang Pembuka Rekening"
                                                disabled />
                                        </div>
                                        <div class="flex items-center mb-6">
                                            <label class="w-6/12 inline-flex items-start">
                                                <input name="source_lainya_admin" type="radio" id="d_rpb"
                                                    onclick="sourceradio()"
                                                    @click="nasabahSource = false; lainnyaSource = false;"
                                                    class="h-5 w-5 text-orient-800 mt-05" unchecked />
                                                <span class="ml-2 text-gray-700">Debitur Segmen RPB</span>
                                            </label>
                                            <input type="text" name="rpb_admin" id="rpb"
                                                class="w-6/12 outline-none focus:outline-none py-1 px-2 rounded-md bg-white border-color-75 disabled:bg-neutral-100 text-xs"
                                                autocomplete="off" placeholder="Nama Cabang Pembuka Rekening"
                                                disabled />
                                        </div>
                                        <div class="flex items-center mb-6">
                                            <label class="w-6/12 inline-flex items-start"
                                                :class="nasabahSource === false ? 'margin-top-05' : ''">
                                                <input name="source_lainya_admin" type="radio" id="d_cmb"
                                                    onclick="sourceradio()"
                                                    @click="nasabahSource = false; lainnyaSource = false;"
                                                    class="h-5 w-5 text-orient-800 mt-05" unchecked />
                                                <span class="ml-2 text-gray-700">Debitur Segmen CMB</span>
                                            </label>
                                            <input type="text" name="cmb_admin" id="cmb"
                                                class="w-6/12 outline-none focus:outline-none py-1 px-2 rounded-md bg-white border-color-75 disabled:bg-neutral-100 text-xs"
                                                autocomplete="off" placeholder="Nama Cabang Pembuka Rekening"
                                                disabled />
                                        </div>

                                        <div class="flex items-center mb-6">
                                            <label class="w-6/12 inline-flex items-start">
                                                <input name="source_lainya_admin" type="radio" id="d_enb"
                                                    onclick="sourceradio()"
                                                    @click="nasabahSource = false; lainnyaSource = false;"
                                                    class="h-5 w-5 text-orient-800 mt-05" unchecked />
                                                <span class="ml-2 text-gray-700">Debitur Segmen ENB</span>
                                            </label>
                                            <input type="text" name="enb_admin" id="enb"
                                                class="w-6/12 outline-none focus:outline-none py-1 px-2 rounded-md bg-white border-color-75 disabled:bg-neutral-100 text-xs"
                                                autocomplete="off" placeholder="Nama Cabang Pembuka Rekening"
                                                disabled />
                                        </div>
                                    </div>
                                    <div class="width-50 md-mt-6">
                                        <div class="flex items-center mb-6">
                                            <label class="w-6/12 inline-flex items-start">
                                                <input name="source_lainya_admin" type="radio" id="d_nsb"
                                                    onclick="sourceradio()"
                                                    @click="nasabahSource = false; lainnyaSource = false;"
                                                    class="h-5 w-5 text-orient-800 mt-05" unchecked />
                                                <span class="ml-2 text-gray-700">Nasabah (Non-Debitur)</span>
                                            </label>
                                            <input type="text" name="non_nasabah_admin" id="nsb"
                                                class="w-6/12 outline-none focus:outline-none py-1 px-2 rounded-md bg-white border-color-75 disabled:bg-neutral-100 text-xs"
                                                autocomplete="off" placeholder="Nama Cabang Pembuka Rekening"
                                                disabled />
                                        </div>
                                        <div class="flex items-start mb-6">
                                            <label class="w-6/12 inline-flex items-start">
                                                <input name="source_lainya_admin" type="radio" id="d_sl"
                                                    onclick="sourceradio()"
                                                    @click="nasabahSource = false; lainnyaSource = false;"
                                                    class="h-5 w-5 text-orient-800 mt-05" unchecked
                                                    value="enb_admin" />
                                                <div class="grid">
                                                    <span class="ml-2 text-gray-700">Source Lainya</span>
                                                    <span class="ml-2 text-gray-700 text-xs">*Jika belum menjadi
                                                        nasabah mohon disebutkan nama sumber datanya.
                                                        <br><br>Contoh : Data lead Bea Cukai
                                                    </span>

                                                </div>
                                            </label>
                                            <input type="text" name="source_lainya_admin" id="sl"
                                                class="w-6/12 outline-none focus:outline-none py-1 px-2 rounded-md bg-white border-color-75 disabled:bg-neutral-100 text-xs"
                                                autocomplete="off" placeholder="Nama sumber data" disabled />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 mb-4">
                        <label class="inline-flex items-start">
                            <input name="confirm" type="checkbox" class="form-checkbox h-5 w-5mt-05" unchecked
                                value="1" required required />
                            <span class="ml-2 text-tosca font-bold">Dengan ini saya menyatakan bahwa data yang
                                diberikan benar berdasarkan kondisi usaha Nasabah yang sesungguhnya dan memberikan hak
                                kepada BNI untuk dapat menggunakan data tersebut dalam rangka perluasan akses pasar
                                ekspor.</span>
                        </label>
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
                            <button type="button" @click="modalSubmit = true" onclick="onCheckRequired()"
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
                                Simpan Data
                            </button>
                    </div>
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
                                <a href="/welcome/greetings"
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
                <div class="progress mb-4 p-4 rounded-xl border-color-75 bg-white shadow">
                    <h4 class="text-tosca font-bold pb-4 border-b-2">Progress Pengisian</h4>
                    <div class="progress-main flex flex-col">
                        <div class="cursor-pointer mt-2 flex gap-2 items-center progress-item"
                            @click="openSection = (openSection === 1) ? 0 : 1">
                            <div :class="(openSection === 1) ? 'progress-active' : ''"
                                class="flex flex-col items-center progress-item-indicator">
                                <div class="line opacity-0"></div>
                                <div class="round-icon p-2 rounded-full">
                                    <svg class="scale-110" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_49_9539)">
                                            <path
                                                d="M12 4.375C13.45 4.375 14.625 5.55 14.625 7C14.625 8.45 13.45 9.625 12 9.625C10.55 9.625 9.375 8.45 9.375 7C9.375 5.55 10.55 4.375 12 4.375ZM12 15.625C15.7125 15.625 19.625 17.45 19.625 18.25V19.625H4.375V18.25C4.375 17.45 8.2875 15.625 12 15.625ZM12 2C9.2375 2 7 4.2375 7 7C7 9.7625 9.2375 12 12 12C14.7625 12 17 9.7625 17 7C17 4.2375 14.7625 2 12 2ZM12 13.25C8.6625 13.25 2 14.925 2 18.25V20.75C2 21.4375 2.5625 22 3.25 22H20.75C21.4375 22 22 21.4375 22 20.75V18.25C22 14.925 15.3375 13.25 12 13.25Z"
                                                :fill="(openSection === 1) ? '#076281' : '#d1d1d1'" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_49_9539">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="line"></div>
                            </div>
                            <p class="font-bold">Informasi Personal</p>
                        </div>
                        <div class="cursor-pointer flex gap-2 items-center progress-item"
                            @click="openSection = (openSection === 2) ? 0 : 2">
                            <div :class="(openSection === 2) ? 'progress-active' : ''"
                                class="flex flex-col items-center progress-item-indicator">
                                <div class="line"></div>
                                <div class="round-icon p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.8 0C12.7882 0 14.4 1.61177 14.4 3.6L14.4001 5.00481C14.7754 4.87217 15.1793 4.8 15.6 4.8H20.4C22.3882 4.8 24 6.41178 24 8.4V20.4C24 22.3882 22.3882 24 20.4 24H3.6C1.61177 24 0 22.3882 0 20.4V3.6C0 1.61177 1.61177 0 3.6 0H10.8ZM10.8 2.4H3.6C2.93726 2.4 2.4 2.93726 2.4 3.6V20.4C2.4 21.0627 2.93726 21.6 3.6 21.6H12V3.6C12 2.93726 11.4627 2.4 10.8 2.4ZM20.4 7.2H15.6C14.9373 7.2 14.4 7.73726 14.4 8.4V21.6H20.4C21.0627 21.6 21.6 21.0627 21.6 20.4V8.4C21.6 7.73726 21.0627 7.2 20.4 7.2ZM8.4 14.4C9.06274 14.4 9.6 14.9373 9.6 15.6C9.6 16.2627 9.06274 16.8 8.4 16.8H6C5.33726 16.8 4.8 16.2627 4.8 15.6C4.8 14.9373 5.33726 14.4 6 14.4H8.4ZM19.2 14.4C19.8627 14.4 20.4 14.9373 20.4 15.6C20.4 16.2627 19.8627 16.8 19.2 16.8H16.8C16.1373 16.8 15.6 16.2627 15.6 15.6C15.6 14.9373 16.1373 14.4 16.8 14.4H19.2ZM8.4 9.6C9.06274 9.6 9.6 10.1373 9.6 10.8C9.6 11.4627 9.06274 12 8.4 12H6C5.33726 12 4.8 11.4627 4.8 10.8C4.8 10.1373 5.33726 9.6 6 9.6H8.4ZM19.2 9.6C19.8627 9.6 20.4 10.1373 20.4 10.8C20.4 11.4627 19.8627 12 19.2 12H16.8C16.1373 12 15.6 11.4627 15.6 10.8C15.6 10.1373 16.1373 9.6 16.8 9.6H19.2ZM8.4 4.8C9.06274 4.8 9.6 5.33726 9.6 6C9.6 6.66274 9.06274 7.2 8.4 7.2H6C5.33726 7.2 4.8 6.66274 4.8 6C4.8 5.33726 5.33726 4.8 6 4.8H8.4Z"
                                            :fill="(openSection === 2) ? '#076281' : '#d1d1d1'" />
                                    </svg>
                                </div>
                                <div class="line"></div>
                            </div>
                            <p class="font-bold">Informasi Perusahaan</p>
                        </div>
                        <div class="cursor-pointer flex gap-2 items-center progress-item"
                            @click="openSection = (openSection === 3) ? 0 : 3">
                            <div :class="(openSection === 3) ? 'progress-active' : ''"
                                class="flex flex-col items-center progress-item-indicator">
                                <div class="line"></div>
                                <div class="round-icon p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M8.3999 5.3999H14.3999V7.7999H8.3999V5.3999ZM14.3999 10.1999H8.3999V12.5999H14.3999V10.1999Z"
                                            :fill="(openSection === 3) ? '#076281' : '#d1d1d1'" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M19.2 19.8001C19.2 20.7549 18.8207 21.6705 18.1456 22.3457C17.4705 23.0208 16.5548 23.4001 15.6 23.4001H3.6C2.64522 23.4001 1.72955 23.0208 1.05442 22.3457C0.379285 21.6705 0 20.7549 0 19.8001L0 18.0001C0 17.5227 0.189642 17.0649 0.527208 16.7273C0.864773 16.3897 1.32261 16.2001 1.8 16.2001H3.6V4.2001C3.6 3.24532 3.97929 2.32964 4.65442 1.65451C5.32955 0.979382 6.24522 0.600098 7.2 0.600098H20.4C20.8728 0.600098 21.3409 0.693214 21.7777 0.874131C22.2144 1.05505 22.6113 1.32022 22.9456 1.65451C23.2799 1.9888 23.5451 2.38567 23.726 2.82244C23.9069 3.25921 24 3.72734 24 4.2001C24 4.67286 23.9069 5.14099 23.726 5.57776C23.5451 6.01453 23.2799 6.41139 22.9456 6.74568C22.6113 7.07997 22.2144 7.34515 21.7777 7.52606C21.3409 7.70698 20.8728 7.8001 20.4 7.8001H19.2V19.8001ZM6 4.2001C6 3.88184 6.12643 3.57661 6.35147 3.35157C6.57652 3.12653 6.88174 3.0001 7.2 3.0001H17.004C16.872 3.3757 16.8 3.7801 16.8 4.2001V19.8001C16.8 20.1184 16.6736 20.4236 16.4485 20.6486C16.2235 20.8737 15.9183 21.0001 15.6 21.0001C15.2817 21.0001 14.9765 20.8737 14.7515 20.6486C14.5264 20.4236 14.4 20.1184 14.4 19.8001V16.2001H6V4.2001ZM20.4 3.0001C20.0817 3.0001 19.7765 3.12653 19.5515 3.35157C19.3264 3.57661 19.2 3.88184 19.2 4.2001V5.4001H20.4C20.7183 5.4001 21.0235 5.27367 21.2485 5.04863C21.4736 4.82358 21.6 4.51836 21.6 4.2001C21.6 3.88184 21.4736 3.57661 21.2485 3.35157C21.0235 3.12653 20.7183 3.0001 20.4 3.0001ZM12 19.8001C12 20.2201 12.072 20.6245 12.204 21.0001H3.6C3.28174 21.0001 2.97652 20.8737 2.75147 20.6486C2.52643 20.4236 2.4 20.1184 2.4 19.8001V18.6001H12V19.8001Z"
                                            :fill="(openSection === 3) ? '#076281' : '#d1d1d1'" />
                                    </svg>
                                </div>
                                <div class="line"></div>
                            </div>
                            <p class="font-bold">Informasi Legalitas</p>
                        </div>
                        <div class="cursor-pointer flex gap-2 items-center progress-item"
                            @click="openSection = (openSection === 4) ? 0 : 4">
                            <div :class="(openSection === 4) ? 'progress-active' : ''"
                                class="flex flex-col items-center progress-item-indicator">
                                <div class="line"></div>
                                <div class="round-icon p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path d="M0 0H24V24H0V0Z" fill="white" fill-opacity="0.01" />
                                        <path
                                            d="M2 7L1.55279 6.10555C1.214 6.27495 1 6.62125 1 7H2ZM12 2L12.4472 1.10557C12.1657 0.964809 11.8343 0.964809 11.5528 1.10557L12 2ZM22 7H23C23 6.62125 22.786 6.27495 22.4472 6.10555L22 7ZM22 17L22.4472 17.8944C22.786 17.725 23 17.3787 23 17H22ZM12 22L11.5528 22.8944C11.8343 23.0352 12.1657 23.0352 12.4472 22.8944L12 22ZM2 17H1C1 17.3787 1.214 17.725 1.55279 17.8944L2 17ZM2.44722 7.89445L12.4472 2.89442L11.5528 1.10557L1.55279 6.10555L2.44722 7.89445ZM21 7V17H23V7H21ZM21.5528 16.1055L11.5528 21.1055L12.4472 22.8944L22.4472 17.8944L21.5528 16.1055ZM12.4472 21.1055L2.44722 16.1055L1.55279 17.8944L11.5528 22.8944L12.4472 21.1055ZM3 17V7H1V17H3ZM22.4472 6.10555L12.4472 1.10557L11.5528 2.89442L21.5528 7.89445L22.4472 6.10555Z"
                                            :fill="(openSection === 4) ? '#076281' : '#d1d1d1'" />
                                        <path d="M2 7L12 12" :stroke="(openSection === 4) ? '#076281' : '#d1d1d1'"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12 22V12" :stroke="(openSection === 4) ? '#076281' : '#d1d1d1'"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M22 7L12 12" :stroke="(openSection === 4) ? '#076281' : '#d1d1d1'"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M17.4474 5.39467C17.9414 5.14767 18.1416 4.54698 17.8947 4.053C17.6477 3.55903 17.047 3.3588 16.553 3.60579L17.4474 5.39467ZM6.55302 8.60577C6.05902 8.85277 5.85882 9.45347 6.10577 9.94742C6.35277 10.4414 6.95347 10.6416 7.44742 10.3947L6.55302 8.60577ZM16.553 3.60579L6.55302 8.60577L7.44742 10.3947L17.4474 5.39467L16.553 3.60579Z"
                                            :fill="(openSection === 4) ? '#076281' : '#d1d1d1'" />
                                    </svg>
                                </div>
                                <div class="line"></div>
                            </div>
                            <p class="font-bold">Informasi Produk</p>
                        </div>
                        <div class="cursor-pointer flex gap-2 items-center progress-item"
                            @click="openSection = (openSection === 5) ? 0 : 5">
                            <div :class="(openSection === 5) ? 'progress-active' : ''"
                                class="flex flex-col items-center progress-item-indicator">
                                <div class="line"></div>
                                <div class="round-icon p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M24 5.59982V6.39982C24 6.5059 23.9579 6.60765 23.8828 6.68266C23.8078 6.75768 23.7061 6.79982 23.6 6.79982H22.4V7.39982C22.4 7.73117 22.1313 7.99982 21.8 7.99982H2.2C1.86865 7.99982 1.6 7.73117 1.6 7.39982V6.79982H0.4C0.293913 6.79982 0.192172 6.75768 0.117157 6.68266C0.0421427 6.60765 0 6.5059 0 6.39982V5.59982C5.72072e-07 5.52068 0.0234739 5.44333 0.06745 5.37754C0.111426 5.31175 0.173929 5.26048 0.24705 5.23022L11.847 0.830218C11.945 0.789667 12.055 0.789667 12.1529 0.830218L23.753 5.23022C23.8261 5.26048 23.8886 5.31175 23.9326 5.37754C23.9765 5.44333 24 5.52068 24 5.59982ZM22.8 20.7998H1.2C0.53725 20.7998 0 21.3371 0 21.9998V22.7998C0 22.9059 0.0421427 23.0076 0.117157 23.0827C0.192172 23.1577 0.293913 23.1998 0.4 23.1998H23.6C23.7061 23.1998 23.8078 23.1577 23.8828 23.0827C23.9579 23.0076 24 22.9059 24 22.7998V21.9998C24 21.3371 23.4627 20.7998 22.8 20.7998ZM4 8.79982V18.3998H2.2C1.86865 18.3998 1.6 18.6685 1.6 18.9998V19.9998H22.4V18.9998C22.4 18.6685 22.1313 18.3998 21.8 18.3998H20V8.79982H16.8V18.3998H13.6V8.79982H10.4V18.3998H7.2V8.79982H4Z"
                                            :fill="(openSection === 5) ? '#076281' : '#d1d1d1'" />
                                    </svg>
                                </div>
                                <div class="line"></div>
                            </div>
                            <p class="font-bold">Informasi Perbankan dan Pengelola</p>
                        </div>
                        <div class="cursor-pointer flex gap-2 items-center progress-item"
                            @click="openSection = (openSection === 6) ? 0 : 6">
                            <div :class="(openSection === 6) ? 'progress-active' : ''"
                                class="flex flex-col items-center progress-item-indicator">
                                <div class="line"></div>
                                <div class="round-icon p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_55_9989)">
                                            <path d="M5 12L10 17L20 7"
                                                :stroke="(openSection === 6) ? '#076281' : '#d1d1d1'"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_55_9989">
                                                <rect width="24" height="24"
                                                    :fill="(openSection === 6) ? '#076281' : '#d1d1d1'" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="line opacity-0"></div>
                            </div>
                            <p class="font-bold">Selesai</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-full bg-white footer">
        <div
            class="container mx-auto pt-6 pb-4 gap-6 w-full flex items-center justify-center text-sm text-neutral-400">
            <p>2024 © PT. Bank Negara Indonesia (Persero), Tbk. All Rights Reserved</p>
        </div>
    </div>

</x-master-layout>
