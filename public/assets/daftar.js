// In your Javascript (external .js resource or <script> tag)

$(document).ready(function() {
    $(".select2").select2();
});

// function updatePercentage() {
//     // Mengambil nilai dari input 1 dan 2
//     const value1 = parseFloat(document.getElementById("input1").value) || 0;
//     const value2 = parseFloat(document.getElementById("input2").value) || 0;

//     // Menghitung sisa persentase
//     const remainingPercentage = 100 - value1 - value2;

//     // Menetapkan nilai ke input 3
//     document.getElementById("input3").value = remainingPercentage.toFixed(2);

//     // Menghitung total persentase
//     const totalPercentage = value1 + value2 + remainingPercentage;

//     // Menetapkan nilai 100% ke input 4 dan 5 jika total persentase tidak melebihi 100%
//     document.getElementById("input4").value = totalPercentage <= 100 ? 100 : "";
//     document.getElementById("input5").value = totalPercentage <= 100 ? 100 : "";
// }

const umkmData = [
    // Data UMKM Anda disini
];

function matchesKeyword(umkm) {
    if (!this.keyword) return true;

    const keyword = this.keyword.toLowerCase();
    return Object.values(umkm).some(value =>
        String(value).toLowerCase().includes(keyword)
    );
}

document.addEventListener('DOMContentLoaded', function () {
    const app = window.Alpine;
    app.data('umkm', umkmData);
    app.data('matchesKeyword', matchesKeyword);
});

window.sourceradio = function() {
	if(document.getElementById("d_sbp").checked) {
		document.getElementById("sbp").disabled = false;
		document.getElementById("sbp").value = "";

	} else {
		document.getElementById("sbp").disabled = true;
        document.getElementById("sbp").value = "";


	}
	if(document.getElementById("d_rpb").checked) {
		document.getElementById("rpb").disabled = false;
        document.getElementById("rpb").value = "";

	} else {
		document.getElementById("rpb").disabled = true;
		document.getElementById("rpb").value = "";

	}
	if(document.getElementById("d_cmb").checked) {
		document.getElementById("cmb").disabled = false;
		document.getElementById("cmb").value = "";

	} else {
		document.getElementById("cmb").disabled = true;
		document.getElementById("cmb").value = "";

	}
	if(document.getElementById("d_enb").checked) {
		document.getElementById("enb").disabled = false;
		document.getElementById("enb").value = "";

	} else {
		document.getElementById("enb").disabled = true;
		document.getElementById("enb").value = "";

	}
	if(document.getElementById("d_nsb").checked) {
		document.getElementById("nsb").disabled = false;
		document.getElementById("nsb").value = "";

	} else {
		document.getElementById("nsb").disabled = true;
		document.getElementById("nsb").value = "";

	}
	if(document.getElementById("d_sl").checked) {
		document.getElementById("sl").disabled = false;
		document.getElementById("sl").value = "";

	} else {
		document.getElementById("sl").disabled = true;
		document.getElementById("sl").value = "";

	}
}

function formatCurrency(input) {
    // Pastikan nilai input tidak kosong atau undefined
    if (input.value === undefined || input.value === "") {
        return;
    }

    // Menghapus semua karakter selain digit
    const sanitizedValue = input.value.replace(/[^0-9]/g, "");

    // Menghapus karakter terakhir jika tidak berupa angka
    if (isNaN(sanitizedValue.slice(-1))) {
        input.value = sanitizedValue.slice(0, -1);
        return;
    }

    // Memeriksa apakah nilai input adalah angka
    if (isNaN(sanitizedValue)) {
        // Jika bukan angka, kembalikan nilai input ke nilai sebelumnya
        input.value = sanitizedValue;
        return;
    }

    // Mengonversi nilai menjadi bilangan bulat
    const intValue = parseInt(sanitizedValue, 10);

    // Memformat bilangan bulat sebagai uang dengan titik desimal setiap tiga digit
    const formattedValue = intValue.toLocaleString("id-ID");

    // Menetapkan nilai yang telah diformat ke dalam input
    input.value = formattedValue;
}


function onChangeRegion(dom, url, query, success) {
    $(dom).on("change", function () {
        console.log();
        let data = {};
        data[query] = $(this).find(":selected").data("id");
        $.ajax({
            type: "POST",
            url,
            data: data,
            cached: false,
            success,
            error: function (data) {
                console.log("error:", data);
            },
        });
    });
}

function onChangeImageInput(dom, target) {
    $(dom).on("change", function () {
        $(target).html(`
            <div class="custom-bg-tosca-50 rounded-full p-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <g clip-path="url(#clip0_151_16858)">
                        <path d="M11.668 2.5V5.83333C11.668 6.05435 11.7558 6.26631 11.912 6.42259C12.0683 6.57887 12.2803 6.66667 12.5013 6.66667H15.8346" stroke="#076281" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.168 17.5H5.83464C5.39261 17.5 4.96868 17.3244 4.65612 17.0118C4.34356 16.6993 4.16797 16.2754 4.16797 15.8333V4.16667C4.16797 3.72464 4.34356 3.30072 4.65612 2.98816C4.96868 2.67559 5.39261 2.5 5.83464 2.5H11.668L15.8346 6.66667V15.8333C15.8346 16.2754 15.659 16.6993 15.3465 17.0118C15.0339 17.3244 14.61 17.5 14.168 17.5Z" stroke="#076281" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_151_16858">
                            <rect width="20" height="20" fill="white" transform="translate(0.000976562)"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div>
                <p class="font-bold">${
                    $(this)[0].files[0].name.length > 20
                        ? $(this)[0].files[0].name.substring(0, 20) + "..."
                        : $(this)[0].files[0].name
                }</p>
            </div>
        `);
    });
}

function onCheckRequired() {
    let required = $("input,textarea,select").filter(function () {
        if ($(this).attr("required") === "required" && $(this).val() === "") {
            return $(this);
        }
    });

    if (required.length === 0) {
        $("#modal-submit").html(
            `
                <img src="/img/umkm/icon/icon-save-success.png" alt="icon-save-success">
                <p class="mt-4 font-bold">Anda yakin ingin submit data nasabah?</p>
                <p class="mt-4 text-center">Pastikan Anda mengisi data nasabah dengan benar dan lengkap</p>
                <div class="flex justify-between gap-5 mt-6 button-container w-full">
                    <button type="button" @click="modalSubmit = false"
                        class="width-50 flex justify-center items-center gap-2 text-center text-sm font-bold custom-bg-tosca-50 text-tosca padding-button rounded-lg">
                        Kembali
                    </button>
                    <button type="submit"
                        class="width-50 flex justify-center items-center gap-2 text-center text-sm font-bold custom-bg-orange text-white padding-button rounded-lg">
                        Simpan Data
                    </button>
                </div>
            `
        );
    } else {
        $("#modal-submit").html(
            `
                <img src="/img/umkm/icon/icon-save-failed.png" alt="icon-save-success">
                <p class="mt-4 text-center">Pastikan Anda mengisi data nasabah dengan benar dan lengkap</p>
                <div class="flex justify-between gap-5 mt-6 button-container w-full">
                    <button type="button" @click="modalSubmit = false"
                        class="width-50 flex justify-center items-center gap-2 text-center text-sm font-bold custom-bg-tosca-50 text-tosca padding-button rounded-lg">
                        Periksa Kembali
                    </button>
                    <button onclick="handleEmptyRequired()" type="button" @click="modalSubmit = false"
                        class="width-50 flex justify-center items-center gap-2 text-center text-sm font-bold bg-orient-800 text-white padding-button rounded-lg">
                        Konfirmasi
                    </button>
                </div>
            `
        );
    }
}

function handleEmptyRequired() {
    $("input,textarea,select").filter(function () {
        if ($(this).attr("required") === "required" && $(this).val() === "") {
            $(this).next("p").remove();
            $(
                "<p class='text-red-500 text-xs mt-1'>Pastikan Anda mengisi kolom ini</p>"
            ).insertAfter($(this));
            return $(this).addClass("border-error");
        } else {
            $(this).next("p").remove();
            return $(this).removeClass("border-error");
        }
    });
}

$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    onChangeImageInput("#compro_perusahaan", "#compro_perusahaan_label");
    onChangeImageInput("#logo_perusahaan", "#logo_perusahaan_label");
    onChangeImageInput("#foto_produk_1_brand", "#foto_produk_1_brand_label");
    onChangeImageInput("#foto_produk_2_brand", "#foto_produk_2_brand_label");
    onChangeImageInput("#foto_produk_3_brand", "#foto_produk_3_brand_label");

    onChangeRegion("#provinsi", "/getkabupaten", "id_provinsi", function (msg) {
        $("#kabupaten").html(msg);
    });

    onChangeRegion(
        "#kabupaten",
        "/getkecamatan",
        "id_kabupaten",
        function (msg) {
            $("#kecamatan").html(msg);
        }
    );

    onChangeRegion("#kecamatan", "/getdesa", "id_kecamatan", function (msg) {
        $("#kelurahan").html(msg);
    });

    onChangeRegion(
        "#provinsi_perusahaan",
        "/getkabupaten",
        "id_provinsi",
        function (msg) {
            $("#kabupaten_perusahaan").html(msg);
        }
    );

    onChangeRegion(
        "#kabupaten_perusahaan",
        "/getkecamatan",
        "id_kabupaten",
        function (msg) {
            $("#kecamatan_perusahaan").html(msg);
        }
    );

    onChangeRegion(
        "#kecamatan_perusahaan",
        "/getdesa",
        "id_kecamatan",
        function (msg) {
            $("#kelurahan_perusahaan").html(msg);
        }
    );
});
