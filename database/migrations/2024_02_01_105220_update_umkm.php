<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('umkm', function (Blueprint $table) {
            $table->string('kode_umkm', 50);
            $table->enum('identitas_personal', ['Bapak', 'Perempuan']);
            $table->string('nama_personal', 50);
            $table->string('alamat_personal', 50);
            $table->string('kelurahan_personal', 50);
            $table->string('kecamatan_personal', 50);
            $table->string('kota_personal', 50);
            $table->string('provinsi_personal', 50);
            $table->string('kode_pos_personal', 50)->nullable();
            $table->string('no_telp_personal', 50);

            // PROFIL USAHA
            $table->string('nama_perusahaan', 50);
            $table->enum('badan_usaha', ['PT', 'CV', 'PT_Perseorangan']);
            $table->string('nomor_badan_perusahaan')->nullable();
            $table->string('nomor_npwp_perusahaan')->nullable();
            $table->string('berdiri_perusahaan')->nullable();
            $table->boolean('ekspordirect_perusahaan')->default(false);
            $table->boolean('eksporindirect_perusahaan')->default(false);
            $table->boolean('pengolahan_perusahaan')->default(false)->nullable();
            $table->boolean('perdagangan_perusahaan')->default(false)->nullable();
            $table->boolean('jasa_perusahaan')->default(false)->nullable();
            $table->string('alamat_perusahaan', 50);
            $table->string('kelurahan_perusahaan', 50);
            $table->string('kecamatan_perusahaan', 50);
            $table->string('kota_perusahaan', 50);
            $table->string('provinsi_perusahaan', 50);
            $table->string('kode_pos_perusahaan', 50)->nullable();
            $table->string('no_telp_perusahaan', 50)->nullable();
            $table->string('kategori_perusahaan', 50);
            $table->string('website_perusahaan')->nullable();
            $table->string('instagram_perusahaan')->nullable();
            $table->string('email_perusahaan')->nullable();
            $table->string('logo_perusahaan')->nullable();
            $table->string('compro_perusahaan')->nullable();

            // LEGALITAS
            $table->boolean('export_permit_us_food_and_drug_administration')->default(false)->nullable();
            $table->boolean('export_permit_japan_japanese_agriculture_standards')->default(false)->nullable();
            $table->boolean('export_permit_china_general_administration_of_customs')->default(false)->nullable();
            $table->boolean('export_permit_south_korea_korean_food_and_drug_administration')->default(false)->nullable();
            $table->boolean('export_permit_canada_organic_agriculture_centre')->default(false)->nullable();
            $table->string('export_permit1_lainya')->nullable();
            $table->string('export_permit2_lainya')->nullable();
            $table->string('export_permit3_lainya')->nullable();
            $table->boolean('legalcert_bpom')->default(false)->nullable();
            $table->boolean('legalcert_halal')->default(false)->nullable();
            $table->boolean('legalcert_svkl')->default(false)->nullable();
            $table->boolean('legalcert_indonesia_legal_wood')->default(false)->nullable();
            $table->boolean('legalcert_nutriction_fact')->default(false)->nullable();
            $table->string('legalcert_domestik1_lainya')->nullable();
            $table->string('legalcert_domestik2_lainya')->nullable();
            $table->string('legalcert_domestik3_lainya')->nullable();
            $table->boolean('legalcert_haccp')->default(false)->nullable();
            $table->boolean('legalcert_msds')->default(false)->nullable();
            $table->boolean('legalcert_usda')->default(false)->nullable();
            $table->boolean('legalcert_usda_organic')->default(false)->nullable();
            $table->boolean('legalcert_eu')->default(false)->nullable();
            $table->string('legalcert_inter1_lainya')->nullable();
            $table->string('legalcert_inter2_lainya')->nullable();
            $table->string('legalcert_inter3_lainya')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('umkm', function (Blueprint $table) {
        // Hapus semua kolom yang ditambahkan dalam method 'up'
        $table->dropColumn([
            'kode_umkm',
                'identitas_personal',
                'nama_personal',
                'alamat_personal',
                'kelurahan_personal',
                'kecamatan_personal',
                'kota_personal',
                'provinsi_personal',
                'kode_pos_personal',
                'no_telp_personal',
                // PROFIL USAHA
                'nama_perusahaan',
                'badan_usaha',
                'nomor_badan_perusahaan',
                'nomor_npwp_perusahaan',
                'berdiri_perusahaan',
                'ekspordirect_perusahaan',
                'eksporindirect_perusahaan',
                'pengolahan_perusahaan',
                'perdagangan_perusahaan',
                'jasa_perusahaan',
                'alamat_perusahaan',
                'kelurahan_perusahaan',
                'kecamatan_perusahaan',
                'kota_perusahaan',
                'provinsi_perusahaan',
                'kode_pos_perusahaan',
                'no_telp_perusahaan',
                'kategori_perusahaan',
                'website_perusahaan',
                'instagram_perusahaan',
                'email_perusahaan',
                'logo_perusahaan',
                'compro_perusahaan',
                // LEGALITAS
                'export_permit_us_food_and_drug_administration',
                'export_permit_japan_japanese_agriculture_standards',
                'export_permit_china_general_administration_of_customs',
                'export_permit_south_korea_korean_food_and_drug_administration',
                'export_permit_canada_organic_agriculture_centre',
                'export_permit1_lainya',
                'export_permit2_lainya',
                'export_permit3_lainya',
                'legalcert_bpom',
                'legalcert_halal',
                'legalcert_svkl',
                'legalcert_indonesia_legal_wood',
                'legalcert_nutriction_fact',
                'legalcert_domestik1_lainya',
                'legalcert_domestik2_lainya',
                'legalcert_domestik3_lainya',
                'legalcert_haccp',
                'legalcert_msds',
                'legalcert_usda',
                'legalcert_usda_organic',
                'legalcert_eu',
                'legalcert_inter1_lainya',
                'legalcert_inter2_lainya',
                'legalcert_inter3_lainya',
        ]);
    });
}

};
