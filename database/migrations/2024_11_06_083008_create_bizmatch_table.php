<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBizmatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bizmatch', function (Blueprint $table) {
            $table->id();

            // Detail Event
            $table->string('event_name'); // Nama Event
            $table->string('partner_event')->nullable(); // Partner Event
            $table->string('region_scope'); // Region/Scope
            $table->string('country'); // Negara
            $table->string('city'); // Kota
            $table->string('business_sector'); // Sektor Usaha

            // Detail Business Matching
            $table->string('product_category'); // Kategori Produk
            $table->string('umkm_name'); // Nama UMKM
            $table->string('buyer_name'); // Nama Buyer
            $table->string('progress'); // Progress
            $table->string('result'); // Hasil

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
        Schema::dropIfExists('bizmatch');
    }
}