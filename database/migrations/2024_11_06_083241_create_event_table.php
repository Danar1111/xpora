<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->date('start_date'); // Tanggal Mulai
            $table->string('document_no'); // No. Dokumen
            $table->string('event_name'); // Nama Event
            $table->string('region'); // Region
            $table->string('country'); // Negara
            $table->string('city'); // Kota
            $table->string('event_category'); // Kategori Event
            
            // Sektor Usaha sebagai JSON untuk multiple selection
            $table->string('business_sector'); // Sektor Usaha
            
            $table->string('product_name'); // Nama Produk / Komoditas
            $table->decimal('proposed_budget', 15, 2); // Budget Usulan
            $table->decimal('realized_budget', 15, 2); // Budget Realisasi
            $table->string('budget_type'); // Jenis Budget
            $table->string('event_document'); // Dokumen Event
            $table->text('event_description'); // Deskripsi Event
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event');
    }
}
