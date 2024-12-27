<x-app-layout title="Edit Profil {{ $umkm->badan_usaha }}. {{ $umkm->nama_perusahaan }}">
    <div class="flex justify-center items-center">
        <div class="absolute z-10 flex justify-center">
            <div class="text-3xl font-semibold text-white text-center">EDIT INFORMASI NASABAH BERORENTASI EKSPOR</div>
        </div>
        <img src="/img/umkm/core/cover-profil-new.jpg" class="w-full" alt="">
    </div>
    <form action="/umkm/profile/{{ $umkm->id }}" method="POST" enctype="multipart/form-data">
        @method("put")
        @csrf

        <div class="max-w-7xl mx-auto px-5 py-12">

            <div class="shadow-lg w-full py-6 px-14 bg-white rounded-lg">

                <div class="bg-white ">
                    <!-- Page Content -->
                    <div class="bg-white sm:p-8">
                        <div class="pt-6 relative " x-data="{ openSection: 1, modalSubmit: false, modalBack: false, addressSame: false }">

                            <div class="form-container">
                                <!-- DATA PERSONAL -->
                                <div @click="openSection = (openSection === 1) ? 0 : 1"
                                    class="mb-2 p-2 text-base font-bold  uppercase w-fullrounded-md px-6 cursor-pointer flex justify-between items-center border-bottom-tosca">
                                    <div class="flex gap-2">
                                        <svg class="scale-110" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="25" viewBox="0 0 24 25">
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
                                            <h2 :class="openSection === 1 ? 'text-orient-800' : 'text-tosca'"
                                                class="font-bold">
                                                Informasi Personal</h2>
                                            <p class="text-sm text-tertiery-400 font-normal">Informasi personal diisi
                                                dengan
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
                                {{-- DATA PERSONAL --}}
                                <div x-show="openSection === 1"
                                    class="transition-all duration-300 ease-in-out transform px-12"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-300"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95">
                                    <div class="mb-4">
                                        <div class="text-base font-bold  uppercase mb-2">Data Personal</div>
                                        <div class="flex gap-7 py-3">
                                            <div>
                                                <div class="text-base font-medium">Jenis Kelamin</div>
                                                <input name="identitas_personal" type="text" class="border-0 border-b-2 w-40"
                                                    value="{{ $umkm->identitas_personal }}">
                                            </div>
                                            <div>
                                                <div class="text-base font-medium">Nama Nasabah</div>
                                                <input name="nama_personal" type="text" class="border-0 border-b-2 w-40"
                                                    value="{{ $umkm->nama_personal }}">
                                            </div>
                                            <div>
                                                <div class="text-base font-medium">No. Handphone</div>
                                                <input name="no_telp_personal" type="text" class="border-0 border-b-2 w-40"
                                                    value="{{ $umkm->no_telp_personal }}">
                                            </div>
                                        </div>

                                    </div>
                                    <div>
                                        <div class="text-base font-bold  uppercase mb-">Alamat</div>
                                        <div class="grid grid-cols-5 py-3 gap-3">
                                            <div>
                                                <div class="text-base font-medium">Alamat Lengkap</div>
                                                <input name="alamat_personal" type="text" class="border-0 border-b-2 w-40"
                                                    value="{{ $umkm->alamat_personal }}">
                                            </div>
                                            <div>
                                                <div class="text-base font-medium">Kelurahan</div>
                                                <input type="text" class="border-0 border-b-2 w-40"
                                                    value="{{ $umkm->kelurahan_personal }}">
                                            </div>
                                            <div>
                                                <div class="text-base font-medium">Kecamatan</div>
                                                <input name="kecamatan_personal" type="text" class="border-0 border-b-2 w-40"
                                                    value="{{ $umkm->kecamatan_personal }}">
                                            </div>
                                            <div>
                                                <div class="text-base font-medium">Kota / Kabupaten</div>
                                                <input name="kota_personal" type="text" class="border-0 border-b-2 w-40"
                                                    value="{{ $umkm->kota_personal }}">
                                            </div>
                                            <div>
                                                <div class="text-base font-medium">Provinsi</div>
                                                <input name="provinsi_personal" type="text" class="border-0 border-b-2 w-40"
                                                    value="{{ $umkm->provinsi_personal }}">
                                            </div>
                                            <div>
                                                <div class="text-base font-medium">Kode Pos</div>
                                                <input name="kode_pos_personal" type="text" class="border-0 border-b-2 w-40"
                                                    value="{{ $umkm->kode_pos_personal }}">
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>


                            <!-- DATA USAHA -->
                            <div @click="openSection = (openSection === 2) ? 0 : 2"
                                class="mb-2 p-2 text-base font-bold  uppercase w-fullrounded-md px-6 cursor-pointer flex justify-between items-center border-bottom-tosca">
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
                                        <p class="text-sm text-tertiery-400 font-normal">Informasi perusahaan diisi
                                            dengan
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
                            <div x-show="openSection === 2"
                                class="transition-all duration-300 ease-in-out transform px-12"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95">
                                <div class="mb-4">
                                    <div class="text-base font-bold  uppercase mb-2">DATA PERUSAHAAN</div>
                                    <div class="grid grid-cols-3 gap-3 py-3">

                                        <div>
                                            <div class="text-base font-medium">Badan Usaha</div>
                                            <input name="badan_usaha" type="text" name="badan_usaha" class="border-0 border-b-2 w-40"
                                                value="{{ $umkm->badan_usaha }}">
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Nama Perusahaan</div>
                                            <input type="text" name="nama_perusahaan"
                                                class="border-0 border-b-2 w-40"
                                                value="{{ $umkm->nama_perusahaan }}">
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Tahu Berdiri</div>
                                            <input name="berdiri_perusahaan" type="text"
                                                class="border-0 border-b-2 w-40"
                                                value="{{ $umkm->berdiri_perusahaan }}">
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Kategori Perusahaan</div>
                                            <div class="text-base">{{ $umkm->kategori_perusahaan }}
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Nomor Legalitas atau Nomor KTP</div>
                                            <input name="nomor_badan_perusahaan" type="text"
                                                class="border-0 border-b-2 w-40"
                                                value="{{ $umkm->nomor_badan_perusahaan }}">
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Nomor NPWP</div>
                                            <input name="nomor_npwp_perusahaan" type="text"
                                                class="border-0 border-b-2 w-40"
                                                value="{{ $umkm->nomor_npwp_perusahaan }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="text-base font-bold  uppercase mb-2">Kategori & Jenis Industri</div>
                                    <div class="flex gap-7 py-3">
                                        <div>
                                            <div class="text-base font-medium">Kategori Ekportir</div>
                                            <div class="text-base">
                                                <div class="grid gap-2">
                                                    @php
                                                        $incoterms = [
                                                            'Direct' => $umkm->pengolahan_perusahaan,
                                                            'Indirect' => $umkm->perdagangan_perusahaan,
                                                        ];
                                                    @endphp
                                                    @foreach ($incoterms as $term => $value)
                                                        @if ($value == 1)
                                                            {{ $term . ', ' }}
                                                        @elseif($value > 1)
                                                            {{ $value . ', ' }}
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Jenis Industri</div>
                                            <div class="text-base">
                                                @php
                                                    $incoterms = [
                                                        'Pengolahan' => $umkm->pengolahan_perusahaan,
                                                        'Perdagangan' => $umkm->perdagangan_perusahaan,
                                                        'Jasa' => $umkm->jasa_perusahaan,
                                                    ];
                                                @endphp

                                                @foreach ($incoterms as $term => $value)
                                                    @if ($value == 1)
                                                        {{ $term . ', ' }}
                                                    @elseif($value > 1)
                                                        {{ $value . ', ' }}
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="text-base font-bold  uppercase mb-2">Kontak Perusahaan</div>
                                    <div class="grid grid-cols-4 py-3 gap-7">
                                        <div>
                                            <div class="text-base font-medium">Nomor Telepon</div>
                                            <input name="no_telp_perusahaan" type="text"
                                                class="border-0 border-b-2 w-40"
                                                value="{{ $umkm->no_telp_perusahaan }}">
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Email</div>
                                            <input name="email_perusahaan" type="text"
                                                class="border-0 border-b-2 w-40"
                                                value="{{ $umkm->email_perusahaan }}">
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Website</div>
                                            <input name="website_perusahaan" type="text"
                                                class="border-0 border-b-2 w-40"
                                                value="{{ $umkm->website_perusahaan }}">
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Instagram Username</div>
                                            <input name="instagram_perusahaan" type="text"
                                                class="border-0 border-b-2 w-40"
                                                value="{{ $umkm->instagram_perusahaan }}">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="text-base font-bold  uppercase mb-2">Alamat</div>
                                    <div class="grid grid-cols-4 py-3 gap-7">
                                        <div>
                                            <div class="text-base font-medium">Alamat Lengkap</div>
                                            <input name="alamat_perusahaan" type="text"
                                                class="border-0 border-b-2 w-40"
                                                value="{{ $umkm->alamat_perusahaan }}">
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Kelurahan</div>
                                            <input name="kelurahan_perusahaan" type="text"
                                                class="border-0 border-b-2 w-40"
                                                value="{{ $umkm->kelurahan_perusahaan }}">
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Kecamatan</div>
                                            <input name="kecamatan_perusahaan" type="text"
                                                class="border-0 border-b-2 w-40"
                                                value="{{ $umkm->kecamatan_perusahaan }}">
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Kota / Kabupaten</div>
                                            <input name="kota_perusahaan" type="text"
                                                class="border-0 border-b-2 w-40"
                                                value="{{ $umkm->kota_perusahaan }}">
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Provinsi</div>
                                            <input name="provinsi_perusahaan" type="text"
                                                class="border-0 border-b-2 w-40"
                                                value="{{ $umkm->provinsi_perusahaan }}">
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Kode Pos</div>
                                            <input name="kode_pos_perusahaan" type="text"
                                                class="border-0 border-b-2 w-40"
                                                value="{{ $umkm->kode_pos_perusahaan }}">
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <!-- DATA LEGALITAS -->
                            <div @click="openSection = (openSection === 3) ? 0 : 3"
                                class="mb-2 p-2 text-base font-bold  uppercase w-fullrounded-md px-6 cursor-pointer flex justify-between items-center border-bottom-tosca">
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
                                        <p class="text-sm text-tertiery-400 font-normal">Informasi legalitas diisi
                                            dengan
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
                            <div x-show="openSection === 3"
                                class="transition-all duration-300 ease-in-out transform px-12"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95">
                                {{-- EX --}}
                                <div class="mb-4">
                                    <div class="flex gap-7 py-3">
                                        <div>
                                            <div class="text-base font-medium">Export Permit</div>
                                            <div class="text-base">
                                                @php
                                                    $incoterms = [
                                                        'Food and Drug Adminstration (FDA) AMERIKA' => $umkm->export_permit_us_food_and_drug_administration,
                                                        'Japanese Agriculture Standards (JAS) JEPANG' => $umkm->export_permit_japan_japanese_agriculture_standards,
                                                        'Adminstration of Costum China (GACC) - China' => $umkm->export_permit_china_general_administration_of_customs,
                                                        'Korean Food and Drug Adminstration (KFDA) KOREA SELATAN' => $umkm->export_permit_south_korea_korean_food_and_drug_administration,
                                                        'Canada Organic Agriculture' => $umkm->export_permit_japan_japanese_agriculture_standards,
                                                        $umkm->export_permit1_lainya,
                                                        $umkm->export_permit2_lainya,
                                                        $umkm->export_permit3_lainya,
                                                    ];
                                                @endphp

                                                @foreach ($incoterms as $term => $value)
                                                    <ul></ul>
                                                    @if ($value == 1)
                                                        <li>{{ $term . '' }}</li>
                                                    @elseif($value > 1)
                                                        <li>{{ $value . '' }}</li>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                {{-- LEG --}}
                                <div class="mb-4">
                                    <div class="flex gap-7 py-3">
                                        <div class="w-6/12">
                                            <div class="text-base font-medium">Sertifikat Domestik</div>
                                            <div class="text-base">
                                                @php
                                                    $legalcertdom = [
                                                        'Food and Drug Adminstration (FDA) AMERIKA' => $umkm->export_permit_us_food_and_drug_administration,
                                                        'Japanese Agriculture Standards (JAS) JEPANG' => $umkm->export_permit_japan_japanese_agriculture_standards,
                                                        'Adminstration of Costum China (GACC) - China' => $umkm->export_permit_china_general_administration_of_customs,
                                                        'Korean Food and Drug Adminstration (KFDA) KOREA SELATAN' => $umkm->export_permit_south_korea_korean_food_and_drug_administration,
                                                        'Canada Organic Agriculture' => $umkm->export_permit_japan_japanese_agriculture_standards,
                                                        $umkm->legalcert_domestik1_lainya,
                                                        $umkm->legalcert_domestik2_lainya,
                                                        $umkm->legalcert_domestik3_lainya,
                                                    ];
                                                @endphp

                                                @foreach ($legalcertdom as $term => $value)
                                                    <ul class=""></ul>
                                                    @if ($value == 1)
                                                        <li>{{ $term . '' }}</li>
                                                    @elseif($value > 1)
                                                        <li>{{ $value . '' }}</li>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="w-6/12">
                                            <div class="text-base font-medium">Sertifikat Internasional </div>
                                            <div class="text-base">
                                                @php
                                                    $legalcertex = [
                                                        'Hazard Anaylisis and Critical Control Points (HACCP)' => $umkm->legalcert_haccp,
                                                        'United Stated of Departement of Agricurlture (USDA Organic)' => $umkm->legalcert_usda_organic,
                                                        'United Stated of Departement of Agricurlture (USDA Organic)' => $umkm->legalcert_usda,
                                                        'European Union (EU)' => $umkm->legalcert_eu,
                                                        $umkm->legalcert_inter1_lainya,
                                                        $umkm->legalcert_inter2_lainya,
                                                        $umkm->legalcert_inter3_lainya,
                                                    ];
                                                @endphp
                                                @foreach ($legalcertex as $term => $value)
                                                    <ul></ul>
                                                    @if ($value == 1)
                                                        <li>{{ $term . '' }}</li>
                                                    @elseif($value > 1)
                                                        <li>{{ $value . '' }}</li>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                <input
                                                    name="export_permit_south_korea_korean_food_and_drug_administration"
                                                    type="checkbox" class="form-checkbox h-5 w-5mt-05" unchecked
                                                    value="1" />
                                                <span class="ml-2 text-gray-700">Korean Food and Drug Adminstration
                                                    (KFDA)
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
                                <div
                                    class="mb-4 p-4 mt-8 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
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

                                <div
                                    class="mb-4 p-4 mt-8 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                    <div class="text-tosca text-base font-semibold leading-normal">Sertifikat
                                        Internasional
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
                                    <div class="text-tosca text-base font-semibold leading-normal">Sertifikat
                                        Internasional
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
                                class="mb-2 p-2 text-base font-bold  uppercase w-fullrounded-md px-6 cursor-pointer flex justify-between items-center border-bottom-tosca">
                                <div class="flex gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                        viewBox="0 0 24 25" fill="none">
                                        <path d="M0 0.5H24V24.5H0V0.5Z" fill="white" fill-opacity="0.01" />
                                        <path
                                            d="M2 7.5L1.55279 6.60555C1.214 6.77495 1 7.12125 1 7.5H2ZM12 2.5L12.4472 1.60557C12.1657 1.46481 11.8343 1.46481 11.5528 1.60557L12 2.5ZM22 7.5H23C23 7.12125 22.786 6.77495 22.4472 6.60555L22 7.5ZM22 17.5L22.4472 18.3944C22.786 18.225 23 17.8787 23 17.5H22ZM12 22.5L11.5528 23.3944C11.8343 23.5352 12.1657 23.5352 12.4472 23.3944L12 22.5ZM2 17.5H1C1 17.8787 1.214 18.225 1.55279 18.3944L2 17.5ZM2.44722 8.39445L12.4472 3.39442L11.5528 1.60557L1.55279 6.60555L2.44722 8.39445ZM21 7.5V17.5H23V7.5H21ZM21.5528 16.6055L11.5528 21.6055L12.4472 23.3944L22.4472 18.3944L21.5528 16.6055ZM12.4472 21.6055L2.44722 16.6055L1.55279 18.3944L11.5528 23.3944L12.4472 21.6055ZM3 17.5V7.5H1V17.5H3ZM22.4472 6.60555L12.4472 1.60557L11.5528 3.39442L21.5528 8.39445L22.4472 6.60555Z"
                                            :fill="(openSection === 4) ? '#076281' : '#076281'" />
                                        <path d="M2 7.5L12 12.5" :stroke="(openSection === 4) ? '#076281' : '#076281'"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12 22.5V12.5" :stroke="(openSection === 4) ? '#076281' : '#076281'"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M22 7.5L12 12.5" :stroke="(openSection === 4) ? '#076281' : '#076281'"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M17.4474 5.89467C17.9414 5.64767 18.1416 5.04698 17.8947 4.553C17.6477 4.05903 17.047 3.8588 16.553 4.10579L17.4474 5.89467ZM6.55302 9.10577C6.05902 9.35277 5.85882 9.95347 6.10577 10.4474C6.35277 10.9414 6.95347 11.1416 7.44742 10.8947L6.55302 9.10577ZM16.553 4.10579L6.55302 9.10577L7.44742 10.8947L17.4474 5.89467L16.553 4.10579Z"
                                            :fill="(openSection === 4) ? '#076281' : '#076281'" />
                                    </svg>
                                    <div>
                                        <h2 :class="openSection === 4 ? 'text-orient-800' : 'text-tosca'"
                                            class="font-bold">Informasi Produk</h2>
                                        <p class="text-sm text-tertiery-400 font-normal">Informasi produk diisi dengan
                                            data
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
                            <div x-show="openSection === 4"
                                class="transition-all duration-300 ease-in-out transform px-12"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95">
                                <div class="w-full flex justify-between items-center">
                                    <div class="mb-4">
                                        <div class="flex gap-7 py-3">
                                            <div>
                                                <div class="text-base font-medium">Nama Brand</div>
                                                <input name="nama_brand" type="text"
                                                    class="border-0 border-b-2 w-40" value="{{ $umkm->nama_brand }}">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="flex gap-4">
                                        <div class="p-2 bg-neutral-100 rounded-md">
                                            <img class="w-52 h-52 object-cover object-center"
                                                src="{{ url('storage/' . $umkm->foto_produk_1_brand) }}"
                                                alt="Jenis Produk 1">
                                            <div class="overflow-ellipsis text-ellipsis truncate w-52">
                                                {{ $umkm->jenis_produk_1_brand }}</div>
                                            <div class="flex gap-2">
                                                <div class="p-1 bg-neutral-200 text-xs font-bold text-neutral-600 ">HS
                                                    CODE
                                                </div>
                                                <div
                                                    class="text-base font-bold text-neutral-600 overflow-ellipsis text-ellipsis truncate">
                                                    {{ $umkm->hscode1_perusahaan }}</div>
                                            </div>
                                        </div>
                                        <div class="p-2 bg-neutral-100 rounded-md">
                                            <img class="w-52 h-52 object-cover object-center"
                                                src="{{ url('storage/' . $umkm->foto_produk_2_brand) }}"
                                                alt="Jenis Produk 1">
                                            <div class="overflow-ellipsis text-ellipsis truncate w-52">
                                                {{ $umkm->jenis_produk_2_brand }}</div>
                                            <div class="flex gap-2">
                                                <div class="p-1 bg-neutral-200 text-xs font-bold text-neutral-600 ">HS
                                                    CODE
                                                </div>
                                                <div
                                                    class="text-base font-bold text-neutral-600 overflow-ellipsis text-ellipsis truncate">
                                                    {{ $umkm->hscode2_perusahaan }}</div>
                                            </div>
                                        </div>
                                        <div class="p-2 bg-neutral-100 rounded-md">
                                            <img class="w-52 h-52 object-cover object-center"
                                                src="{{ url('storage/' . $umkm->foto_produk_3_brand) }}"
                                                alt="Jenis Produk 1">
                                            <div class="overflow-ellipsis text-ellipsis truncate w-32">
                                                {{ $umkm->jenis_produk_3_brand }}</div>
                                            <div class="flex gap-2">
                                                <div class="p-1 bg-neutral-200 text-xs font-bold text-neutral-600 ">HS
                                                    CODE
                                                </div>
                                                <div
                                                    class="text-base font-bold text-neutral-600 overflow-ellipsis text-ellipsis truncate">
                                                    {{ $umkm->hscode2_perusahaan }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mb-4 p-4 mt-8 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                    <div class="text-tosca text-base font-semibold leading-normal">Data Produk</div>
                                    <div class="flex justify-between flex-wrap">
                                        <div class="width-100">
                                            <label class="block text-gray-700 text-sm font-semibold mb-2">
                                                Jenis Produk 1 <span class="text-red-400">*</span>
                                            </label>
                                            <div class="flex items-center gap-4">
                                                <input name="jenis_produk_1_brand"
                                                    class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                    value="{{ $umkm->jenis_produk_1_brand }}"
                                                    autocomplete="off"></input>
                                            </div>
                                        </div>
                                        <div class="width-50 mt-6">
                                            <label class="block text-gray-700 text-sm font-semibold mb-2">
                                                HS Code <span class="text-red-400">*</span>
                                            </label>
                                            <input name="hscode1_perusahaan"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                value="{{ $umkm->hscode1_perusahaan }}" autocomplete="off"></input>
                                            <div class="mt-1 text-xs">Informasi HS Code dapat dilihat di <a
                                                    href="https://exim.kemendag.go.id/" target="_blank"
                                                    class="text-orient-800 font-semibold">https://exim.kemendag.go.id/</a>
                                            </div>
                                        </div>
                                        <div class="width-50 mt-6">
                                            <label class="block text-gray-700 text-sm font-semibold mb-2">
                                                Unggah Foto Product Unggulan <span class="text-red-400">*</span>
                                            </label>
                                            <div
                                                class="flex file justify-between p-4 border border-dashed bg-gray-50 rounded-lg">
                                                <div class="flex gap-6 items-center" id="foto_produk_1_brand_label">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M12 4C15.5201 4 17.517 6.27298 17.8075 9.01799L17.8963 9.01798C20.1616 9.01798 21.9981 10.8048 21.9981 13.009C21.9981 15.2132 20.1616 17 17.8963 17H13.7392L13.7386 12.9647L14.7133 13.9405L14.8533 14.0614L14.8829 14.0834C15.5688 14.5922 16.5405 14.5367 17.1625 13.9148C17.8459 13.2313 17.8459 12.1233 17.1625 11.4399L13.2115 7.48892L13.0717 7.36823L13.042 7.34623C12.3562 6.83736 11.3844 6.89291 10.7625 7.51483L6.81155 11.4658L6.69087 11.6056L6.66887 11.6352C6.16 12.3211 6.21554 13.2928 6.83746 13.9148L6.86337 13.9407L7.00317 14.0614L7.03281 14.0834C7.71864 14.5922 8.69051 14.5366 9.31243 13.9147L10.2406 12.9863L10.2401 17H6.10372C3.83838 17 2.00195 15.2132 2.00195 13.009C2.00195 10.8048 3.83838 9.01798 6.10375 9.01798L6.19256 9.01799C6.48467 6.25494 8.47989 4 12 4ZM11.2409 10.5713L11.2397 20.2562C11.2397 20.6704 11.5755 21.0062 11.9897 21.0062C12.4039 21.0062 12.7397 20.6704 12.7397 20.2562L12.7383 10.5481L15.3947 13.2077L15.4788 13.2803C15.4979 13.2944 15.5175 13.3076 15.5376 13.3197C15.585 13.3484 15.6349 13.3713 15.6863 13.3885C15.9475 13.476 16.2474 13.4157 16.4554 13.2077C16.7483 12.9148 16.7483 12.4399 16.4554 12.147L12.5303 8.22196L12.4462 8.14934C12.4044 8.11827 12.36 8.09213 12.3139 8.07091C12.0368 7.94328 11.6979 7.99362 11.4696 8.22193L7.54456 12.147L7.47195 12.2311C7.25409 12.5247 7.2783 12.9414 7.54456 13.2077L7.62868 13.2803C7.64703 13.2939 7.66586 13.3066 7.6851 13.3183C7.73321 13.3476 7.78392 13.371 7.83617 13.3885C8.0974 13.476 8.39724 13.4157 8.60528 13.2077L11.2409 10.5713Z"
                                                            fill="#076281" />
                                                    </svg>
                                                    <div>
                                                        <p class="font-bold">Unggah Foto Produk</p>
                                                        <p class="text-gray-500 text-sm">SVG, PNG, or JPG (max. 15 Mb)
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <label for="foto_produk_1_brand">
                                                        <p
                                                            class="text-orient-800 cursor-pointer border px-4 py-2 rounded-xl border-orient-800 bg-white">
                                                            Pilih file</p>
                                                        <input type="file" id="foto_produk_1_brand"
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
                                                    value="{{ $umkm->jenis_produk_2_brand }}"
                                                    autocomplete="off"></input>
                                            </div>
                                        </div>
                                        <div class="width-50 mt-6">
                                            <label class="block text-gray-700 text-sm font-semibold mb-2">
                                                HS Code <span class="text-red-400">*</span>
                                            </label>
                                            <input name="hscode2_perusahaan"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                value="{{ $umkm->hscode1_perusahaan }}" autocomplete="off"></input>
                                            <div class="mt-1 text-xs">Informasi HS Code dapat dilihat di <a
                                                    href="https://exim.kemendag.go.id/" target="_blank"
                                                    class="text-orient-800 font-semibold">https://exim.kemendag.go.id/</a>
                                            </div>
                                        </div>
                                        <div class="width-50 mt-6">
                                            <label class="block text-gray-700 text-sm font-semibold mb-2">
                                                Unggah Foto Product Unggulan <span class="text-red-400">*</span>
                                            </label>
                                            <div
                                                class="flex file justify-between p-4 border border-dashed bg-gray-50 rounded-lg">
                                                <div class="flex gap-6 items-center" id="foto_produk_2_brand_label">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M12 4C15.5201 4 17.517 6.27298 17.8075 9.01799L17.8963 9.01798C20.1616 9.01798 21.9981 10.8048 21.9981 13.009C21.9981 15.2132 20.1616 17 17.8963 17H13.7392L13.7386 12.9647L14.7133 13.9405L14.8533 14.0614L14.8829 14.0834C15.5688 14.5922 16.5405 14.5367 17.1625 13.9148C17.8459 13.2313 17.8459 12.1233 17.1625 11.4399L13.2115 7.48892L13.0717 7.36823L13.042 7.34623C12.3562 6.83736 11.3844 6.89291 10.7625 7.51483L6.81155 11.4658L6.69087 11.6056L6.66887 11.6352C6.16 12.3211 6.21554 13.2928 6.83746 13.9148L6.86337 13.9407L7.00317 14.0614L7.03281 14.0834C7.71864 14.5922 8.69051 14.5366 9.31243 13.9147L10.2406 12.9863L10.2401 17H6.10372C3.83838 17 2.00195 15.2132 2.00195 13.009C2.00195 10.8048 3.83838 9.01798 6.10375 9.01798L6.19256 9.01799C6.48467 6.25494 8.47989 4 12 4ZM11.2409 10.5713L11.2397 20.2562C11.2397 20.6704 11.5755 21.0062 11.9897 21.0062C12.4039 21.0062 12.7397 20.6704 12.7397 20.2562L12.7383 10.5481L15.3947 13.2077L15.4788 13.2803C15.4979 13.2944 15.5175 13.3076 15.5376 13.3197C15.585 13.3484 15.6349 13.3713 15.6863 13.3885C15.9475 13.476 16.2474 13.4157 16.4554 13.2077C16.7483 12.9148 16.7483 12.4399 16.4554 12.147L12.5303 8.22196L12.4462 8.14934C12.4044 8.11827 12.36 8.09213 12.3139 8.07091C12.0368 7.94328 11.6979 7.99362 11.4696 8.22193L7.54456 12.147L7.47195 12.2311C7.25409 12.5247 7.2783 12.9414 7.54456 13.2077L7.62868 13.2803C7.64703 13.2939 7.66586 13.3066 7.6851 13.3183C7.73321 13.3476 7.78392 13.371 7.83617 13.3885C8.0974 13.476 8.39724 13.4157 8.60528 13.2077L11.2409 10.5713Z"
                                                            fill="#076281" />
                                                    </svg>
                                                    <div>
                                                        <p class="font-bold">Unggah Foto Produk</p>
                                                        <p class="text-gray-500 text-sm">SVG, PNG, or JPG (max. 15 Mb)
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <label for="foto_produk_2_brand">
                                                        <p
                                                            class="text-orient-800 cursor-pointer border px-4 py-2 rounded-xl border-orient-800 bg-white">
                                                            Pilih file</p>
                                                        <input type="file" id="foto_produk_2_brand"
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
                                                    value="{{ $umkm->jenis_produk_3_brand }}"
                                                    autocomplete="off"></input>
                                            </div>
                                        </div>
                                        <div class="width-50 mt-6">
                                            <label class="block text-gray-700 text-sm font-semibold mb-2">
                                                HS Code <span class="text-red-400">*</span>
                                            </label>
                                            <input name="hscode3_perusahaan"
                                                class="outline-none focus:outline-none p-2 rounded-md bg-white border-color-75 w-full"
                                                value="{{ $umkm->hscode3_perusahaan }}" autocomplete="off"></input>
                                            <div class="mt-1 text-xs">Informasi HS Code dapat dilihat di <a
                                                    href="https://exim.kemendag.go.id/" target="_blank"
                                                    class="text-orient-800 font-semibold">https://exim.kemendag.go.id/</a>
                                            </div>
                                        </div>
                                        <div class="width-50 mt-6">
                                            <label class="block text-gray-700 text-sm font-semibold mb-2">
                                                Unggah Foto Produk Unggulan <span class="text-red-400">*</span>
                                            </label>
                                            <div
                                                class="flex file justify-between p-4 border border-dashed bg-gray-50 rounded-lg">
                                                <div class="flex gap-6 items-center" id="foto_produk_3_brand_label">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M12 4C15.5201 4 17.517 6.27298 17.8075 9.01799L17.8963 9.01798C20.1616 9.01798 21.9981 10.8048 21.9981 13.009C21.9981 15.2132 20.1616 17 17.8963 17H13.7392L13.7386 12.9647L14.7133 13.9405L14.8533 14.0614L14.8829 14.0834C15.5688 14.5922 16.5405 14.5367 17.1625 13.9148C17.8459 13.2313 17.8459 12.1233 17.1625 11.4399L13.2115 7.48892L13.0717 7.36823L13.042 7.34623C12.3562 6.83736 11.3844 6.89291 10.7625 7.51483L6.81155 11.4658L6.69087 11.6056L6.66887 11.6352C6.16 12.3211 6.21554 13.2928 6.83746 13.9148L6.86337 13.9407L7.00317 14.0614L7.03281 14.0834C7.71864 14.5922 8.69051 14.5366 9.31243 13.9147L10.2406 12.9863L10.2401 17H6.10372C3.83838 17 2.00195 15.2132 2.00195 13.009C2.00195 10.8048 3.83838 9.01798 6.10375 9.01798L6.19256 9.01799C6.48467 6.25494 8.47989 4 12 4ZM11.2409 10.5713L11.2397 20.2562C11.2397 20.6704 11.5755 21.0062 11.9897 21.0062C12.4039 21.0062 12.7397 20.6704 12.7397 20.2562L12.7383 10.5481L15.3947 13.2077L15.4788 13.2803C15.4979 13.2944 15.5175 13.3076 15.5376 13.3197C15.585 13.3484 15.6349 13.3713 15.6863 13.3885C15.9475 13.476 16.2474 13.4157 16.4554 13.2077C16.7483 12.9148 16.7483 12.4399 16.4554 12.147L12.5303 8.22196L12.4462 8.14934C12.4044 8.11827 12.36 8.09213 12.3139 8.07091C12.0368 7.94328 11.6979 7.99362 11.4696 8.22193L7.54456 12.147L7.47195 12.2311C7.25409 12.5247 7.2783 12.9414 7.54456 13.2077L7.62868 13.2803C7.64703 13.2939 7.66586 13.3066 7.6851 13.3183C7.73321 13.3476 7.78392 13.371 7.83617 13.3885C8.0974 13.476 8.39724 13.4157 8.60528 13.2077L11.2409 10.5713Z"
                                                            fill="#076281" />
                                                    </svg>
                                                    <div>
                                                        <p class="font-bold">Unggah Foto Produk</p>
                                                        <p class="text-gray-500 text-sm">SVG, PNG, or JPG (max. 15 Mb)
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <label for="foto_produk_3_brand">
                                                        <p
                                                            class="text-orient-800 cursor-pointer border px-4 py-2 rounded-xl border-orient-800 bg-white">
                                                            Pilih file</p>
                                                        <input type="file" id="foto_produk_3_brand"
                                                            name="foto_produk_3_brand" class="hidden"
                                                            accept=".svg, .png, .jpg">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>

                            <!-- INFORMASI PERBANKAN -->
                            <div @click="openSection = (openSection === 5) ? 6 : 5"
                                class="mb-2 p-2 text-base font-bold  uppercase w-fullrounded-md px-6 cursor-pointer flex justify-between items-center border-bottom-tosca">
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
                                        <p class="text-sm text-tertiery-400 font-normal">Informasi perbankan dan
                                            pengelola
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
                            <div x-show="openSection === 5"
                                class="transition-all duration-300 ease-in-out transform px-12"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95">
                                <div class="w-full">
                                    <div class="mb-4">
                                        <div class="flex gap-7 py-3">
                                            <div>
                                                <div class="text-base font-medium">Nomor CIF</div>
                                                <input type="text" class="border-0 border-b-2 w-40"
                                                    name="cif_admin" value="{{ $umkm->cif_admin }}">
                                            </div>
                                            <div>
                                                <div class="text-base font-medium">Nama Pengelola</div>
                                                <input type="text" class="border-0 border-b-2 w-40"
                                                    name="nama_admin" value="{{ $umkm->nama_admin }}">
                                            </div>
                                            <div>
                                                <div class="text-base font-medium">Nomor NPP</div>
                                                <input type="text" class="border-0 border-b-2 w-40"
                                                    name="npp_admin" value="{{ $umkm->npp_admin }}">
                                            </div>
                                            <div>
                                                <div class="text-base font-medium">No. Handphone</div>
                                                <input type="text" class="border-0 border-b-2 w-40"
                                                    name="hp_admin" value="{{ $umkm->hp_admin }}">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="flex gap-7 py-3">
                                            <div class="w-6/12">
                                                <div class="text-base font-medium">Produk Perbankan Yang Digunakan
                                                </div>
                                                <div class="text-base">
                                                    @php
                                                        $legalcertdom = [
                                                            'Taplus Bisnis' => $umkm->taplus_admin,
                                                            'Payroll' => $umkm->payroll_admin,
                                                            'KI' => $umkm->ki_admin,
                                                            'KMK' => $umkm->kmk_admin,
                                                            'C3' => $umkm->c3_admin,
                                                            'BNI Direct' => $umkm->bnidirect_admin,
                                                            'L/3' => $umkm->lc_admin,
                                                        ];
                                                    @endphp

                                                    @foreach ($legalcertdom as $term => $value)
                                                        <ul></ul>
                                                        @if ($value == 1)
                                                            <li>{{ $term . '' }}</li>
                                                        @elseif($value > 1)
                                                            <li>{{ $value . '' }}</li>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div>
                                                <div class="text-base font-medium">Source Nasabah </div>
                                                <div class="text-base">
                                                    @php
                                                        $legalcertex = [
                                                            '' => $umkm->sbp_admin,
                                                            '' => $umkm->rpb_admin,
                                                            '' => $umkm->cmb_admin,
                                                            '' => $umkm->non_admin,
                                                            '' => $umkm->source_lainya_admin,
                                                        ];
                                                    @endphp
                                                    @foreach ($legalcertex as $term => $value)
                                                        <ul></ul>
                                                        @if ($value == 1)
                                                            <li>{{ $term . '' }}</li>
                                                        @elseif($value > 1)
                                                            <li>{{ $value . '' }}</li>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="mb-4 p-4 mt-8 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
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
                                    <div
                                        class="mb-4 p-4 mt-8 rounded-xl shadow border-color-75 bg-white flex flex-col gap-6">
                                        <div class="text-tosca text-base font-semibold leading-normal">Source Nasabah
                                        </div>
                                        <div class="flex justify-between flex-wrap source" x-data="{ nasabahSource: false, lainnyaSource: false }">
                                            <div class="width-50 flex flex-col">
                                                <div class="flex items-center mb-6">
                                                    <label class="w-6/12 inline-flex items-start">
                                                        <input name="source_lainya_admin" type="radio"
                                                            id="d_sbp" onclick="sourceradio()"
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
                                                        <input name="source_lainya_admin" type="radio"
                                                            id="d_rpb" onclick="sourceradio()"
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
                                                        <input name="source_lainya_admin" type="radio"
                                                            id="d_cmb" onclick="sourceradio()"
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
                                                        <input name="source_lainya_admin" type="radio"
                                                            id="d_enb" onclick="sourceradio()"
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
                                                        <input name="source_lainya_admin" type="radio"
                                                            id="d_nsb" onclick="sourceradio()"
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
                                                        <input name="source_lainya_admin" type="radio"
                                                            id="d_sl" onclick="sourceradio()"
                                                            @click="nasabahSource = false; lainnyaSource = false;"
                                                            class="h-5 w-5 text-orient-800 mt-05" unchecked
                                                            value="enb_admin" />
                                                        <div class="grid">
                                                            <span class="ml-2 text-gray-700">Source Lainya</span>
                                                            <span class="ml-2 text-gray-700 text-xs">*Jika belum
                                                                menjadi
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="max-w-7xl mx-auto pb-12">
            <div class="flex justify-between shadow-lg py-6 px-14 bg-white rounded-lg mb-11">
                <x-abutton url="/umkm/profile/{{ $umkm->id }}"
                    customClass="bg-orange-100 hover:bg-orange-200 text-orientLight"
                    text="KEMBALI KE PROFIL "></x-abutton>
                <div class="bg-white flex justify-end gap-6">
                    <x-primary-button class="ms-4">
                        {{ __('SELESAI EDIT') }}
                    </x-primary-button>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
