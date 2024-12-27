<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcom', function (Blueprint $table) {
            $table->id();
            $table->date('marcom_date'); // Tanggal Marcom
            $table->string('bizmatch_event_name'); // Nama Bizmatch & Event/Advisory
            $table->string('video_link')->nullable(); // Video (Link)
            $table->string('picture_link')->nullable(); // Picture (Link)
            $table->string('content_category'); // Kategori Content
            $table->string('allocation'); // Peruntukan
            
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
        Schema::dropIfExists('marcom');
    }
}
