<x-app-layout title="Profil {{ $umkm->badan_usaha }}. {{ $umkm->nama_perusahaan }}">
    <div class="flex justify-center items-center">
        <div class="absolute z-10 flex justify-center">
            <div class="text-3xl font-semibold text-white text-center">INFORMASI NASABAH BERORENTASI EKSPOR</div>
        </div>
        <img src="/img/umkm/core/cover-profil-new.jpg" class="w-full" alt="">
    </div>
    <div class="max-w-7xl mx-auto px-5 py-12">

        <div class="shadow-lg w-full py-6 px-14 bg-white rounded-lg mb-11">
            <div class="flex items-center justify-between">
                <div class="text-lg font-medium"><span class="text-neutral-400">UMKM ID : </span>{{ $umkm->kode_umkm }}
                </div>
                <div class="text-lg font-medium flex items-center gap-3 px-3 py-1 rounded-md bg-orange-100">
                    {{ $umkm->kategori_perusahaan }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                    </svg>
                </div>
            </div>
            <div class="flex gap-6 mt-8">
                <div class="w-2/12">
                    <img src="{{ url('storage/' . $umkm->logo_perusahaan) }}" alt="">
                </div>
                <div class="w-7/12">
                    <div class="text-3xl font-bold">{{ $umkm->badan_usaha }}. {{ $umkm->nama_perusahaan }}</div>
                    <div class="text-1xl font-bold text-neutral-400 py-2">{{ $umkm->kota_perusahaan }}</div>
                    <p class="text-black text-base text-justify">
                        <span class="font-bold">{{ $umkm->badan_usaha }}. {{ $umkm->nama_perusahaan }}</span> merupakan
                        perusahan
                        yang bergerak di bidang Agriculture dan didirikan pada tahun {{ $umkm->berdiri_perusahaan }}.
                        {{ $umkm->badan_usaha }} {{ $umkm->nama_perusahaan }} merupakan Industri
                        pengolahan dan perdagangan untuk produk {{ $umkm->jenis_produk_1_brand }} dengan merk
                        {{ $umkm->nama_brand }}. Lokasi usaha berada di Kabupaten
                        {{ $umkm->kota_perusahaan }} {{ $umkm->provinsi_perusahaan }}.
                        Saat ini{{ $umkm->badan_usaha }}. {{ $umkm->nama_perusahaan }} telah melakukan
                        ekspor ke berbagai negara baik secara langsung kepada buyer di negara tujuan ekspor maupun
                        melalui
                        mitra bisnisnya. Untuk mendapatkan informasi perusahaan selangkapnya mohon hubungi BNI kantor
                        cabang
                        terdekat atau kunjungi website www.xpora.bni.co.id
                    </p>
                    <div class="flex justify-between mt-8">
                        <div class="p-2 bg-neutral-100 rounded-md">
                            <img class="w-32 h-32 object-cover object-center"
                                src="{{ url('storage/' . $umkm->foto_produk_1_brand) }}" alt="Jenis Produk 1">
                            <div class="overflow-ellipsis text-ellipsis truncate w-32">
                                {{ $umkm->jenis_produk_1_brand }}</div>
                            <div class="flex gap-2">
                                <div class="p-1 bg-neutral-200 text-xs font-bold text-neutral-600 ">HS CODE</div>
                                <div
                                    class="text-base font-bold text-neutral-600 overflow-ellipsis text-ellipsis truncate w-10">
                                    {{ $umkm->hscode1_perusahaan }}</div>
                            </div>
                        </div>
                        <div class="p-2 bg-neutral-100 rounded-md">
                            <img class="w-32 h-32 object-cover object-center"
                                src="{{ url('storage/' . $umkm->foto_produk_2_brand) }}" alt="Jenis Produk 1">
                            <div class="overflow-ellipsis text-ellipsis truncate w-32">
                                {{ $umkm->jenis_produk_2_brand }}</div>
                            <div class="flex gap-2">
                                <div class="p-1 bg-neutral-200 text-xs font-bold text-neutral-600 ">HS CODE</div>
                                <div
                                    class="text-base font-bold text-neutral-600 overflow-ellipsis text-ellipsis truncate w-10">
                                    {{ $umkm->hscode2_perusahaan }}</div>
                            </div>
                        </div>
                        <div class="p-2 bg-neutral-100 rounded-md">
                            <img class="w-32 h-32 object-cover object-center"
                                src="{{ url('storage/' . $umkm->foto_produk_3_brand) }}" alt="Jenis Produk 1">
                            <div class="overflow-ellipsis text-ellipsis truncate w-32">
                                {{ $umkm->jenis_produk_3_brand }}</div>
                            <div class="flex gap-2">
                                <div class="p-1 bg-neutral-200 text-xs font-bold text-neutral-600 ">HS CODE</div>
                                <div
                                    class="text-base font-bold text-neutral-600 overflow-ellipsis text-ellipsis truncate w-10">
                                    {{ $umkm->hscode2_perusahaan }}</div>
                            </div>
                        </div>
                        <div
                            class="p-4 grid items-end w-48 p-2 bg-neutral-100 rounded-md bg-orient-900 justify-center justify-items-center">
                            <div class="text-xs text-center text-white">COMPANY PROFILE</div>
                            <svg width="99" height="99" viewBox="0 0 99 99" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M64.9688 71.1563V85.0781C64.9688 87.6398 62.8897 89.7188 60.3281 89.7188H20.1094C18.8786 89.7188 17.6982 89.2298 16.828 88.3596C15.9577 87.4893 15.4688 86.3089 15.4688 85.0781V32.4844C15.4688 29.9228 17.5478 27.8438 20.1094 27.8438H27.8438C29.9169 27.8423 31.9865 28.0134 34.0312 28.3553M64.9688 71.1563H78.8906C81.4522 71.1563 83.5312 69.0773 83.5312 66.5156V46.4063C83.5312 28.0088 70.1539 12.7421 52.5938 9.79276C50.549 9.45094 48.4794 9.27985 46.4062 9.28126H38.6719C36.1103 9.28126 34.0312 11.3603 34.0312 13.9219V28.3553M64.9688 71.1563H38.6719C37.4411 71.1563 36.2607 70.6673 35.3905 69.7971C34.5202 68.9268 34.0312 67.7464 34.0312 66.5156V28.3553M83.5312 55.6875V47.9531C83.5312 44.2608 82.0645 40.7197 79.4536 38.1089C76.8428 35.498 73.3017 34.0313 69.6094 34.0313H63.4219C62.1911 34.0313 61.0107 33.5423 60.1405 32.672C59.2702 31.8018 58.7812 30.6214 58.7812 29.3906V23.2031C58.7813 21.3749 58.4212 19.5645 57.7215 17.8755C57.0219 16.1864 55.9964 14.6516 54.7036 13.3589C53.4109 12.0661 51.8761 11.0406 50.187 10.341C48.498 9.64136 46.6876 9.28126 44.8594 9.28126H40.2188"
                                    stroke="white" stroke-width="6.1875" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <x-abutton customClass="border-1 border-white"
                                url="{{ url('storage/' . $umkm->compro_perusahaan) }}" text="DOWNLOAD PDF"></x-abutton>
                        </div>

                    </div>
                </div>
                <div class="w-3/12 grid gap-5">
                    <div class="bg-neutral-100 px-7 py-5 rounded-md">
                        <div class="text-lg font-bold text-black mb-4">INFORMASI KONTAK</div>
                        <div class="flex py-1 gap-2 items-center">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.8127 4.5C11.8127 5.24592 11.5164 5.96129 10.989 6.48874C10.4615 7.01618 9.74615 7.3125 9.00023 7.3125C8.25431 7.3125 7.53893 7.01618 7.01149 6.48874C6.48404 5.96129 6.18773 5.24592 6.18773 4.5C6.18773 3.75408 6.48404 3.03871 7.01149 2.51126C7.53893 1.98382 8.25431 1.6875 9.00023 1.6875C9.74615 1.6875 10.4615 1.98382 10.989 2.51126C11.5164 3.03871 11.8127 3.75408 11.8127 4.5ZM3.37598 15.0885C3.40008 13.6128 4.00323 12.2056 5.05536 11.1705C6.10749 10.1354 7.52429 9.55535 9.00023 9.55535C10.4762 9.55535 11.893 10.1354 12.9451 11.1705C13.9972 12.2056 14.6004 13.6128 14.6245 15.0885C12.86 15.8976 10.9413 16.3151 9.00023 16.3125C6.99323 16.3125 5.08823 15.8745 3.37598 15.0885Z"
                                    stroke="#A3A3A3" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div class="">{{ $umkm->nama_personal }}</div>
                        </div>
                        <div class="flex py-1 gap-2 items-center">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_680_421)">
                                    <path
                                        d="M1.6875 5.0625C1.6875 11.2755 6.7245 16.3125 12.9375 16.3125H14.625C15.0726 16.3125 15.5018 16.1347 15.8182 15.8182C16.1347 15.5018 16.3125 15.0726 16.3125 14.625V13.596C16.3125 13.209 16.0493 12.8715 15.6735 12.7778L12.3563 11.9482C12.0263 11.8657 11.6798 11.9895 11.4765 12.261L10.749 13.2308C10.5375 13.5128 10.1722 13.6372 9.8415 13.5157C8.61366 13.0643 7.49861 12.3514 6.57359 11.4264C5.64856 10.5014 4.93566 9.38634 4.48425 8.1585C4.36275 7.82775 4.48725 7.4625 4.76925 7.251L5.739 6.5235C6.01125 6.32025 6.13425 5.973 6.05175 5.64375L5.22225 2.3265C5.1766 2.14402 5.07129 1.98203 4.92304 1.86625C4.77479 1.75048 4.5921 1.68756 4.404 1.6875H3.375C2.92745 1.6875 2.49822 1.86529 2.18176 2.18176C1.86529 2.49822 1.6875 2.92745 1.6875 3.375V5.0625Z"
                                        stroke="#A3A3A3" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_680_421">
                                        <rect width="18" height="18" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <div class="">+62{{ $umkm->no_telp_personal }}</div>
                        </div>
                        <div class="flex py-1 gap-2 items-center">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.3125 5.0625V12.9375C16.3125 13.3851 16.1347 13.8143 15.8182 14.1307C15.5018 14.4472 15.0726 14.625 14.625 14.625H3.375C2.92745 14.625 2.49822 14.4472 2.18176 14.1307C1.86529 13.8143 1.6875 13.3851 1.6875 12.9375V5.0625M16.3125 5.0625C16.3125 4.61495 16.1347 4.18573 15.8182 3.86926C15.5018 3.55279 15.0726 3.375 14.625 3.375H3.375C2.92745 3.375 2.49822 3.55279 2.18176 3.86926C1.86529 4.18573 1.6875 4.61495 1.6875 5.0625M16.3125 5.0625V5.24475C16.3125 5.53286 16.2388 5.81618 16.0983 6.06772C15.9578 6.31926 15.7553 6.53065 15.51 6.68175L9.885 10.143C9.61891 10.3069 9.31252 10.3937 9 10.3937C8.68748 10.3937 8.38109 10.3069 8.115 10.143L2.49 6.6825C2.24469 6.5314 2.04215 6.32001 1.90168 6.06847C1.7612 5.81693 1.68747 5.53361 1.6875 5.2455V5.0625"
                                    stroke="#A3A3A3" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            <div class="">{{ $umkm->email_perusahaan }}</div>
                        </div>
                        <div class="flex py-1 gap-2 items-center">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 15.75C10.4962 15.7499 11.9501 15.2529 13.1333 14.337C14.3164 13.4211 15.1619 12.1382 15.537 10.6898M9 15.75C7.50376 15.7499 6.04991 15.2529 4.86673 14.337C3.68356 13.4211 2.83806 12.1382 2.463 10.6898M9 15.75C10.8638 15.75 12.375 12.7275 12.375 9C12.375 5.2725 10.8638 2.25 9 2.25M9 15.75C7.13625 15.75 5.625 12.7275 5.625 9C5.625 5.2725 7.13625 2.25 9 2.25M15.537 10.6898C15.6758 10.1498 15.75 9.5835 15.75 9C15.7519 7.83908 15.4529 6.69749 14.8823 5.6865M15.537 10.6898C13.5369 11.7985 11.2869 12.3786 9 12.375C6.6285 12.375 4.40025 11.7638 2.463 10.6898M2.463 10.6898C2.32106 10.1377 2.2495 9.56998 2.25 9C2.25 7.79625 2.565 6.66525 3.11775 5.6865M9 2.25C10.1972 2.2495 11.3729 2.56752 12.4066 3.17142C13.4403 3.77533 14.2948 4.64338 14.8823 5.6865M9 2.25C7.80282 2.2495 6.62706 2.56752 5.59336 3.17142C4.55966 3.77533 3.70523 4.64338 3.11775 5.6865M14.8823 5.6865C13.2493 7.10095 11.1604 7.87811 9 7.875C6.7515 7.875 4.695 7.05 3.11775 5.6865"
                                    stroke="#A3A3A3" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            <div class="">{{ $umkm->website_perusahaan }}</div>
                        </div>
                        <div class="flex py-1 gap-2 items-center">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.1875 1.875C3.8124 1.875 1.875 3.8124 1.875 6.1875V11.8125C1.875 14.1873 3.81233 16.125 6.1875 16.125H11.8125C14.1874 16.125 16.125 14.1874 16.125 11.8125V6.1875C16.125 3.81233 14.1873 1.875 11.8125 1.875H6.1875ZM6.1875 3H11.8125C13.5792 3 15 4.42042 15 6.1875V11.8125C15 13.5791 13.5791 15 11.8125 15H6.1875C4.42042 15 3 13.5792 3 11.8125V6.1875C3 4.42035 4.42035 3 6.1875 3ZM12.75 4.5C12.3356 4.5 12 4.83562 12 5.25C12 5.66438 12.3356 6 12.75 6C13.1644 6 13.5 5.66438 13.5 5.25C13.5 4.83562 13.1644 4.5 12.75 4.5ZM9 5.25C6.93569 5.25 5.25 6.93569 5.25 9C5.25 11.0643 6.93569 12.75 9 12.75C11.0643 12.75 12.75 11.0643 12.75 9C12.75 6.93569 11.0643 5.25 9 5.25ZM9 6.375C10.4562 6.375 11.625 7.54381 11.625 9C11.625 10.4562 10.4562 11.625 9 11.625C7.54381 11.625 6.375 10.4562 6.375 9C6.375 7.54381 7.54381 6.375 9 6.375Z"
                                    fill="#A3A3A3" />
                            </svg>

                            <a href="https://instagram.com/{{ $umkm->instagram_perusahaan }}" class="">@
                                {{ $umkm->instagram_perusahaan }}</a
                                href="https://instagram.com/{{ $umkm->instagram_perusahaan }}">
                        </div>

                    </div>
                    <div class="bg-neutral-100 px-7 py-5 rounded-md">
                        <div class="text-lg font-bold text-black mb-4">CAKUPAN USAHA</div>
                        <div class="flex py-1 gap-2 items-start">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.5 12C19.5 10.768 19.454 9.547 19.362 8.338C19.2912 7.38015 18.8787 6.4796 18.1996 5.80045C17.5204 5.1213 16.6199 4.70876 15.662 4.638C13.2241 4.45408 10.7759 4.45408 8.338 4.638C7.38015 4.70876 6.4796 5.1213 5.80045 5.80045C5.1213 6.4796 4.70876 7.38015 4.638 8.338C4.621 8.558 4.606 8.779 4.592 9M19.5 12L22.5 9M19.5 12L16.5 9M4.5 12C4.5 13.232 4.546 14.453 4.638 15.662C4.70876 16.6199 5.1213 17.5204 5.80045 18.1996C6.4796 18.8787 7.38015 19.2912 8.338 19.362C10.7759 19.546 13.2241 19.546 15.662 19.362C16.6199 19.2912 17.5204 18.8787 18.1996 18.1996C18.8787 17.5204 19.2912 16.6199 19.362 15.662C19.379 15.442 19.394 15.221 19.408 15M4.5 12L7.5 15M4.5 12L1.5 15"
                                    stroke="#A3A3A3" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div class="grid gap-2">
                                <div class="">Kapasitas Produksi</div>
                                <div class="">{{ $umkm->produk_kapasitas }} {{ $umkm->jenis_satuan_kapasitas }}
                                </div>
                            </div>
                        </div>
                        <div class="flex py-1 gap-2 items-start">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.25002 18.75C8.25002 19.1478 8.09198 19.5293 7.81068 19.8107C7.52937 20.092 7.14784 20.25 6.75002 20.25C6.35219 20.25 5.97066 20.092 5.68936 19.8107C5.40805 19.5293 5.25002 19.1478 5.25002 18.75M8.25002 18.75C8.25002 18.3522 8.09198 17.9706 7.81068 17.6893C7.52937 17.408 7.14784 17.25 6.75002 17.25C6.35219 17.25 5.97066 17.408 5.68936 17.6893C5.40805 17.9706 5.25002 18.3522 5.25002 18.75M8.25002 18.75H14.25M5.25002 18.75H3.37502C3.07665 18.75 2.7905 18.6315 2.57952 18.4205C2.36855 18.2095 2.25002 17.9234 2.25002 17.625V14.25M14.25 18.75H16.5M14.25 18.75V14.25M2.25002 14.25V6.61499C2.24843 6.34116 2.34848 6.07648 2.53081 5.87217C2.71313 5.66786 2.96477 5.53845 3.23702 5.50899C6.57006 5.16302 9.92997 5.16302 13.263 5.50899C13.828 5.56699 14.25 6.04699 14.25 6.61499V7.57299M2.25002 14.25H14.25M19.5 18.75C19.5 19.1478 19.342 19.5293 19.0607 19.8107C18.7794 20.092 18.3978 20.25 18 20.25C17.6022 20.25 17.2207 20.092 16.9394 19.8107C16.6581 19.5293 16.5 19.1478 16.5 18.75M19.5 18.75C19.5 18.3522 19.342 17.9706 19.0607 17.6893C18.7794 17.408 18.3978 17.25 18 17.25C17.6022 17.25 17.2207 17.408 16.9394 17.6893C16.6581 17.9706 16.5 18.3522 16.5 18.75M19.5 18.75H20.625C21.246 18.75 21.754 18.246 21.715 17.626C21.5141 14.3236 20.4019 11.1416 18.502 8.43299C18.3211 8.17927 18.0848 7.97001 17.8111 7.82102C17.5373 7.67203 17.2333 7.58722 16.922 7.57299H14.25M14.25 7.57299V14.25"
                                    stroke="#A3A3A3" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div class="grid gap-2">
                                <div class="">Jenis Ekspor</div>
                                <div class="">
                                    @php
                                        $incoterms = [
                                            'Direct' => $umkm->ekspordirect_perusahaan,
                                            'Indirect' => $umkm->eksporindirect_perusahaan,
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

                </div>
            </div>
        </div>

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
                                            <div class="text-base">{{ $umkm->identitas_personal }}</div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Nama Nasahab</div>
                                            <div class="text-base">{{ $umkm->nama_personal }}</div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">No. Handphone</div>
                                            <div class="text-base">+62{{ $umkm->no_telp_personal }}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <div class="text-base font-bold  uppercase mb-2">Alamat</div>
                                    <div class="flex py-3 gap-7">
                                        <div>
                                            <div class="text-base font-medium">Alamat Lengkap</div>
                                            <div class="text-base">{{ $umkm->alamat_personal }}</div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Kelurahan</div>
                                            <div class="text-base">{{ $umkm->kelurahan_personal }}</div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Kecamatan</div>
                                            <div class="text-base">{{ $umkm->kecamatan_personal }}</div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Kota / Kabupaten</div>
                                            <div class="text-base">{{ $umkm->kota_personal }}</div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Provinsi</div>
                                            <div class="text-base">{{ $umkm->provinsi_personal }}</div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Kode Pos</div>
                                            <div class="text-base">{{ $umkm->kode_pos_personal }}</div>
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
                                    <div class="flex gap-7 py-3">
                                        <div>
                                            <div class="text-base font-medium">Badan Usaha</div>
                                            <div class="text-base">{{ $umkm->badan_usaha }}</div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Nama Perusahaan</div>
                                            <div class="text-base">{{ $umkm->nama_perusahaan }}</div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Tahu Berdiri</div>
                                            <div class="text-base">{{ $umkm->berdiri_perusahaan }}</div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Kategori Perusahaan</div>
                                            <div class="text-base">{{ $umkm->kategori_perusahaan }}
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Nomor Legalitas atau Nomor KTP</div>
                                            <div class="text-base">{{ $umkm->nomor_badan_perusahaan }}
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Nomor NPWP</div>
                                            <div class="text-base">{{ $umkm->nomor_npwp_perusahaan }}
                                            </div>
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
                                    <div class="flex py-3 gap-7">
                                        <div>
                                            <div class="text-base font-medium">Nomor Telepon</div>
                                            <div class="text-base">+62{{ $umkm->no_telp_perusahaan }}
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Email</div>
                                            <div class="text-base">{{ $umkm->email_perusahaan }}</div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Website</div>
                                            <div class="text-base">{{ $umkm->website_perusahaan }}</div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Instagram</div>
                                            <div class="text-base">@ {{ $umkm->instagram_perusahaan }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="text-base font-bold  uppercase mb-2">Alamat</div>
                                    <div class="flex py-3 gap-7">
                                        <div>
                                            <div class="text-base font-medium">Alamat Lengkap</div>
                                            <div class="text-base">{{ $umkm->alamat_perusahaan }}</div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Kelurahan</div>
                                            <div class="text-base">{{ $umkm->kelurahan_perusahaan }}
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Kecamatan</div>
                                            <div class="text-base">{{ $umkm->kecamatan_perusahaan }}
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Kota / Kabupaten</div>
                                            <div class="text-base">{{ $umkm->kota_perusahaan }}</div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Provinsi</div>
                                            <div class="text-base">{{ $umkm->provinsi_perusahaan }}
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium">Kode Pos</div>
                                            <div class="text-base">{{ $umkm->kode_pos_perusahaan }}
                                            </div>
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
                                                <div class="text-base">
                                                    {{ $umkm->nama_brand }}
                                                </div>
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
                                                    CODE</div>
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
                                                    CODE</div>
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
                                                    CODE</div>
                                                <div
                                                    class="text-base font-bold text-neutral-600 overflow-ellipsis text-ellipsis truncate">
                                                    {{ $umkm->hscode2_perusahaan }}</div>
                                            </div>
                                        </div>
                                    </div>
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
                                                <div class="text-base">
                                                    {{ $umkm->cif_admin }}
                                                </div>
                                            </div>
                                            <div>
                                                <div class="text-base font-medium">Nama Pengelola</div>
                                                <div class="text-base">
                                                    {{ $umkm->nama_admin }}
                                                </div>
                                            </div>
                                            <div>
                                                <div class="text-base font-medium">Nomor NPP</div>
                                                <div class="text-base">
                                                    {{ $umkm->npp_admin }}
                                                </div>
                                            </div>
                                            <div>
                                                <div class="text-base font-medium">No. Handphone</div>
                                                <div class="text-base">
                                                    +62 {{ $umkm->hp_admin }}
                                                </div>
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
                                                <div class="flex">
                                                    <div class="text-base">
                                                        @php
                                                            $source_nasabah = [
                                                                ' Debitur Segmen SBP' => $umkm->sbp_admin,
                                                                'Debitur Segmen RPB' => $umkm->rpb_admin,
                                                                'Debitur Segmen CMB' => $umkm->cmb_admin,
                                                                'Debitur Segmen ENB' => $umkm->enb_admin,
                                                                'Nasabah (Non-Debitur)' => $umkm->non_nasabah_admin,
                                                                'Source Lainya' => $umkm->source_lainya_admin,
                                                            ];
                                                        @endphp
                                                        @foreach ($source_nasabah as $term => $value)
                                                            @if ($value !== null && $value !== '')
                                                                <div>{{ $term }}</div>
                                                            @endif
                                                        @endforeach
                                                    </div>

                                                    <div class="text-base">
                                                        @php
                                                            $source_nasabah = [
                                                                'sbp_admin' => $umkm->sbp_admin,
                                                                'rpb_admin' => $umkm->rpb_admin,
                                                                'cmb_admin' => $umkm->cmb_admin,
                                                                'enb_admin' => $umkm->enb_admin,
                                                                'non_nasabah_admin' => $umkm->non_nasabah_admin,
                                                                'source_lainya_admin' => $umkm->source_lainya_admin,
                                                            ];
                                                        @endphp
                                                        @foreach ($source_nasabah as $term => $value)
                                                            @if ($value == 1)
                                                                <div>: {{ $term }}</div>
                                                            @elseif ($value > 1)
                                                                <div>: {{ $value }}</div>
                                                            @endif
                                                        @endforeach
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


    </div>

    <div class="max-w-7xl mx-auto pb-12">
        <div class="flex justify-between shadow-lg py-6 px-14 bg-white rounded-lg mb-11">
            <x-abutton url="/dashboard" customClass="bg-orange-100 hover:bg-orange-200 text-orientLight"
                text="KEMBALI KE DASHBOARD "></x-abutton>
            <div class="bg-white flex justify-end gap-6">
                <x-abutton url="/umkm/profile/edit/{{ $umkm->id }}" text="EDIT DATA"></x-abutton>
                <x-abutton url="/umkm/export/cataloguepdf/{{ $umkm->id }}" text="LIHAT CATALOGUE"></x-abutton>
            </div>
        </div>
    </div>
</x-app-layout>
