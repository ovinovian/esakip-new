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
        Schema::create('renstra4_4_detil_indikator_sasaran_kegiatans', function (Blueprint $table) {
            $table->id('id_detil_indikator_sasaran_kegiatan_renstra');
            $table->unsignedBigInteger('id_indikator_sasaran_kegiatan_renstra');
            $table->year('tahun');
            $table->decimal('target', $precision = 20, $scale = 6)->default('0.000000');
            $table->decimal('capaian', $precision = 20, $scale = 6)->default('0.000000');
            $table->decimal('rincian', $precision = 20, $scale = 6)->default('0.000000');
            $table->decimal('realisasi', $precision = 20, $scale = 6)->default('0.000000');
            $table->tinyInteger('tahap');
            $table->timestamps();
            $table->foreign('id_indikator_sasaran_kegiatan_renstra','fk_r4_4_d_i_s_k_r4_3_i_s_k')->references('id_indikator_sasaran_kegiatan_renstra')->on('renstra4_3_indikator_sasaran_kegiatans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renstra4_4_detil_indikator_sasaran_kegiatans');
    }
};
