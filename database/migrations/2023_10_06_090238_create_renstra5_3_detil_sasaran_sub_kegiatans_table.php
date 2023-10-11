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
        Schema::create('renstra5_3_detil_sasaran_sub_kegiatans', function (Blueprint $table) {
            $table->id('id_detil_sasaran_sub_kegiatan_renstra');
            $table->unsignedBigInteger('id_sasaran_sub_kegiatan_renstra');
            $table->year('tahun');
            $table->decimal('target', $precision = 20, $scale = 6)->default('0.000000');
            $table->decimal('capaian', $precision = 20, $scale = 6)->default('0.000000');
            $table->decimal('rincian', $precision = 20, $scale = 6)->default('0.000000');
            $table->decimal('realisasi', $precision = 20, $scale = 6)->default('0.000000');
            $table->tinyInteger('tahap');
            $table->timestamps();
            $table->foreign('id_sasaran_sub_kegiatan_renstra','fk_r5_3_d_s_s_k_r5_2_s_s_k')->references('id_sasaran_sub_kegiatan_renstra')->on('renstra5_2_sasaran_sub_kegiatans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renstra5_3_detil_sasaran_sub_kegiatans');
    }
};
