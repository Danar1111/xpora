<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileBuyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_buyer', function (Blueprint $table) {
            $table->id();
            $table->string('event_id')->unique(); // ID Event & Business Matching
            $table->string('event_name'); // Nama Event & Business Matching
            // $table->date('event_date'); // Tanggal Event & Business Matching
            $table->string('event_location'); // Lokasi Business Matching & Event
            
            // Detail Buyer
            $table->string('company_name'); // Nama Perusahaan
            $table->string('country'); // Negara
            $table->string('city'); // Kota
            $table->string('sector'); // Sektor Perusahaan
            $table->string('interested_product'); // Produk Diminati
            $table->string('pic_name'); // Nama PIC
            $table->string('phone_number'); // Nomor Telepon
            $table->string('email')->unique(); // Email
            $table->string('website')->nullable(); // Website
            $table->text('address'); // Alamat
            
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
        Schema::dropIfExists('profile_buyer');
    }
}
