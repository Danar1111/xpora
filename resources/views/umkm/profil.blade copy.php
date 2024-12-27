<x-app-layout>
        <div class="flex justify-center items-center">
            <div class="absolute z-10 flex-nowrap justify-center">
                <div class="text-2xl text-white">{{ $umkm->badan_usaha }}.</div>
                <div class="text-8xl text-white">{{ $umkm->nama_perusahaan }}.</div>
                <div class="text-2xl text-white flex justify-between items-center">{{ $umkm->kode_umkm }}.
                    <x-abutton url="/umkm/export/cataloguepdf/{{ $umkm->id }}" text="PRINT KATALOG"></x-abutton>
                </div>
            </div>
            <img src="\img\core\dashboard\profil-cover.jpg" class="w-100" alt="">
        </div>
        <div class="max-w-7xl mx-auto -mt-32">

            <div class="flex justify-between gap-4">

                <div class="flex-auto items-start w-6/12 bg-white rounded-md shadow-lg">
                    <div
                        class="w-full bg-cyan-900 h-16 rounded-t-md flex items-center px-10 text-xl font-semibold text-white">
                        INFORMASI PERSONAL</div>
                    <div class="px-10 py-5">
                        <p>Informasi yang dibutuhkan pada section "Data Personal" adalah detail informasi terkait
                            informasi Ultimate Owner/PIC.
                        </p>
                        <div class="mt-6">
                            <div class="text-xl font-medium text-black mb-2">Identitas</div>
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <div class="text-sm">Nama Pemilik / PIC</div>
                                    <div class="text-lg font-medium">{{ $umkm->nama_personal }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">Jenis Kelamin</div>
                                    <div class="text-lg font-medium">{{ $umkm->identitas_personal }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">No. Handphone</div>
                                    <div class="text-lg font-medium">{{ $umkm->no_hp_personal }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6">
                            <div class="text-xl font-medium text-black mb-2">Alamat</div>
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <div class="text-sm">Alamat Lengkap</div>
                                    <div class="text-lg font-medium">{{ $umkm->alamat_personal }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">Kelurahan</div>
                                    <div class="text-lg font-medium">{{ $umkm->kelurahan_personal }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">Kecamatan</div>
                                    <div class="text-lg font-medium">{{ $umkm->kecamatan_personal }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">Kota / Kabupaten</div>
                                    <div class="text-lg font-medium">{{ $umkm->kota_personal }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">Provinsi</div>
                                    <div class="text-lg font-medium">{{ $umkm->provinsi_personal }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">Kode Pos</div>
                                    <div class="text-lg font-medium">{{ $umkm->kode_pos_personal }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-auto items-start w-6/12 bg-white rounded-md shadow-lg">
                    <div class="absolute -ml-14 pt-56">
                        <svg width="80" height="71" viewBox="0 0 80 71" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_636_11575)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.7156 13.6494C10.6143 13.0094 9.33433 12.6429 7.96877 12.6429C3.84415 12.6429 0.500488 15.9866 0.500488 20.1112C0.500488 24.2358 3.84415 27.5795 7.96877 27.5795C12.0934 27.5795 15.4371 24.2358 15.4371 20.1112C15.4371 18.3657 14.8383 16.7601 13.8349 15.4886C19.0798 10.2089 26.1322 5.23502 33.929 3.47445C39.1349 2.29892 44.6768 2.55211 50.2947 5.10429C54.4731 7.00255 58.7486 10.1981 62.9788 15.1172C61.7882 16.4403 61.0636 18.1911 61.0636 20.1112C61.0636 24.2358 64.4073 27.5795 68.5319 27.5795C72.6565 27.5795 76.0002 24.2358 76.0002 20.1112C76.0002 15.9866 72.6565 12.6429 68.5319 12.6429C67.3394 12.6429 66.2121 12.9224 65.2121 13.4195C60.7293 8.17568 56.1027 4.66683 51.453 2.55447C45.2215 -0.276496 39.049 -0.552797 33.3121 0.742625C24.7923 2.66645 17.2446 8.04761 11.7156 13.6494Z"
                                    fill="#0A0A0A" />
                            </g>
                            <g filter="url(#filter1_d_636_11575)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.7156 55.6494C10.6143 55.0094 9.33433 54.6429 7.96877 54.6429C3.84415 54.6429 0.500488 57.9866 0.500488 62.1112C0.500488 66.2358 3.84415 69.5795 7.96877 69.5795C12.0934 69.5795 15.4371 66.2358 15.4371 62.1112C15.4371 60.3657 14.8383 58.7601 13.8349 57.4886C19.0798 52.2089 26.1322 47.235 33.929 45.4745C39.1349 44.2989 44.6768 44.5521 50.2947 47.1043C54.4731 49.0026 58.7486 52.1981 62.9788 57.1172C61.7882 58.4403 61.0636 60.1911 61.0636 62.1112C61.0636 66.2358 64.4073 69.5795 68.5319 69.5795C72.6565 69.5795 76.0002 66.2358 76.0002 62.1112C76.0002 57.9866 72.6565 54.6429 68.5319 54.6429C67.3394 54.6429 66.2121 54.9224 65.2121 55.4195C60.7293 50.1757 56.1027 46.6668 51.453 44.5545C45.2215 41.7235 39.049 41.4472 33.3121 42.7426C24.7923 44.6665 17.2446 50.0476 11.7156 55.6494Z"
                                    fill="#0A0A0A" />
                            </g>
                            <defs>
                                <filter id="filter0_d_636_11575" x="0.500488" y="0" width="79.0003" height="28.9798"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dx="3.50076" dy="1.4003" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 0.908333 0 0 0 0 0.908333 0 0 0 0 0.908333 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_636_11575" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_636_11575"
                                        result="shape" />
                                </filter>
                                <filter id="filter1_d_636_11575" x="0.500488" y="42" width="79.0003" height="28.9798"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dx="3.50076" dy="1.4003" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 0.908333 0 0 0 0 0.908333 0 0 0 0 0.908333 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_636_11575" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_636_11575"
                                        result="shape" />
                                </filter>
                            </defs>
                        </svg>

                    </div>
                    <div
                        class="w-full bg-cyan-900 h-16 rounded-t-md flex items-center px-10 text-xl font-semibold text-white">
                        GALLERY PERUSAHAAN
                    </div>
                    <div class="px-10 py-5">
                        <div class="mt-6">
                            <div class="text-xl font-medium text-black mb-2">Logo</div>
                            <div class="flex gap-3">
                                <div>
                                    <img src="{{ url('storage/'.$umkm->logo_perusahaan) }}"
                                        class="bg-slate-500 rounded-md h-44 w-full" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="mt-6">
                            <div class="text-xl font-medium text-black mb-2">Jenis / Foto Produk</div>
                            <div class="flex gap-3">
                                <div>
                                    <img src="{{ url('storage/'.$umkm->foto_produk_1_brand) }}"
                                        class="bg-slate-500 rounded-md h-44 w-full object-cover object-center" alt="">
                                    <div class="mt-3">{{ $umkm->jenis_produk_1_brand }}</div>
                                </div>
                                <div>
                                    <img src="{{ url('storage/'.$umkm->foto_produk_2_brand) }}"
                                        class="bg-slate-500 rounded-md h-44 w-full object-cover object-center" alt="">
                                    <div class="mt-3">{{ $umkm->jenis_produk_2_brand }}</div>
                                </div>
                                <div>
                                    <img src="{{ url('storage/'.$umkm->foto_produk_3_brand) }}"
                                        class="bg-slate-500 rounded-md h-44 w-full object-cover object-center" alt="">
                                    <div class="mt-3">{{ $umkm->jenis_produk_3_brand }}</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="flex justify-between gap-4 mt-10">

                <div class="flex-auto items-start w-6/12 bg-white rounded-md shadow-lg">
                    <div
                        class="w-full absolute rounded-t-md flex items-center px-10 text-4xl font-semibold text-black -mt-4">
                        INFORMASI PERUSAHAAN</div>
                    <div class="px-10 py-12">
                        <div class="text-xl font-semibold text-neutral-500">DATA PERUSAHAAN</div>
                        <div class="mt-6">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="">
                                    <div class="text-sm">Bentuk Usaha</div>
                                    <div class="text-lg font-medium">{{ $umkm->badan_usaha }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">Nama Usaha</div>
                                    <div class="text-lg font-medium">{{ $umkm->nama_perusahaan }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">Sektor Usaha</div>
                                    <div class="text-lg font-medium">{{ $umkm->kategori_perusahaan }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">Tahun Berdiri</div>
                                    <div class="text-lg font-medium">{{ $umkm->berdiri_perusahaan }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6">
                            <div class="text-xl font-medium text-black mb-2">Alamat</div>
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <div class="text-sm">Alamat Lengkap</div>
                                    <div class="text-lg font-medium">{{ $umkm->alamat_perusahaan }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">Kelurahan</div>
                                    <div class="text-lg font-medium">{{ $umkm->kelurahan_perusahaan }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">Kecamatan</div>
                                    <div class="text-lg font-medium">{{ $umkm->kecamatan_perusahaan }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">Kota / Kabupaten</div>
                                    <div class="text-lg font-medium">{{ $umkm->kota_perusahaan }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">Provinsi</div>
                                    <div class="text-lg font-medium">{{ $umkm->provinsi_perusahaan }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">Kode Pos</div>
                                    <div class="text-lg font-medium">{{ $umkm->kode_pos_perusahaan }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-auto items-start w-6/12 bg-white rounded-md shadow-lg ">
                    <div class="absolute -ml-14 pt-56">
                        <svg width="80" height="71" viewBox="0 0 80 71" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_636_11575)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.7156 13.6494C10.6143 13.0094 9.33433 12.6429 7.96877 12.6429C3.84415 12.6429 0.500488 15.9866 0.500488 20.1112C0.500488 24.2358 3.84415 27.5795 7.96877 27.5795C12.0934 27.5795 15.4371 24.2358 15.4371 20.1112C15.4371 18.3657 14.8383 16.7601 13.8349 15.4886C19.0798 10.2089 26.1322 5.23502 33.929 3.47445C39.1349 2.29892 44.6768 2.55211 50.2947 5.10429C54.4731 7.00255 58.7486 10.1981 62.9788 15.1172C61.7882 16.4403 61.0636 18.1911 61.0636 20.1112C61.0636 24.2358 64.4073 27.5795 68.5319 27.5795C72.6565 27.5795 76.0002 24.2358 76.0002 20.1112C76.0002 15.9866 72.6565 12.6429 68.5319 12.6429C67.3394 12.6429 66.2121 12.9224 65.2121 13.4195C60.7293 8.17568 56.1027 4.66683 51.453 2.55447C45.2215 -0.276496 39.049 -0.552797 33.3121 0.742625C24.7923 2.66645 17.2446 8.04761 11.7156 13.6494Z"
                                    fill="#0A0A0A" />
                            </g>
                            <g filter="url(#filter1_d_636_11575)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.7156 55.6494C10.6143 55.0094 9.33433 54.6429 7.96877 54.6429C3.84415 54.6429 0.500488 57.9866 0.500488 62.1112C0.500488 66.2358 3.84415 69.5795 7.96877 69.5795C12.0934 69.5795 15.4371 66.2358 15.4371 62.1112C15.4371 60.3657 14.8383 58.7601 13.8349 57.4886C19.0798 52.2089 26.1322 47.235 33.929 45.4745C39.1349 44.2989 44.6768 44.5521 50.2947 47.1043C54.4731 49.0026 58.7486 52.1981 62.9788 57.1172C61.7882 58.4403 61.0636 60.1911 61.0636 62.1112C61.0636 66.2358 64.4073 69.5795 68.5319 69.5795C72.6565 69.5795 76.0002 66.2358 76.0002 62.1112C76.0002 57.9866 72.6565 54.6429 68.5319 54.6429C67.3394 54.6429 66.2121 54.9224 65.2121 55.4195C60.7293 50.1757 56.1027 46.6668 51.453 44.5545C45.2215 41.7235 39.049 41.4472 33.3121 42.7426C24.7923 44.6665 17.2446 50.0476 11.7156 55.6494Z"
                                    fill="#0A0A0A" />
                            </g>
                            <defs>
                                <filter id="filter0_d_636_11575" x="0.500488" y="0" width="79.0003" height="28.9798"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dx="3.50076" dy="1.4003" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 0.908333 0 0 0 0 0.908333 0 0 0 0 0.908333 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_636_11575" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_636_11575"
                                        result="shape" />
                                </filter>
                                <filter id="filter1_d_636_11575" x="0.500488" y="42" width="79.0003" height="28.9798"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dx="3.50076" dy="1.4003" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 0.908333 0 0 0 0 0.908333 0 0 0 0 0.908333 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_636_11575" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_636_11575"
                                        result="shape" />
                                </filter>
                            </defs>
                        </svg>

                    </div>

                    <div class="px-10 mt-12">
                        <div class="text-xl font-semibold text-neutral-500">TERMS</div>
                        <div class="mt-6 mb-6">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="">
                                    <div class="text-sm">INCOTERM</div>
                                    <div class="text-lg font-medium">{{ $umkm->paymentterms_tt }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">PAYMENT TERM</div>
                                    @if (count($checkedOptions) > 0)
                                        <ul>
                                            @foreach ($checkedOptions as $columnName => $value)
                                                @if ($value == 1 && $columnName == 'perdagangan_perusahaan')
                                                    <li>{{ $columnName }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @else
                                        <p>No options selected</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="text-xl font-semibold text-neutral-500">JENIS INDUSTRI</div>
                        <div class="mt-6">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="">
                                    <div class="text-sm">Pengolahan</div>
                                    <div class="text-lg font-medium">{{ $umkm->pengolahan_perusahaan }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">Perdagangan</div>
                                    <div class="text-lg font-medium">{{ $umkm->perdagangan_perusahaan }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-xl font-semibold text-neutral-500 mt-3">KATEGORI EXPORT</div>
                        <div class="mt-6">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="">
                                    <div class="text-sm">Direct</div>
                                    <div class="text-lg font-medium">{{ $umkm->mode_direct_perusahaan }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">Indirect</div>
                                    <div class="text-lg font-medium">{{ $umkm->mode_indirect_perusahaan }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-10 py-12">
                        <div class="text-xl font-semibold text-neutral-500">KONTAK PERUSAHAAN</div>
                        <div class="mt-6">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="">
                                    <div class="text-sm">No. Telepon Perusahaan</div>
                                    <div class="text-lg font-medium">{{ $umkm->no_telp_perusahaan }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">E-Mail Perusahaan</div>
                                    <div class="text-lg font-medium">{{ $umkm->email_perusahaan }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">Website Perusahaan</div>
                                    <div class="text-lg font-medium">{{ $umkm->website_perusahaan }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">ID Instagram Perusahaan</div>
                                    <div class="text-lg font-medium flex justify-start items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="28"
                                            height="28" viewBox="0 0 48 48">
                                            <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1"
                                                cx="19.38" cy="42.035" r="44.899"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#fd5"></stop>
                                                <stop offset=".328" stop-color="#ff543f"></stop>
                                                <stop offset=".348" stop-color="#fc5245"></stop>
                                                <stop offset=".504" stop-color="#e64771"></stop>
                                                <stop offset=".643" stop-color="#d53e91"></stop>
                                                <stop offset=".761" stop-color="#cc39a4"></stop>
                                                <stop offset=".841" stop-color="#c837ab"></stop>
                                            </radialGradient>
                                            <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)"
                                                d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                            </path>
                                            <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2"
                                                cx="11.786" cy="5.54" r="29.813"
                                                gradientTransform="matrix(1 0 0 .6663 0 1.849)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#4168c9"></stop>
                                                <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                            </radialGradient>
                                            <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)"
                                                d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                            </path>
                                            <path fill="#fff"
                                                d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z">
                                            </path>
                                            <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                            <path fill="#fff"
                                                d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z">
                                            </path>
                                        </svg>
                                        {{ $umkm->instagram_perusahaan }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="flex justify-between gap-4 mt-10">

                <div class="flex-auto items-start w-6/12 bg-white rounded-md shadow-lg">
                    <div
                        class="w-full absolute rounded-t-md flex items-center px-10 text-4xl font-semibold text-black -mt-4">
                        INFORMASI LEGALITAS PERUSAHAAN</div>
                    <div class="px-10 py-12 grid">
                        <div class="mt-6">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="">
                                    <div class="text-sm">Nomor Legalitas</div>
                                    <div class="text-lg font-medium">{{ $umkm->nomor_badan_usaha }}</div>
                                </div>
                                <div class="">
                                    <div class="text-sm">Nomor NPWP</div>
                                    <div class="text-lg font-medium">{{ $umkm->nomor_npwp_usaha }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="">
                                    <div class="text-sm">Export Permit</div>
                                    <div class="text-lg font-medium">{{ $umkm->cif_admin }}</div>
                                </div>
                                <div class="">
                                    <div class="text-sm">Sertifikasi</div>
                                    <div class="text-lg font-medium">{{ $umkm->cif_admin }}</div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

            <div class="flex justify-between gap-4 mt-10">

                <div class="flex-auto items-start w-6/12 bg-white rounded-md shadow-lg">
                    <div
                        class="w-full absolute rounded-t-md flex items-center px-10 text-4xl font-semibold text-black -mt-4">
                        INFORMASI PRODUK</div>
                    <div class="px-10 py-12">
                        <div class="mt-6">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="">
                                    <div class="text-sm">Nama Brand</div>
                                    <div class="text-lg font-medium">{{ $umkm->nama_brand }}</div>
                                </div>
                            </div>

                            <div class="flex items-center w-full justify-between gap-3 mt-4">
                                <div class="flex-auto w-6/12">
                                    <div class="text-sm">Jenis Produk (1)</div>
                                    <div class="text-lg font-medium">{{ $umkm->jenis_produk_1_brand }}</div>
                                </div>
                                <div class="flex-none">
                                    <div class="text-sm">HS CODE</div>
                                    <div class="text-lg font-medium">{{ $umkm->hscode1_perusahaan }}</div>
                                </div>
                                <div>
                                    <img src="{{ url('storage/'.$umkm->foto_produk_1_brand) }}" class="object-cover object-center h-20 w-20 rounded-md"
                                        alt="">
                                </div>
                            </div>
                            <div class="flex items-center w-full justify-between gap-3 mt-4">
                                <div class="flex-auto w-6/12">
                                    <div class="text-sm">Jenis Produk (2)</div>
                                    <div class="text-lg font-medium">{{ $umkm->jenis_produk_2_brand }}</div>
                                </div>
                                <div class="flex-none">
                                    <div class="text-sm">HS CODE</div>
                                    <div class="text-lg font-medium">{{ $umkm->hscode2_perusahaan }}</div>
                                </div>
                                <div>
                                    <img src="{{ url('storage/'.$umkm->foto_produk_2_brand) }}" class="object-cover object-center h-20 w-20 rounded-md"
                                        alt="">
                                </div>
                            </div>
                            <div class="flex items-center w-full justify-between gap-3 mt-4">
                                <div class="flex-auto w-6/12">
                                    <div class="text-sm">Jenis Produk (3)</div>
                                    <div class="text-lg font-medium">{{ $umkm->jenis_produk_3_brand }}</div>
                                </div>
                                <div class="flex-none">
                                    <div class="text-sm">HS CODE</div>
                                    <div class="text-lg font-medium">{{ $umkm->hscode3_perusahaan }}</div>
                                </div>
                                <div>
                                    <img src="{{ url('storage/'.$umkm->foto_produk_3_brand) }}" class="object-cover object-center h-20 w-20 rounded-md"
                                        alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="flex-auto items-start w-6/12 bg-white rounded-md shadow-lg ">
                    <div class="absolute -ml-14 pt-56">
                        <svg width="80" height="71" viewBox="0 0 80 71" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_636_11575)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.7156 13.6494C10.6143 13.0094 9.33433 12.6429 7.96877 12.6429C3.84415 12.6429 0.500488 15.9866 0.500488 20.1112C0.500488 24.2358 3.84415 27.5795 7.96877 27.5795C12.0934 27.5795 15.4371 24.2358 15.4371 20.1112C15.4371 18.3657 14.8383 16.7601 13.8349 15.4886C19.0798 10.2089 26.1322 5.23502 33.929 3.47445C39.1349 2.29892 44.6768 2.55211 50.2947 5.10429C54.4731 7.00255 58.7486 10.1981 62.9788 15.1172C61.7882 16.4403 61.0636 18.1911 61.0636 20.1112C61.0636 24.2358 64.4073 27.5795 68.5319 27.5795C72.6565 27.5795 76.0002 24.2358 76.0002 20.1112C76.0002 15.9866 72.6565 12.6429 68.5319 12.6429C67.3394 12.6429 66.2121 12.9224 65.2121 13.4195C60.7293 8.17568 56.1027 4.66683 51.453 2.55447C45.2215 -0.276496 39.049 -0.552797 33.3121 0.742625C24.7923 2.66645 17.2446 8.04761 11.7156 13.6494Z"
                                    fill="#0A0A0A" />
                            </g>
                            <g filter="url(#filter1_d_636_11575)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.7156 55.6494C10.6143 55.0094 9.33433 54.6429 7.96877 54.6429C3.84415 54.6429 0.500488 57.9866 0.500488 62.1112C0.500488 66.2358 3.84415 69.5795 7.96877 69.5795C12.0934 69.5795 15.4371 66.2358 15.4371 62.1112C15.4371 60.3657 14.8383 58.7601 13.8349 57.4886C19.0798 52.2089 26.1322 47.235 33.929 45.4745C39.1349 44.2989 44.6768 44.5521 50.2947 47.1043C54.4731 49.0026 58.7486 52.1981 62.9788 57.1172C61.7882 58.4403 61.0636 60.1911 61.0636 62.1112C61.0636 66.2358 64.4073 69.5795 68.5319 69.5795C72.6565 69.5795 76.0002 66.2358 76.0002 62.1112C76.0002 57.9866 72.6565 54.6429 68.5319 54.6429C67.3394 54.6429 66.2121 54.9224 65.2121 55.4195C60.7293 50.1757 56.1027 46.6668 51.453 44.5545C45.2215 41.7235 39.049 41.4472 33.3121 42.7426C24.7923 44.6665 17.2446 50.0476 11.7156 55.6494Z"
                                    fill="#0A0A0A" />
                            </g>
                            <defs>
                                <filter id="filter0_d_636_11575" x="0.500488" y="0" width="79.0003" height="28.9798"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dx="3.50076" dy="1.4003" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 0.908333 0 0 0 0 0.908333 0 0 0 0 0.908333 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_636_11575" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_636_11575"
                                        result="shape" />
                                </filter>
                                <filter id="filter1_d_636_11575" x="0.500488" y="42" width="79.0003" height="28.9798"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dx="3.50076" dy="1.4003" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 0.908333 0 0 0 0 0.908333 0 0 0 0 0.908333 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_636_11575" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_636_11575"
                                        result="shape" />
                                </filter>
                            </defs>
                        </svg>

                    </div>

                    <div class="px-10 py-12">
                        <div class="text-xl font-semibold text-neutral-500">KAPASITAS</div>
                        <div class="mt-3">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="">
                                    <div class="text-sm">Kapasitas Produksi (per bulan)</div>
                                    <div class="text-lg font-medium">{{ $umkm->produk_kapasitas }} <span
                                            class="uppercase font-bold text-neutral-500">{{ $umkm->jenis_satuan_kapasitas }}</span>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="text-sm">Minimal Order Quantity</div>
                                    <div class="text-lg font-medium">{{ $umkm->produk_min_qty }} <span
                                            class="uppercase font-bold text-neutral-500">{{ $umkm->jenis_satuan_kapasitas }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-xl font-semibold text-neutral-500 mt-3">Omzet</div>
                        <div class="mt-3">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="">
                                    <div class="text-sm">Total Omzet per Tahun</div>
                                    <div class="text-lg font-medium"><span
                                            class="uppercase font-bold text-neutral-500">IDR
                                        </span> {{ $umkm->omzet_total_all }}</div>
                                </div>
                                <div>
                                    <div class="text-sm">% Omzet Expor dari total Omzet per Tahun</div>
                                    <div class="text-lg font-medium">{{ $umkm->omzet_total_export }}<span
                                            class="uppercase font-bold text-neutral-500">%</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 border-t-2 border-neutral-300 pt-6">
                            <div class="text-sm">Negara tujuan export dan % dari omzet ekspor</div>
                            <div class="text-lg font-medium mt-2">
                                {{ $umkm->omzet_intExport_1 }}<span class="text-neutral-500"> sebanyak
                                </span>{{ $umkm->omzet_export_1 }} %<span class="text-neutral-500"> dari total omzet
                                    ekspor</span>
                            </div>
                            <div class="text-lg font-medium mt-2">
                                {{ $umkm->omzet_intExport_2 }}<span class="text-neutral-500"> sebanyak
                                </span>{{ $umkm->omzet_export_2 }} %<span class="text-neutral-500"> dari total omzet
                                    ekspor</span>
                            </div>
                            <div class="text-lg font-medium mt-2">
                                {{ $umkm->omzet_intExport_3 }}<span class="text-neutral-500"> sebanyak
                                </span>{{ $umkm->omzet_export_3 }} %<span class="text-neutral-500"> dari total omzet
                                    ekspor</span>
                            </div>
                            <div class="text-lg font-medium mt-2">
                                {{ $umkm->omzet_intExport_4 }}<span class="text-neutral-500"> sebanyak
                                </span>{{ $umkm->omzet_export_4 }} %<span class="text-neutral-500"> dari total omzet
                                    ekspor</span>
                            </div>
                            <div class="text-lg font-medium mt-2">
                                {{ $umkm->omzet_intExport_5 }}<span class="text-neutral-500"> sebanyak
                                </span>{{ $umkm->omzet_export_5 }} %<span class="text-neutral-500"> dari total omzet
                                    ekspor</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="flex justify-between gap-4 mt-10">

                <div class="flex-auto items-start w-6/12 bg-white rounded-md shadow-lg">
                    <div
                        class="w-full absolute rounded-t-md flex items-center px-10 text-2xl font-semibold text-black -mt-4">
                        INFORMASI PERBANKAN DAN PENGELOLA</div>
                    <div class="px-10 py-12">
                        <div class="mt-6">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="">
                                    <div class="text-sm">Nomor CIF</div>
                                    <div class="text-lg font-medium">{{ $umkm->cif_admin }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <div class="grid gap-3">
                                <div class="">
                                    <div class="text-sm">Product Holing Ratio (PHR)</div>
                                    <div class="text-lg font-medium">{{ $umkm->cif_admin }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <div class="grid gap-3">
                                <div class="">
                                    <div class="text-sm">Sources</div>
                                    <div class="text-lg font-medium">{{ $umkm->cif_admin }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <div class="grid gap-3">
                                <div class="">
                                    <div class="text-sm">Nama Pengelola</div>
                                    <div class="text-lg font-medium">{{ $umkm->nama_admin }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <div class="grid gap-3">
                                <div class="">
                                    <div class="text-sm">NPP</div>
                                    <div class="text-lg font-medium">{{ $umkm->npp_admin }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <div class="grid gap-3">
                                <div class="">
                                    <div class="text-sm">No. Handphone Pengelola</div>
                                    <div class="text-lg font-medium">{{ $umkm->hp_admin }}</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="flex-auto items-start w-6/12 bg-white rounded-md shadow-lg ">
                    <div class="absolute -ml-14 pt-56">
                        <svg width="80" height="71" viewBox="0 0 80 71" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_636_11575)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.7156 13.6494C10.6143 13.0094 9.33433 12.6429 7.96877 12.6429C3.84415 12.6429 0.500488 15.9866 0.500488 20.1112C0.500488 24.2358 3.84415 27.5795 7.96877 27.5795C12.0934 27.5795 15.4371 24.2358 15.4371 20.1112C15.4371 18.3657 14.8383 16.7601 13.8349 15.4886C19.0798 10.2089 26.1322 5.23502 33.929 3.47445C39.1349 2.29892 44.6768 2.55211 50.2947 5.10429C54.4731 7.00255 58.7486 10.1981 62.9788 15.1172C61.7882 16.4403 61.0636 18.1911 61.0636 20.1112C61.0636 24.2358 64.4073 27.5795 68.5319 27.5795C72.6565 27.5795 76.0002 24.2358 76.0002 20.1112C76.0002 15.9866 72.6565 12.6429 68.5319 12.6429C67.3394 12.6429 66.2121 12.9224 65.2121 13.4195C60.7293 8.17568 56.1027 4.66683 51.453 2.55447C45.2215 -0.276496 39.049 -0.552797 33.3121 0.742625C24.7923 2.66645 17.2446 8.04761 11.7156 13.6494Z"
                                    fill="#0A0A0A" />
                            </g>
                            <g filter="url(#filter1_d_636_11575)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.7156 55.6494C10.6143 55.0094 9.33433 54.6429 7.96877 54.6429C3.84415 54.6429 0.500488 57.9866 0.500488 62.1112C0.500488 66.2358 3.84415 69.5795 7.96877 69.5795C12.0934 69.5795 15.4371 66.2358 15.4371 62.1112C15.4371 60.3657 14.8383 58.7601 13.8349 57.4886C19.0798 52.2089 26.1322 47.235 33.929 45.4745C39.1349 44.2989 44.6768 44.5521 50.2947 47.1043C54.4731 49.0026 58.7486 52.1981 62.9788 57.1172C61.7882 58.4403 61.0636 60.1911 61.0636 62.1112C61.0636 66.2358 64.4073 69.5795 68.5319 69.5795C72.6565 69.5795 76.0002 66.2358 76.0002 62.1112C76.0002 57.9866 72.6565 54.6429 68.5319 54.6429C67.3394 54.6429 66.2121 54.9224 65.2121 55.4195C60.7293 50.1757 56.1027 46.6668 51.453 44.5545C45.2215 41.7235 39.049 41.4472 33.3121 42.7426C24.7923 44.6665 17.2446 50.0476 11.7156 55.6494Z"
                                    fill="#0A0A0A" />
                            </g>
                            <defs>
                                <filter id="filter0_d_636_11575" x="0.500488" y="0" width="79.0003" height="28.9798"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dx="3.50076" dy="1.4003" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 0.908333 0 0 0 0 0.908333 0 0 0 0 0.908333 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_636_11575" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_636_11575"
                                        result="shape" />
                                </filter>
                                <filter id="filter1_d_636_11575" x="0.500488" y="42" width="79.0003" height="28.9798"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dx="3.50076" dy="1.4003" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 0.908333 0 0 0 0 0.908333 0 0 0 0 0.908333 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_636_11575" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_636_11575"
                                        result="shape" />
                                </filter>
                            </defs>
                        </svg>

                    </div>

                    <div class="px-10 py-12">
                        <div class="absolute text-4xl font-semibold text-black -mt-16">CATATAN NASABAH</div>


                    </div>
                </div>
            </div>

</x-app-layout>
