<template lang="">
    <form>
        <!-- DATA PERSONAL -->
        <div
            class="border-2 border-black rounded-md bg-white p-6 dark:bg-slate-900"
        >
            <div class="text-xl dark:text-white">DATA PERSONAL</div>
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <div class="flex gap-6">
                        <div class="mb-4">
                            <label
                                for="fullName"
                                class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                                >Jenis Kelamin *</label
                            >
                            <select
                                class="outline-none focus:outline-none p-2 bg-white rounded-lg dark:bg-slate-800 dark:text-white"
                                value="{selectedValue}"
                                onChange="{handleSelectChange}"
                            >
                                {genre.map((item, i) => (
                                <option value="{item}" key="{i}">
                                    Laki-Laki
                                </option>
                                <option value="{item}" key="{i}">
                                    Perempuan
                                </option>
                                ))}
                            </select>
                        </div>
                        <div class="mb-4 w-full">
                            <label
                                for="email"
                                class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                                >Nama *</label
                            >
                            <input
                                type="text"
                                id="email"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder=""
                            />
                        </div>
                    </div>
                    <div class="mb-6">
                        <label
                            for="text"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Alamat *</label
                        >
                        <input
                            type="text"
                            id="text"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>
                    <div class="mb-6">
                        <label
                            for="text"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Kelurahan *</label
                        >
                        <input
                            type="text"
                            id="text"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>
                </div>

                <div>
                    <div class="mb-4">
                        <label
                            for="fullName"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Kecamatan *</label
                        >
                        <input
                            type="text"
                            id="fullName"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>
                    <div class="mb-4">
                        <label
                            for="email"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Kota *</label
                        >
                        <input
                            type="text"
                            id="email"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>

                    <div class="mb-6">
                        <label
                            for="text"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Provinsi *</label
                        >
                        <input
                            type="text"
                            id="text"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>
                    <div class="mb-6">
                        <label
                            for="text"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >No. Handphone *</label
                        >
                        <input
                            type="text"
                            id="text"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>
                </div>
            </div>
        </div>
        <!-- DATA PERUSAHAAN -->
        <div
            class="my-6 border-2 border-black rounded-md bg-white p-6 dark:bg-slate-900"
        >
            <div class="text-xl dark:text-white">DATA PERUSAHAAN</div>
            <div class="grid grid-cols-3 gap-6">
                <div>
                    <div class="flex gap-6">
                        <div class="mb-4">
                            <label
                                for="fullName"
                                class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                                >Bentuk Usaha *</label
                            >
                            <select
                                class="outline-none focus:outline-none p-2 bg-white rounded-lg dark:bg-slate-800"
                                value="{selectedValue}"
                                onChange="{handleSelectChange}"
                            >
                                {genre.map((item, i) => (
                                <option value="{item}" key="{i}">PT</option>
                                <option value="{item}" key="{i}">CV</option>
                                <option value="{item}" key="{i}">
                                    Perorangan
                                </option>
                                ))}
                            </select>
                        </div>
                        <div class="mb-4 w-full">
                            <label
                                for="email"
                                class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                                >Nama Perusahaan *</label
                            >
                            <input
                                type="text"
                                id="email"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder=""
                            />
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-6">
                            <label
                                for="text"
                                class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                                >Nomor Legalitas *</label
                            >
                            <input
                                type="text"
                                id="text"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder=""
                            />
                        </div>
                        <div class="mb-6">
                            <label
                                for="text"
                                class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                                >Nomor NPWP *</label
                            >
                            <input
                                type="text"
                                id="text"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder=""
                            />
                        </div>
                    </div>

                    <div class="mb-4">
                        <label
                            for="fullName"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Summary Perusahaan *</label
                        >
                        <input
                            type="text"
                            id="fullName"
                            class="form-input w-full px-4 py-2 h-28 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>
                </div>

                <div class="grid">
                    <div class="mb-4">
                        <label
                            for="fullName"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Alamat / Jalan *</label
                        >
                        <input
                            type="text"
                            id="fullName"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-6">
                            <label
                                for="text"
                                class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                                >Kelurahan *</label
                            >
                            <input
                                type="text"
                                id="text"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder=""
                            />
                        </div>
                        <div class="mb-6">
                            <label
                                for="text"
                                class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                                >Kecamatan *</label
                            >
                            <input
                                type="text"
                                id="text"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder=""
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-6">
                            <label
                                for="text"
                                class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                                >Kota *</label
                            >
                            <input
                                type="text"
                                id="text"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder="Kabupaten / Kota"
                            />
                        </div>
                        <div class="mb-6">
                            <label
                                for="text"
                                class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                                >Provinsi *</label
                            >
                            <input
                                type="text"
                                id="text"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder=""
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-6">
                            <label
                                for="text"
                                class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                                >Kode Pos *</label
                            >
                            <input
                                type="text"
                                id="text"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder=""
                            />
                        </div>
                        <div class="mb-6">
                            <label
                                for="text"
                                class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                                >Negara *</label
                            >
                            <input
                                type="text"
                                id="text"
                                class="form-input disable:form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder="Indonesia"
                            />
                        </div>
                    </div>
                </div>

                <div class="grid">
                    <div class="mb-4">
                        <label
                            for="fullName"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >No. Handphone *</label
                        >
                        <input
                            type="text"
                            id="fullName"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>
                    <div class="mb-4">
                        <label
                            for="email"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Website Perusahaan *</label
                        >
                        <input
                            type="text"
                            id="email"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>

                    <div class="mb-6">
                        <label
                            for="text"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Instagram Perusahaan *</label
                        >
                        <input
                            type="text"
                            id="text"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>
                    <div class="mb-6">
                        <label
                            for="text"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >E-Mail Perusahaan *</label
                        >
                        <input
                            type="text"
                            id="text"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>
                </div>

                <div></div>
            </div>

            <div class="grid grid-cols-3">
                <div class="grid">
                    <div class="text-sm">SEKTOR USAHA</div>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Food & Beverages</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Fashion & Accessoir</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700">Handicraft</span>
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700">Herb & Spices</span>
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Agriculture, Plantation & Crop Products</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Chemilcals, Rubber, & Mettalurgy</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Electronic & Household Appliances</span
                        >
                    </label>
                </div>

                <div class="grid">
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Wood & Wood Processing</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Health & Beauty</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Mining & Mineral Products</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Heavy Machinary & Equipment</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Automotive & Transporation</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700">Home Decor</span>
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700">Footware</span>
                    </label>
                </div>

                <div class="grid">
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700">Plastic</span>
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700">Stone</span>
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700">Texttiles</span>
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Optical, Photographic, Cinematic</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Raw, Hides, Skin, Leather & Furs</span
                        >
                    </label>
                </div>
            </div>
        </div>
        <!-- DATA LEGALITAS -->
        <div
            class="my-6 border-2 border-black rounded-md bg-white p-6 dark:bg-slate-900"
        >
            <div class="text-xl dark:text-white">DATA LEGALITAS</div>
            <div class="grid grid-cols-3 gap-6">
                <div>
                    <div class="mb-4">
                        <label
                            for="fullName"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Jenis Kelamin *</label
                        >
                        <input
                            type="text"
                            id="fullName"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>
                    <div class="mb-4">
                        <label
                            for="email"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Nama *</label
                        >
                        <input
                            type="text"
                            id="email"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>
                    <div class="mb-6">
                        <label
                            for="text"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Alamat *</label
                        >
                        <input
                            type="text"
                            id="text"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>
                    <div class="mb-6">
                        <label
                            for="text"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Kelurahan *</label
                        >
                        <input
                            type="text"
                            id="text"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>
                </div>
                <div class="grid-cols-1">
                    <div class="text-sm">EXPORT PERMIT</div>

                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Food and Drug Adminstration (FDA) - Amerika</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Japanese Agriculture Standards (JAS) - Jepang</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >General Adminstration of Costum China (GACC) -
                            China</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Korean Food and Drug Adminstration (KFDA) - Korea
                            Selatan</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Organic Agriculture</span
                        >
                    </label>

                    <div class="mb-6">
                        <label
                            for="text"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Alamat *</label
                        >
                        <input
                            type="text"
                            id="text"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>
                </div>
                <div>
                    <div class="columns-2">
                        <div class="">
                            <div class="text-sm">DOMESTIK</div>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700"
                                    >Badan Pengawas Obat dan Makanan
                                    (BPOM)</span
                                >
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700">Halal</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700"
                                    >Nutrition Fact</span
                                >
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700"
                                    >Sistem Verifikasi Legalitas Kayu
                                    (SVLK)</span
                                >
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700"
                                    >Indonesian Legal Wood</span
                                >
                            </label>
                        </div>
                        <div>
                            <div class="text-sm">INTERNATIONAL</div>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700"
                                    >Hazard Anaylisis and Critical Control
                                    Points (HACCP)</span
                                >
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700"
                                    >United Stated of Department of Agricurlture
                                    (USDA)</span
                                >
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700"
                                    >United Stated of Departement of
                                    Agricurlture (USDA Organic)</span
                                >
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700"
                                    >European Union (EU)</span
                                >
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700"
                                    >Indonesian Legal Wood</span
                                >
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DATA PRODUK -->
        <div
            class="my-6 border-2 border-black rounded-md bg-white p-6 dark:bg-slate-900"
        >
            <div class="text-xl dark:text-white">DATA PRODUK</div>
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <div class="mb-4">
                        <label
                            for="fullName"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Nama Brand/Merek *</label
                        >
                        <input
                            type="text"
                            id="fullName"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>

                    <div class="mb-6">
                        <label
                            for="text"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Jenis Produk (1) *</label
                        >
                        <div class="flex gap-4">
                            <input
                                type="text"
                                id="text"
                                class="w-full form-input px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder=""
                            />
                            <input
                                type="file"
                                id="text"
                                class="flex-auto form-input px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder=""
                            />
                        </div>
                    </div>
                    <div class="mb-6">
                        <label
                            for="text"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Jenis Produk (2) *</label
                        >
                        <div class="flex gap-4">
                            <input
                                type="text"
                                id="text"
                                class="w-full form-input px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder=""
                            />
                            <input
                                type="file"
                                id="text"
                                class="flex-auto form-input px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder=""
                            />
                        </div>
                    </div>
                    <div class="mb-6">
                        <label
                            for="text"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Jenis Produk (3) *</label
                        >
                        <div class="flex gap-4">
                            <input
                                type="text"
                                id="text"
                                class="w-full form-input px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder=""
                            />
                            <input
                                type="file"
                                id="text"
                                class="flex-auto form-input px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder=""
                            />
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex gap-6">
                        <div class="mb-4 w-full">
                            <label
                                for="email"
                                class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                                >Kapasitas Produksi (per bulan) *</label
                            >
                            <input
                                type="text"
                                id="email"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder=""
                            />
                        </div>
                        <div class="mb-4">
                            <label
                                for="fullName"
                                class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                                >Satuan *</label
                            >
                            <select
                                class="outline-none focus:outline-none p-2 bg-white rounded-lg dark:bg-slate-800 dark:text-white"
                                value="{selectedValue}"
                                onChange="{handleSelectChange}"
                            >
                                {genre.map((item, i) => (
                                <option value="{item}" key="{i}">Kg</option>
                                <option value="{item}" key="{i}">Ton</option>
                                <option value="{item}" key="{i}">
                                    Metric Ton
                                </option>
                                <option value="{item}" key="{i}">Meter</option>
                                <option value="{item}" key="{i}">Liter</option>
                                <option value="{item}" key="{i}">Pcs</option>
                                <option value="{item}" key="{i}">
                                    Kontainer 20ft
                                </option>
                                <option value="{item}" key="{i}">
                                    Kontainer 40ft
                                </option>
                                ))}
                            </select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label
                            for="email"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Total Omzet per Tahun (Domestik + Export) IDR
                            *</label
                        >
                        <input
                            type="text"
                            id="email"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder="IDR"
                        />
                    </div>

                    <div class="mb-6">
                        <label
                            for="text"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >% Omzet Exort dari total Omzet er Tahun *</label
                        >
                        <input
                            type="text"
                            id="text"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder="%"
                        />
                    </div>
                    <div class="mb-6">
                        <label
                            for="text"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Negara tujuan exort dan % dari omzet expor *</label
                        >
                        <div class="flex gap-4">
                            <input
                                type="text"
                                id="email"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder="Negara"
                            />
                            <input
                                type="text"
                                id="email"
                                class="flex-auto form-input px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder="%"
                            />
                        </div>
                        <div class="flex gap-4 mt-3">
                            <input
                                type="text"
                                id="email"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder="Negara"
                            />
                            <input
                                type="text"
                                id="email"
                                class="flex-auto form-input px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder="%"
                            />
                        </div>
                        <div class="flex gap-4 mt-3">
                            <input
                                type="text"
                                id="email"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder="Negara"
                            />
                            <input
                                type="text"
                                id="email"
                                class="flex-auto form-input px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder="%"
                            />
                        </div>
                        <div class="flex gap-4 mt-3">
                            <input
                                type="text"
                                id="email"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder="Negara"
                            />
                            <input
                                type="text"
                                id="email"
                                class="flex-auto form-input px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder="%"
                            />
                        </div>
                        <div class="flex gap-4 mt-3">
                            <input
                                type="text"
                                id="email"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder="Negara"
                            />
                            <input
                                type="text"
                                id="email"
                                class="flex-auto form-input px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder="%"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3">
                <div class="grid">
                    <div class="text-sm">INCOTERM</div>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700">Ex Works (EXW)</span>
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Free Carrier (FCA)</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Carriage Paid To (CPT)</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Delivered at Terminal (DAT)</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Delivery at Place (DAP)</span
                        >
                    </label>
                </div>
                <div class="grid">
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Delivered Duty Paid (DDP)</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Free Carrier (FCA)</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Free on Board (FOB)</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Cost and Freight (CFR)</span
                        >
                    </label>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            unchecked
                        /><span class="ml-2 text-gray-700"
                            >Cost Insurance and Freight (CIF)</span
                        >
                    </label>
                </div>

                <div class="grid">
                    <div class="mb-4">
                        <label
                            for="fullName"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Intoterm Lainya *</label
                        >
                        <input
                            type="text"
                            id="fullName"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>
                </div>
            </div>
        </div>
        <!-- INFORMASI ERBANKAN -->
        <div
            class="my-6 border-2 border-black rounded-md bg-white p-6 dark:bg-slate-900"
        >
            <div class="text-xl dark:text-white">
                INFORMASI PERBANKAN DAN PENGELOLA
            </div>
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <div class="mb-4">
                        <label
                            for="fullName"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Nomor CIF *</label
                        >
                        <input
                            type="text"
                            id="fullName"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>

                    <div class="mb-4">
                        <label
                            for="fullName"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >Nama Pengelola *</label
                        >
                        <input
                            type="text"
                            id="fullName"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder=""
                        />
                    </div>
                    <div class="mb-4">
                        <label
                            for="email"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >NPP *</label
                        >
                        <input
                            type="text"
                            id="email"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder="P0-"
                        />
                    </div>

                    <div class="mb-6">
                        <label
                            for="text"
                            class="block text-gray-700 text-sm dark:text-gray-300 font-semibold mb-2"
                            >No. Handphone *</label
                        >
                        <input
                            type="text"
                            id="text"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                            required
                            placeholder="+62"
                        />
                    </div>
                </div>

                <div>
                    <div class="grid grid-cols-2 mb-4">
                        <div class="grid">
                            <div class="text-sm">
                                Product Holding Ratio (PHR)
                            </div>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700"
                                    >Taplus Bisnis</span
                                >
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700"
                                    >Payroll</span
                                >
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700">KI</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700">KMK</span>
                            </label>
                        </div>

                        <div class="grid">
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700">C3</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700"
                                    >BNI Direct</span
                                >
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700">L/C</span>
                            </label>
                            <input
                                type="text"
                                id="text"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-orange-600 dark:bg-slate-800"
                                required
                                placeholder="Lainya ..."
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 mb-4">
                        <div class="grid">
                            <div class="text-sm">Segmentasi</div>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700">SBP</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700">RPB</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700">CMB</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700">ENB</span>
                            </label>
                        </div>
                        <div class="grid">
                            <div class="text-sm">Devisi</div>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700">CMB 1</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700">CMB 2</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700">ENB</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-5 w-5 text-gray-600"
                                    unchecked
                                /><span class="ml-2 text-gray-700"
                                    >Wilayah</span
                                >
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="my-4 border-2 border-black rounded-md bg-white p-6 dark:bg-slate-900"
        >
            <button
                type="submit"
                class="w-full bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50"
            >
                Register
            </button>
            <p class="text-gray-600 text-xs text-center mt-4">
                By clicking Register, you agree to accept BNI's
                <a href="#" class="text-blue-500 hover:underline"
                    >Terms and Conditions</a
                >.
            </p>
        </div>
    </form>
</template>
<script>
export default {};
</script>
<style lang=""></style>
