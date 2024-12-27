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
             // DATA PRODUK
             $table->string('nama_brand')->nullable();
             $table->string('jenis_produk_1_brand', 50)->nullable();;
             $table->string('jenis_produk_2_brand')->nullable();
             $table->string('jenis_produk_3_brand')->nullable();
             $table->string('foto_produk_1_brand')->nullable();
             $table->string('foto_produk_2_brand')->nullable();
             $table->string('foto_produk_3_brand')->nullable();
             $table->string('hscode1_perusahaan')->nullable();
             $table->string('hscode2_perusahaan')->nullable();
             $table->string('hscode3_perusahaan')->nullable();
             $table->boolean('incoterms_ex_works')->default(false)->nullable();
             $table->boolean('incoterms_free_carrier')->default(false)->nullable();
             $table->boolean('incoterms_carriage_paid_to')->default(false)->nullable();
             $table->boolean('incoterms_carriage_and_insurance_paid_to')->default(false)->nullable();
             $table->boolean('incoterms_delivered_at_terminal')->default(false)->nullable();
             $table->boolean('incoterms_delivered_at_place')->default(false)->nullable();
             $table->boolean('incoterms_delivered_duty_paid')->default(false)->nullable();
             $table->boolean('incoterms_free_alongside_ship')->default(false)->nullable();
             $table->boolean('incoterms_free_on_board')->default(false)->nullable();
             $table->boolean('incoterms_cost_and_freight')->default(false)->nullable();
             $table->boolean('incoterms_cost_insurance_and_freight')->default(false)->nullable();
             $table->boolean('paymentterms_tt')->default(false)->nullable();
             $table->boolean('paymentterms_lc')->default(false)->nullable();
             $table->boolean('paymentterms_consignment')->default(false)->nullable();
             $table->boolean('paymentterms_open_account')->default(false)->nullable();
             $table->boolean('paymentterms_documentary_collection')->default(false)->nullable();
             $table->string('paymentterms_lainya')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('umkm', function (Blueprint $table) {
            $table->dropColumn([
                    'produk_kapasitas',
                    'produk_min_qty',
                    'omzet_total_all',
                    'omzet_total_export',
                    'omzet_export_1',
                    'omzet_export_2',
                    'omzet_export_3',
                    'omzet_export_4',
                    'omzet_export_5',
                    'omzet_intExport_1',
                    'omzet_intExport_2',
                    'omzet_intExport_3',
                    'omzet_intExport_4',
                    'omzet_intExport_5',
                    'jenis_satuan_kapasitas',
                    'jenis_satuan_order',
                    'cif_admin',
                    'nama_admin',
                    'npp_admin',
                    'hp_admin',
                    'taplus_admin',
                    'payroll_admin',
                    'ki_admin',
                    'kmk_admin',
                    'c3_admin',
                    'bnidirect_admin',
                    'lc_admin',
                    'phr_lainya_admin',
                    'sbp_admin',
                    'rpb_admin',
                    'cmb_admin',
                    'enb_admin',
                    'non_nasabah_admin',
                    'source_lainya_admin',
            ]);

        });
    }
};
