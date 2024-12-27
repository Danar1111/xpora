<x-cataprint-layout title="Catalogue {{ $umkm->badan_usaha }}. {{ $umkm->nama_perusahaan }}">

    <div style="width: 1088px" class=" mx-auto bg-white mt-10 overflow-hidden relative flex">
        <div class="flex-auto bg-catalouge">
            <div class="flex justify-between items-center ml-24">
                <img src="{{ url('storage/' . $umkm->logo_perusahaan) }}" class="w-20 h-20 object-contain object-center"
                    alt="Logo Perusahaan">
                <div class="ml-6 border-b-2 border-twine-400 w-full"></div>
            </div>
            <div class="grid mr-5 mt-7 gap-7 ml-24">
                <div class="flex content-end items-end h-28 ">
                    <div class="text-5xl text-white uppercase font-bold"><span
                            class="font-light">{{ $umkm->badan_usaha }}.</span> {{ $umkm->nama_perusahaan }}</div>

                </div>
                <p class="text-white text-base text-justify">
                    <span class="font-bold">{{ $umkm->badan_usaha }} {{ $umkm->nama_perusahaan }}</span> merupakan
                    perusahan
                    yang bergerak di bidang Agriculture dan didirikan pada tahun {{ $umkm->berdiri_perusahaan }}.
                    {{ $umkm->badan_usaha }} {{ $umkm->nama_perusahaan }} merupakan Industri
                    pengolahan dan perdagangan untuk produk {{ $umkm->jenis_produk_1_brand }} dengan merk
                    {{ $umkm->nama_brand }}. Lokasi usaha berada di Kabupaten
                    {{ $umkm->kota_perusahaan }} {{ $umkm->provinsi_perusahaan }}.
                    Saat ini{{ $umkm->badan_usaha }}. {{ $umkm->nama_perusahaan }} telah melakukan
                    ekspor ke berbagai negara baik secara langsung kepada buyer di negara tujuan ekspor maupun melalui
                    mitra bisnisnya. Untuk mendapatkan informasi perusahaan selangkapnya mohon hubungi BNI kantor cabang
                    terdekat atau kunjungi website www.xpora.bni.co.id
                </p>
                <div style="top: 920; left: -272;" class="absolute rotate-90 flex w-full items-center -ml-56 mt-56">
                    <div style="margin-right: -150px"
                        class="text-twine-200 text-3xl font-semibold tracking-widest uppercase z-20 bg-tobacco-brown-700">
                        {{ $umkm->kategori_perusahaan }}</div>
                    <div class="absoluteml-6 border-b-2 border-twine-400 w-full z-10"></div>
                </div>
                <div class="flex relative justify-between z-20 items-start w-12/12">
                    <img style="width: 421px; height: 613px;" class=" object-cover object-center"
                        src="{{ url('storage/' . $umkm->foto_produk_1_brand) }}" alt="Foto Produk">
                    <img style="width: 440px; height: 413px" class="mt-20 object-cover object-center"
                        src="{{ url('storage/' . $umkm->foto_produk_2_brand) }}" alt="Foto Produk">
                    <img style="width: 177px; height: 200px; top: 493px; margin-right: -20px"
                        class="right-0 absolute object-cover object-center"
                        src="{{ url('storage/' . $umkm->foto_produk_3_brand) }}" alt="Foto Produk">

                </div>
                <div class="flex gap-10 items-center mt-28">
                    <img src="\img\core\logo\xpora-logo-white.png" alt="">
                    <div class="text-xs font-light text-white opacity-50">
                        2024 © PT. Bank Negara Indonesia (Persero), Tbk. All Rights Reserved
                    </div>
                </div>
            </div>

        </div>
        <div class="flex-auto w-4/12 bg-white py-4 p-7">
            <div class="w-full text-right text-neutral-300 text-sm font-semibold">#{{ $umkm->kode_umkm }}</div>
            <div class="grid content-start mt-28 h-52">
                <div class=" text-neutral-400">NAMA BRAND</div>
                <div class=" text-neutral-900 text-4xl font-bold uppercase">{{ $umkm->nama_brand }}</div>
            </div>
            <div class="flex flex-wrap content-end items-end h-80">
                <div class="flex">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.5 5L13.0833 12.088C13.0609 12.47 12.8933 12.829 12.6148 13.0915C12.3363 13.354 11.968 13.5001 11.5853 13.5H4.41467C4.03198 13.5001 3.6637 13.354 3.38522 13.0915C3.10674 12.829 2.93912 12.47 2.91667 12.088L2.5 5M8 7V11.5M8 11.5L6 9.5M8 11.5L10 9.5M2.25 5H13.75C14.164 5 14.5 4.664 14.5 4.25V3.25C14.5 2.836 14.164 2.5 13.75 2.5H2.25C1.836 2.5 1.5 2.836 1.5 3.25V4.25C1.5 4.664 1.836 5 2.25 5Z"
                            stroke="#765B3E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <div class="ml-2">
                        <div class=" text-neutral-900 text-sm font-bold">PRODUKTIFITAS</div>
                        <div class="flex">
                            <div class="text-neutral-500 text-xs">Kapasitas produksi</div>
                            <div class="ml-6 text-neutral-900 text-xs">: {{ $umkm->produk_kapasitas }} <span
                                    class="uppercase font-bold text-neutral-500">{{ $umkm->jenis_satuan_kapasitas }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 flex">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.75 1.5H3.75C3.336 1.5 3 1.836 3 2.25V13.75C3 14.164 3.336 14.5 3.75 14.5H12.25C12.664 14.5 13 14.164 13 13.75V7.75M6.75 1.5H7C8.5913 1.5 10.1174 2.13214 11.2426 3.25736C12.3679 4.38258 13 5.9087 13 7.5V7.75M6.75 1.5C7.34674 1.5 7.91903 1.73705 8.34099 2.15901C8.76295 2.58097 9 3.15326 9 3.75V4.75C9 5.164 9.336 5.5 9.75 5.5H10.75C11.3467 5.5 11.919 5.73705 12.341 6.15901C12.7629 6.58097 13 7.15326 13 7.75M6 10L7.5 11.5L10 8"
                            stroke="#765B3E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="ml-2">
                        <div class=" text-neutral-900 text-sm font-bold">TERM & CONDITION</div>
                        <div class="flex">
                            <div class="w-6/12 text-neutral-500 text-xs">Incoterm</div>
                            <div class="w-6/12 text-neutral-900 text-xs">:
                                @php
                                    $incoterms = [
                                        'EXW' => $umkm->incoterms_ex_works,
                                        'FCA' => $umkm->incoterms_free_carrier,
                                        'CFR' => $umkm->incoterms_carriage_paid_to,
                                        'CIP' => $umkm->incoterms_carriage_and_insurance_paid_to,
                                        'DAT' => $umkm->incoterms_delivered_at_terminal,
                                        'DAP' => $umkm->incoterms_delivered_at_place,
                                        'DDP' => $umkm->incoterms_delivered_duty_paid,
                                        'FAS' => $umkm->incoterms_free_alongside_ship,
                                        'FAS' => $umkm->incoterms_free_alongside_ship,
                                        'FOB' => $umkm->incoterms_free_on_board,
                                        'CFR' => $umkm->incoterms_cost_and_freight,
                                        'CIF' => $umkm->incoterms_cost_insurance_and_freight,
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
                        <div class="flex">
                            <div class="w-6/12 text-neutral-500 text-xs">Payment term</div>
                            <div class="w-6/12 text-neutral-900 text-xs">:
                                @php
                                    $paymentTerms = [
                                        'TT' => $umkm->paymentterms_tt,
                                        'LC' => $umkm->paymentterms_lc,
                                        'DC' => $umkm->paymentterms_documentary_collection,
                                        'Consignment' => $umkm->paymentterms_consignment,
                                        'OpenAccount' => $umkm->paymentterms_open_account,
                                    ];
                                @endphp

                                @foreach ($paymentTerms as $term => $value)
                                    @if ($value == 1)
                                        {{ $term . ', ' }}
                                    @elseif($value > 1)
                                        {{ $value . ', ' }}
                                    @endif
                                @endforeach

                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-6/12 text-neutral-500 text-xs">Min. Order Quantity</div>
                            <div class="flex-none w-6/12 text-neutral-900 text-xs">: {{ $umkm->produk_min_qty }} <span
                                    class="uppercase font-bold text-neutral-500">{{ $umkm->jenis_satuan_kapasitas }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 450px" class="flex">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.5 11.5V13.75C10.5 14.164 10.164 14.5 9.75 14.5H3.25C3.05109 14.5 2.86032 14.421 2.71967 14.2803C2.57902 14.1397 2.5 13.9489 2.5 13.75V5.25C2.5 4.836 2.836 4.5 3.25 4.5H4.5C4.83505 4.49977 5.16954 4.52742 5.5 4.58267M10.5 11.5H12.75C13.164 11.5 13.5 11.164 13.5 10.75V7.5C13.5 4.52667 11.338 2.05933 8.5 1.58267C8.16954 1.52742 7.83505 1.49977 7.5 1.5H6.25C5.836 1.5 5.5 1.836 5.5 2.25V4.58267M10.5 11.5H6.25C6.05109 11.5 5.86032 11.421 5.71967 11.2803C5.57902 11.1397 5.5 10.9489 5.5 10.75V4.58267M13.5 9V7.75C13.5 7.15326 13.2629 6.58097 12.841 6.15901C12.419 5.73705 11.8467 5.5 11.25 5.5H10.25C10.0511 5.5 9.86032 5.42098 9.71967 5.28033C9.57902 5.13968 9.5 4.94891 9.5 4.75V3.75C9.5 3.45453 9.4418 3.16195 9.32873 2.88896C9.21566 2.61598 9.04992 2.36794 8.84099 2.15901C8.63206 1.95008 8.38402 1.78435 8.11104 1.67127C7.83806 1.5582 7.54547 1.5 7.25 1.5H6.5"
                        stroke="#765B3E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <div class="ml-2">
                    <div class=" text-neutral-900 text-sm font-bold">EXPORT PERMIT & SERTIFIKASI</div>
                    <div class="flex">
                        @php
                            $paymentTermsImages = [
                                '/img/core/logo/cert/bpom.png' => $umkm->legalcert_bpom,
                                '/img/core/logo/cert/halal.png' => $umkm->legalcert_halal,
                                '/img/core/logo/cert/svlk.png' => $umkm->legalcert_svkl,
                                '/img/core/logo/cert/haccp.png' => $umkm->legalcert_haccp,
                                '/img/core/logo/cert/msds.png' => $umkm->legalcert_msds,
                                '/img/core/logo/cert/usda.png' => $umkm->legalcert_usda,
                                '/img/core/logo/cert/usda-organic.png' => $umkm->legalcert_usda_organic,
                                '/img/core/logo/cert/eu.png' => $umkm->legalcert_eu,
                            ];
                        @endphp

                        <div class="grid grid-cols-3 gap-3 items-center">
                            @foreach ($paymentTermsImages as $imagePath => $value)
                                @if ($value == 1)
                                    <img src="{{ $imagePath }}" alt="" class="w-12"></li>
                                @elseif($value > 1)
                                    {{ $value . ' ' . $imagePath }}</li>
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
            <div class="flex mt-5">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.9286 8.92868L13.172 8.17201C13.0581 8.05792 12.9633 7.92624 12.8913 7.78201L12.1713 6.34201C12.1517 6.30293 12.1231 6.26906 12.0878 6.2432C12.0526 6.21734 12.0117 6.20022 11.9685 6.19325C11.9254 6.18628 11.8812 6.18967 11.8396 6.20313C11.798 6.2166 11.7602 6.23975 11.7293 6.27068C11.6597 6.34016 11.5729 6.38978 11.4777 6.4144C11.3825 6.43901 11.2825 6.43773 11.188 6.41068L10.3393 6.16868C10.2035 6.13051 10.0586 6.14196 9.93045 6.20097C9.80235 6.25999 9.69945 6.36271 9.64022 6.49072C9.58099 6.61873 9.5693 6.76365 9.60725 6.89949C9.6452 7.03534 9.73029 7.15323 9.84729 7.23201L10.2386 7.49201C10.632 7.75535 10.688 8.31201 10.3533 8.64668L10.22 8.78001C10.0786 8.92135 9.99995 9.11201 9.99995 9.31068V9.58401C9.99995 9.85668 9.92662 10.1233 9.78662 10.356L8.90995 11.8167C8.78498 12.0251 8.60815 12.1976 8.39668 12.3174C8.1852 12.4371 7.94631 12.5001 7.70329 12.5C7.51675 12.5 7.33785 12.4259 7.20595 12.294C7.07405 12.1621 6.99995 11.9832 6.99995 11.7967V11.0153C6.99995 10.402 6.62662 9.85068 6.05729 9.62268L5.62062 9.44868C5.30291 9.3215 5.03824 9.08951 4.87054 8.7912C4.70283 8.49289 4.64217 8.14621 4.69862 7.80868L4.70329 7.78068C4.73428 7.59522 4.79986 7.41724 4.89662 7.25601L4.95662 7.15601C5.11583 6.89089 5.3531 6.68145 5.63594 6.55638C5.91878 6.43131 6.23336 6.39672 6.53662 6.45735L7.32195 6.61468C7.50676 6.65154 7.69867 6.61748 7.85951 6.51928C8.02034 6.42107 8.13832 6.26592 8.18995 6.08468L8.32862 5.59801C8.37666 5.42988 8.36444 5.25025 8.29408 5.09018C8.22372 4.9301 8.09964 4.79964 7.94329 4.72135L7.49995 4.50001L7.43929 4.56068C7.3 4.69997 7.13464 4.81046 6.95265 4.88584C6.77066 4.96122 6.5756 5.00002 6.37862 5.00001H6.25862C6.09262 5.00001 5.93395 5.06668 5.81729 5.18268C5.71036 5.29057 5.56759 5.35551 5.416 5.36519C5.26441 5.37487 5.11454 5.32863 4.99475 5.23522C4.87497 5.14181 4.7936 5.00772 4.76606 4.85834C4.73851 4.70896 4.7667 4.55467 4.84529 4.42468L5.78595 2.85601C5.87971 2.70009 5.94432 2.5284 5.97662 2.34935M13.9286 8.92868C14.0901 7.9001 13.9811 6.84721 13.6125 5.8735C13.2438 4.89978 12.6281 4.03877 11.8258 3.37509C11.0236 2.71141 10.0625 2.2679 9.03694 2.08818C8.01139 1.90845 6.95673 1.99869 5.97662 2.35001C4.9795 2.70744 4.09477 3.32246 3.41235 4.13259C2.72993 4.94271 2.27414 5.91905 2.09129 6.9624C1.90844 8.00574 2.00506 9.07889 2.37133 10.0728C2.7376 11.0667 3.36046 11.9459 4.17661 12.6211C4.99276 13.2963 5.97311 13.7434 7.01804 13.917C8.06297 14.0906 9.13522 13.9844 10.1258 13.6094C11.1164 13.2343 11.9901 12.6036 12.658 11.7815C13.326 10.9594 13.7643 9.97511 13.9286 8.92868Z"
                        stroke="#765B3E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>


                <div class="ml-2">
                    <div class=" text-neutral-900 text-sm font-bold">NEGARA TUJUAN EXPOR</div>
                    <div class="flex">

                    </div>
                    <div class="flex">
                        <ul class="list-disc text-sm ml-5">
                            @if ($umkm->omzet_export_1)
                                <li>{{ $umkm->omzet_intExport_1  }}</li>
                            @endif
                            @if ($umkm->omzet_export_2)
                                <li>{{ $umkm->omzet_intExport_2  }}</li>
                            @endif
                            @if ($umkm->omzet_export_3)
                                <li>{{ $umkm->omzet_intExport_3  }}</li>
                            @endif
                            @if ($umkm->omzet_export_4)
                                <li>{{ $umkm->omzet_intExport_4  }}</li>
                            @endif
                            @if ($umkm->omzet_export_5)
                                <li>{{ $umkm->omzet_intExport_5  }}</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex mt-8">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M19.5187 35.5564L19.5234 35.558C19.8293 35.6915 20 35.6604 20 35.6604C20 35.6604 20.1708 35.6915 20.4782 35.558L20.4813 35.5564L20.4906 35.5517L20.5186 35.5393C20.6659 35.4709 20.8114 35.3984 20.9548 35.322C21.2436 35.1729 21.6472 34.9494 22.1301 34.6497C23.0926 34.0536 22.1301 30.5 25.6605 26.4301C28.2314 23.9523 30.8676 20.0788 30.8676 14.6559C30.8676 13.2287 30.5865 11.8155 30.0404 10.497C29.4942 9.17849 28.6937 7.98046 27.6846 6.97131C26.6754 5.96216 25.4774 5.16166 24.1589 4.61551C22.8404 4.06937 21.4272 3.78827 20 3.78827C18.5729 3.78827 17.1597 4.06937 15.8412 4.61551C14.5227 5.16166 13.3246 5.96216 12.3155 6.97131C11.3063 7.98046 10.5058 9.17849 9.95969 10.497C9.41354 11.8155 9.13245 13.2287 9.13245 14.6559C9.13245 20.0772 11.7686 23.9523 14.3411 26.4301C18.0475 30 16.601 33.8625 17.87 34.6497C18.3615 34.9549 18.8671 35.2368 19.3852 35.4943L19.4815 35.5393L19.5094 35.5517L19.5187 35.5564ZM20 18.149C20.9265 18.149 21.815 17.781 22.4701 17.1259C23.1252 16.4708 23.4932 15.5823 23.4932 14.6559C23.4932 13.7294 23.1252 12.8409 22.4701 12.1858C21.815 11.5307 20.9265 11.1627 20 11.1627C19.0736 11.1627 18.1851 11.5307 17.53 12.1858C16.8749 12.8409 16.5069 13.7294 16.5069 14.6559C16.5069 15.5823 16.8749 16.4708 17.53 17.1259C18.1851 17.781 19.0736 18.149 20 18.149Z"
                        fill="#765B3E" />
                </svg>
                <div class="ml-2">
                    <div class=" text-neutral-900 font-bold text-3xl">{{ $umkm->kota_perusahaan }}</div>
                    <div class="flex">{{ $umkm->provinsi_perusahaan }}</div>
                    <div class="flex">

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="flex justify-center mt-3 gap-4">
        <x-abutton customClass="text-orientLight bg-orange-100 hover:bg-orange-200"
            url="/umkm/export/cataloguepdf/{{ $umkm->id }}" text="design 1"></x-abutton>
        <x-abutton customClass="text-orientLight bg-orange-100 hover:bg-orange-200"
            url="/umkm/export/cataloguepdf2/{{ $umkm->id }}" text="design 2"></x-abutton>
        {{-- <x-abutton customClass="text-orientLight bg-orange-100 hover:bg-orange-200"
            url="/umkm/export/cataloguepdf3/{{ $umkm->id }}" text="design 3"></x-abutton> --}}
    </div>
    {{-- <x-abutton customClass="text-orientLight bg-orange-100 hover:bg-orange-200"
    url="{{route('downloadpdf')}}" text="DOWNLOAD"></x-abutton> --}}

</x-cataprint-layout>
