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
        Schema::create('mobil', function (Blueprint $table) {
            $table->id();
            $table->string('noplat');
            $table->string('name');
            $table->string('gambar');
            $table->unsignedBigInteger('merek_id');
            $table->integer('tahun');
            $table->string('kapasitas');
            $table->text('deskripsi')->nullable();
            $table->enum('type', ['matic', 'persneling']);
            $table->integer('harga_sewa');
            $table->enum('status', ['tersedia', 'disewa']);
            $table->timestamps();

            $table->foreign('merek_id')->references('id')->on('merek')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobil');
    }
};
