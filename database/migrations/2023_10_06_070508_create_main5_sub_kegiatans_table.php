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
        Schema::create('main5_sub_kegiatans', function (Blueprint $table) {
            $table->id('id_sub_kegiatan');
            $table->text('nama_sub_kegiatan');
            $table->unsignedBigInteger('id_kegiatan');
            $table->string('kode_sub_kegiatan',2);
            $table->string('sasaran_sub_kegiatan');
            $table->string('indikator_sub_kegiatan');
            $table->timestamps();
            $table->foreign('id_kegiatan','fk_m5_s_k_m4_k')->references('id_kegiatan')->on('main4_kegiatans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main5_sub_kegiatans');
    }
};
