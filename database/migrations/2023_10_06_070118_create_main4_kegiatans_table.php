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
        Schema::create('main4_kegiatans', function (Blueprint $table) {
            $table->id('id_kegiatan');
            $table->text('nama_kegiatan');
            $table->unsignedBigInteger('id_program');
            $table->string('kode_kegiatan',3);
            $table->timestamps();
            $table->foreign('id_program','fk_m4_k_m3_p')->references('id_program')->on('main3_programs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main4_kegiatans');
    }
};
