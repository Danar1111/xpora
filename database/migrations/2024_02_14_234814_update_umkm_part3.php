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
            $table->string('produk_kapasitas', 50)->nullable();;
             $table->string('produk_min_qty', 50)->nullable();
             $table->string('omzet_total_all', 50)->nullable();;
             $table->string('omzet_total_export', 50)->nullable();
             $table->string('omzet_export_1', 50)->nullable();
             $table->string('omzet_export_2', 50)->nullable();
             $table->string('omzet_export_3', 50)->nullable();
             $table->string('omzet_export_4', 50)->nullable();
             $table->string('omzet_export_5', 50)->nullable();
             $table->string('omzet_intExport_1', 50)->nullable();
             $table->string('omzet_intExport_2', 50)->nullable();
             $table->string('omzet_intExport_3', 50)->nullable();
             $table->string('omzet_intExport_4', 50)->nullable();
             $table->string('omzet_intExport_5', 50)->nullable();
             $table->enum('jenis_satuan_kapasitas', [
                 'kg',
                 'ton',
                 'metric_ton',
                 'meter',
                 'liter',
                 'pcs',
                 'kontainer_20ft',
                 'kontainer_40ft',
             ]);
             $table->enum('jenis_satuan_order', [
                 'kg',
                 'ton',
                 'metric_ton',
                 'meter',
                 'liter',
                 'pcs',
                 'kontainer_20ft',
                 'kontainer_40ft',
             ]);
             $table->string('cif_admin', 50)->nullable();
             $table->string('nama_admin', 50)->nullable();
             $table->string('npp_admin', 50)->nullable();
             $table->string('hp_admin', 50)->nullable();
             $table->boolean('taplus_admin')->default(false)->nullable();
             $table->boolean('payroll_admin')->default(false)->nullable();
             $table->boolean('ki_admin')->default(false)->nullable();
             $table->boolean('kmk_admin')->default(false)->nullable();
             $table->boolean('c3_admin')->default(false)->nullable();
             $table->boolean('bnidirect_admin')->default(false)->nullable();
             $table->boolean('lc_admin')->default(false)->nullable();
             $table->string('phr_lainya_admin', 50)->nullable();
             $table->string('sbp_admin', 50)->nullable();
             $table->string('rpb_admin', 50)->nullable();
             $table->string('cmb_admin', 50)->nullable();
             $table->string('enb_admin', 50)->nullable();
             $table->string('non_nasabah_admin', 50)->nullable();
             $table->string('source_lainya_admin', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('umkm', function (Blueprint $table) {
            //
        });
    }
};
