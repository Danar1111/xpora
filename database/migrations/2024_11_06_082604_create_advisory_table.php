<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvisoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advisory', function (Blueprint $table) {
            $table->id();
            $table->date('training_date'); // Tanggal Pelatihan
            $table->string('proposal_no'); // No. Usulan
            $table->string('pic_name'); // PIC Xpora
            $table->string('training_name'); // Nama Pelatihan
            $table->text('training_description'); // Deskripsi Pelatihan
            $table->string('internal_partner')->nullable(); // Partner Internal
            $table->string('instructor_name')->nullable(); // Nama Pengajar
            $table->string('province'); // Provinsi
            $table->string('city'); // Kota/Kabupaten
            $table->string('training_type'); // Jenis Pelatihan
            $table->string('training_level'); // Level Pelatihan
            $table->integer('participant_count')->nullable(); // Jumlah Peserta
            $table->decimal('proposed_budget', 15, 2)->nullable(); // Budget Usulan
            $table->string('budget_type'); // Jenis Budget
            $table->string('advisory_document')->nullable(); // Dokumen Advisory
            
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
        Schema::dropIfExists('advisory');
    }
}