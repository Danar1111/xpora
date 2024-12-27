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
        Schema::create('regions', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name')->unique(); // Nama wilayah
            $table->integer('debitur')->default(0); // Jumlah debitur
            $table->decimal('nilai', 15, 2)->default(0); // Nilai (format desimal untuk angka besar)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regions');
    }
};
