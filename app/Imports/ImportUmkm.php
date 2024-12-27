<?php

namespace App\Imports;

use App\Models\Umkm;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportUmkm implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $kodeUmkm = $this->generateUniqueKodeUmkm($row[0]); // Misalnya, kolom 0 adalah 'nama_personal'
        // dd($row);
        return new Umkm([
            'kode_umkm'     => $kodeUmkm,
            'identitas_personal' => $row[1],
            'nama_personal' => $row[2],
            'alamat_personal' => $row[3],
            'kelurahan_personal' => $row[4],
            'kecamatan_personal' => $row[5],
            'kota_personal' => $row[6],
            'provinsi_personal' => $row[7],
            'kode_pos_personal' => $row[8],
            'no_telp_personal' => $row[9],
            'nama_perusahaan' => $row[10],
            'badan_usaha' => $row[11],
            'nomor_badan_perusahaan' => $row[12],
            'nomor_npwp_perusahaan' => $row[13],
            'berdiri_perusahaan' => $row[14],
            'ekspordirect_perusahaan' => $row[15],
            'eksporindirect_perusahaan' => $row[16],
            'pengolahan_perusahaan' => $row[17],
            'perdagangan_perusahaan' => $row[18],
            'jasa_perusahaan' => $row[19],
            'alamat_perusahaan' => $row[20],
            'kelurahan_perusahaan' => $row[21],
            'kecamatan_perusahaan' => $row[22],
            'kota_perusahaan' => $row[23],
            'provinsi_perusahaan' => $row[24],
            'kode_pos_perusahaan' => $row[25],
            'no_telp_perusahaan' => $row[26],
            'kategori_perusahaan' => $row[27],
            'website_perusahaan' => $row[28],
            'instagram_perusahaan' => $row[29],
            'email_perusahaan' => $row[30],
            'logo_perusahaan' => $row[31],
            'compro_perusahaan' => $row[32],
            'export_permit_us_food_and_drug_administration' => $row[33],
            'export_permit_japan_japanese_agriculture_standards' => $row[34],
            'export_permit_china_general_administration_of_customs' => $row[35],
            'export_permit_south_korea_korean_food_and_drug_administration' => $row[36],
            'export_permit_canada_organic_agriculture_centre' => $row[37],
            'export_permit1_lainya' => $row[38],
            'export_permit2_lainya' => $row[39],
            'export_permit3_lainya' => $row[40],
            'legalcert_bpom' => $row[41],
            'legalcert_halal' => $row[42],
            'legalcert_svkl' => $row[43],
            'legalcert_indonesia_legal_wood' => $row[44],
            'legalcert_nutriction_fact' => $row[45],
            'legalcert_domestik1_lainya' => $row[46],
            'legalcert_domestik2_lainya' => $row[47],
            'legalcert_domestik3_lainya' => $row[48],
            'legalcert_haccp' => $row[49],
            'legalcert_msds' => $row[50],
            'legalcert_usda' => $row[51],
            'legalcert_usda_organic' => $row[52],
            'legalcert_eu' => $row[53],
            'legalcert_inter1_lainya' => $row[54],
            'legalcert_inter2_lainya' => $row[55],
            'legalcert_inter3_lainya' => $row[56],
            'nama_brand' => $row[57],
            'jenis_produk_1_brand' => $row[58],
            'jenis_produk_2_brand' => $row[59],
            'jenis_produk_3_brand' => $row[60],
            'foto_produk_1_brand' => $row[61],
            'foto_produk_2_brand' => $row[62],
            'foto_produk_3_brand' => $row[63],
            'hscode1_perusahaan' => $row[64],
            'hscode2_perusahaan' => $row[65],
            'hscode3_perusahaan' => $row[66],
            'incoterms_ex_works' => $row[67],
            'incoterms_free_carrier' => $row[68],
            'incoterms_carriage_paid_to' => $row[69],
            'incoterms_carriage_and_insurance_paid_to' => $row[70],
            'incoterms_delivered_at_terminal' => $row[71],
            'incoterms_delivered_at_place' => $row[72],
            'incoterms_delivered_duty_paid' => $row[73],
            'incoterms_free_alongside_ship' => $row[74],
            'incoterms_free_on_board' => $row[75],
            'incoterms_cost_and_freight' => $row[76],
            'incoterms_cost_insurance_and_freight' => $row[77],
            'paymentterms_tt' => $row[78],
            'paymentterms_lc' => $row[79],
            'paymentterms_consignment' => $row[80],
            'paymentterms_open_account' => $row[81],
            'paymentterms_documentary_collection' => $row[82],
            'paymentterms_lainya' => $row[83],
            'produk_kapasitas' => $row[84],
            'produk_min_qty' => $row[85],
            'omzet_total_all' => $row[86],
            'omzet_total_export' => $row[87],
            'omzet_export_1' => $row[88],
            'omzet_export_2' => $row[89],
            'omzet_export_3' => $row[90],
            'omzet_export_4' => $row[91],
            'omzet_export_5' => $row[92],
            'omzet_intExport_1' => $row[93],
            'omzet_intExport_2' => $row[94],
            'omzet_intExport_3' => $row[95],
            'omzet_intExport_4' => $row[96],
            'omzet_intExport_5' => $row[97],
            'jenis_satuan_kapasitas' => $row[98],
            'jenis_satuan_order' => $row[99],
            'cif_admin' => $row[100],
            'nama_admin' => $row[101],
            'npp_admin' => $row[102],
            'hp_admin' => $row[103],
            'taplus_admin' => $row[104],
            'payroll_admin' => $row[105],
            'ki_admin' => $row[106],
            'kmk_admin' => $row[107],
            'c3_admin' => $row[108],
            'bnidirect_admin' => $row[109],
            'lc_admin' => $row[110],
            'phr_lainya_admin' => $row[111],
            'sbp_admin' => $row[112],
            'rpb_admin' => $row[113],
            'cmb_admin' => $row[114],
            'enb_admin' => $row[115],
            'non_nasabah_admin' => $row[116],
            'source_lainya_admin' => $row[117],

            
        ]);
        
    }
    /**
     * Generate kode umkm unik berdasarkan nama personal
     *
     * @param string $namaPersonal
     * @return string
     */
    private function generateUniqueKodeUmkm()
    {
        // Mendapatkan tahun, bulan, dan tanggal saat ini
        $tahun = date('y');
        $bulan = date('m');
        $tanggal = date('d');
    
        // Menentukan kode urut id berdasarkan data yang sudah ada
        $kodeUrut = Umkm::max('kode_umkm');
        $kodeUrut = ($kodeUrut) ? (int)substr($kodeUrut, -4) + 1 : 1;
    
        // Menghasilkan kode umkm dengan format yang diinginkan
        $uniqueCode = 'UKM' . $tahun . $bulan . $tanggal . sprintf('%04d', $kodeUrut);
    
        return $uniqueCode; // Contoh: UKM2412010001
    }
    
    
}
