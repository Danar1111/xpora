<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Exports\ExportUmkm;
use App\Imports\ImportUmkm;
use App\Models\Umkm;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

// Get semua data



class UmkmController extends Controller
{
    public function dashboard()
    {
        $umkm = Umkm::all();
        $umkmCount = $umkm->count(); // Use the count method on the collection
        return view('dashboard', compact('umkm', 'umkmCount'));
    }
    

    public function generateUniqueCode()
    {
        // Mendapatkan tanggal saat ini
        $tanggalSekarang = date('d-m-Y');
    
        // Ambil dua digit terakhir dari tahun
        $tahunSekarang = substr(date('Y'), -2);
        
        // Ambil dua digit bulan
        $bulanSekarang = date('m');
        
        // Ambil dua digit hari
        $hariSekarang = date('d');
        
        // Nomor ID maksimal 1000
        $nomorID = mt_rand(1, 1000);
        
        // Format nomor ID dengan panjang 4 digit
        $nomorIDFormatted = str_pad($nomorID, 4, '0', STR_PAD_LEFT);
        
        // Gabungkan semua elemen untuk membuat kode unik
        $uniqueCode = "UKM" . $tahunSekarang . $bulanSekarang . $hariSekarang . $nomorIDFormatted;
        
        return $uniqueCode;
    }
    
    
    

    public function create()
    {
        $provinces = Province::all();
        $regencies = Regency::all();
        return view('umkm.daftar', compact('provinces', 'regencies'));
    }

    public function getkabupaten(request $request)
    {
        $id_provinsi = $request->id_provinsi;
        $kabupaten = Regency::where('province_id', $id_provinsi)->get();
        echo "<option value='' disabled selected>Pilih Kota / Kabupaten</option>";
        foreach ($kabupaten as $kabupaten) {
            echo "<option value='$kabupaten->name' data-id='$kabupaten->id'>$kabupaten->name</option>";
        }
    }
    public function getkecamatan(request $request)
    {
        $id_kabupaten = $request->id_kabupaten;
        $kecamatan = District::where('regency_id', $id_kabupaten)->get();
        echo "<option value='' disabled selected>Pilih Kecamatan</option>";
        foreach ($kecamatan as $kecamatan) {
            echo "<option value='$kecamatan->name' data-id='$kecamatan->id'>$kecamatan->name</option>";
        }
    }
    public function getdesa(request $request)
    {
        $id_kecamatan = $request->id_kecamatan;
        $desa = Village::where('district_id', $id_kecamatan)->get();
        echo "<option value='' disabled selected>Pilih Desa</option>";
        foreach ($desa as $desa) {
            echo "<option value='$desa->name' data-id='$desa->id'>$desa->name</option>";
        }
    }

    public function store(Request $request)
    {
        // Mendapatkan semua data dari formulir tanpa validasi
        $formData = $request->all();

        // Membersihkan array dari elemen-elemen null
        $filteredFormData = array_filter($formData, function ($value) {
            return $value !== null;
        });
        
        // Upload File
        $validate = $request->validate([
            'logo_perusahaan' => 'max:15024',
            'compro_perusahaan' => 'max:50024',
            'foto_produk_1_brand' => 'max:15024',
            'foto_produk_2_brand' => 'max:15024',
            'foto_produk_3_brand' => 'max:15024',
        ], [
            'logo_perusahaan' => 'Ukuran file Logo Perusahaan maximal 15024',
            'compro_perusahaan' => 'Ukuran file Company Profile maximal 50024.',
            'foto_produk_1_brand' => 'Ukuran file Foto Produk 1 maximal 15024.',
            'foto_produk_2_brand' => 'Ukuran file Foto Produk 2 maximal 15024.',
            'foto_produk_3_brand' => 'Ukuran file Foto Company Profile maximal 15024.',
        ]);

        $logoPerusahaanPath = $this->uploadImage($request->file('logo_perusahaan'));
        $comproPerusahaanPath = $this->uploadImage($request->file('compro_perusahaan'));
        $fotoProduk1Path = $this->uploadImage($request->file('foto_produk_1_brand'));
        $fotoProduk2Path = $this->uploadImage($request->file('foto_produk_2_brand'));
        $fotoProduk3Path = $this->uploadImage($request->file('foto_produk_3_brand'));

        // Generate kode unik
        // $uniqueCode = $this->generateUniqueCode('UKM', $provinsi_perusahaan, $kategori_perusahaan);
        $uniqueCode = $this->generateUniqueCode();
        echo $uniqueCode;
        
        // Konversi kode unik menjadi huruf besar
        $uniqueCode = strtoupper($uniqueCode);
        // Simpan data ke database
        // dd($request->all());

        $umkmData = array_merge($filteredFormData, ['kode_umkm' => $uniqueCode]);
        if (isset($umkmData['same_address']) && $umkmData['same_address'] === "on") {
            $umkmData["alamat_perusahaan"] = $umkmData["alamat_personal"];
            $umkmData["provinsi_perusahaan"] = $umkmData["provinsi_personal"];
            $umkmData["kota_perusahaan"] = $umkmData["kota_personal"];
            $umkmData["kecamatan_perusahaan"] = $umkmData["kecamatan_personal"];
            $umkmData["kelurahan_perusahaan"] = $umkmData["kelurahan_personal"];
            $umkmData["kode_pos_perusahaan"] = $umkmData["kode_pos_personal"];
            unset($umkmData['same_address']);
        }
        $umkmData['logo_perusahaan'] = $logoPerusahaanPath;
        $umkmData['compro_perusahaan'] = $comproPerusahaanPath;
        $umkmData['foto_produk_1_brand'] = $fotoProduk1Path;
        $umkmData['foto_produk_2_brand'] = $fotoProduk2Path;
        $umkmData['foto_produk_3_brand'] = $fotoProduk3Path;
        unset($umkmData['confirm']);
        Umkm::create($umkmData);

        // Redirect ke halaman preview
        $provinces = Province::all();
        $nama_admin = $umkmData['nama_admin'];
        return view('umkm.daftar', compact('provinces', 'nama_admin'));
    }


    private function uploadImage($file)
    {
        $currentDateTime = now();
        $formattedDateTime = $currentDateTime->format('YmdHis');
        
        $path = $file->storeAs('/public/umkmdata', $formattedDateTime . '_' . $file->getClientOriginalName());
    
        return $path;
    }
    
    

    public function preview()
    {
        // Mendapatkan data dari session
        $umkmData = session('umkm_data', []);
        $uploadedFilePath = session('uploaded_file_path');

        // Tampilkan halaman preview dengan data dari session
        return view('umkm.preview', compact('umkmData'));
    }

    public function confirm()
    {
        // Mendapatkan data dari session
        $umkmData = session('umkm_data', []);

        // Simpan data ke database dengan kode umkm
        Umkm::create($umkmData);

        // Hapus data dari session setelah disimpan ke database
        session()->forget('umkm_data');

        // Redirect atau tampilkan halaman yang sesuai
        if (auth()->check()) {
            // Jika pengguna sudah login, redirect ke dashboard atau halaman yang diinginkan
            return redirect('dashboard');
        } else {
            // Jika tamu, tampilkan halaman thankyou
            return view('umkm.thankyou');
        }
    }


    public function profileumkm(Request $request, $id)
    {
        // Temukan satu data Umkm berdasarkan ID
        $umkm = Umkm::find($id);
    
        // Periksa apakah Umkm ditemukan
        if (!$umkm) {
            return redirect()->route('route_to_redirect')->with('error', 'Umkm not found.');
        }
    
        // Mengambil nilai checkbox yang dicentang
        $checkedOptions = array_filter($request->all());
    
        // Kembalikan tampilan 'umkm.profile' dengan data yang diperlukan
        return view('umkm.profile.profileumkm', compact('umkm', 'checkedOptions'));
    }

    public function editumkm($id)
    {
        $umkm = Umkm::find($id);
        // dd($umkm);
        return view('umkm.profile.editumkm', compact(['umkm']));
    }

    public function updateumkm($id, Request $request)
    {
        $umkm = Umkm::find($id);
        $umkm->update($request->except(['_token', 'submit']));
        // dd($umkm);
        // Mendapatkan ID umkm
        $umkmId = $umkm->id;
    
        // Redirect kembali ke halaman profil dengan menggunakan ID umkm
        return redirect()->route('profileumkm', ['id' => $umkmId]);
    }

    // public function view_pdf()
    // {

    //     $pdf = Pdf::loadView('pdf.invoice', $data);
    //     return $pdf->download('invoice.pdf');
    //        $umkm = Umkm::find($id);
    //        view()->share('umkm', $umkm);
    //        $pdf = Pdf::loadView('umkm.export.cataloguepdf', compact('umkm'))->setPaper('A4');
    //        return $pdf->download('catalogue.pdf');
    // }

    public function exportpdf(Request $request, $id)
    {

        
        $umkm = Umkm::find($id); // Mengambil data umkm berdasarkan ID
        return view('umkm.export.cataloguepdf', compact('umkm'));
    }
    public function exportpdf2(Request $request, $id)
    {
        $umkm = Umkm::find($id); // Mengambil data umkm berdasarkan ID
        return view('umkm.export.cataloguepdf2', compact('umkm'));
    }
    public function exportpdf3(Request $request, $id)
    {
        $umkm = Umkm::find($id); // Mengambil data umkm berdasarkan ID
        return view('umkm.export.cataloguepdf3', compact('umkm'));
    }
    
    public function  dashumkm(){
        $umkm = Umkm::all();
        return view('dashboard.dashumkm', compact(['umkm']));
    }


    // ACTION DELETE/EDIT/EXPORT/IMPORT

    public function destroy($id)
    {
        $umkm = Umkm::find($id);
        $umkm->delete();
        return redirect('dashboard');
    }


    public function export_excel()
    {
        return Excel::download(new ExportUmkm, "Umkm.xlsx");
    }

    public function importdata()
    {
        return view('umkm.import');
    }
    
    public function import_proses(Request $request){
        $file = $request->file('file');
        $namaFile = ($file && $file->isValid()) ? Carbon::now()->timestamp . '_' . $file->getClientOriginalName() : null;
        // dd($request->file);

        $namaFile && $file->move('DataUmkm', $namaFile);
        
        $namaFile && Excel::import(new ImportUmkm, public_path('/DataUmkm/'.$namaFile));
        return redirect('dashboard');
    }
    

    

}


