<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReleaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('release', function (Blueprint $table) {
            $table->id();
            $table->date('release_date'); // Tanggal Release
            $table->string('event_category'); // Kategori Event
            $table->string('bizmatch_event_name'); // Nama BizMatch & Event/Advisory
            $table->string('media_name'); // Nama Media Massa
            $table->string('news_link'); // Link Berita
            
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
        Schema::dropIfExists('release');
    }
}
