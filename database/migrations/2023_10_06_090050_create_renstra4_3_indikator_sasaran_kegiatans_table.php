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
        Schema::create('renstra4_3_indikator_sasaran_kegiatans', function (Blueprint $table) {
            $table->id('id_indikator_sasaran_kegiatan_renstra');
            $table->unsignedBigInteger('id_sasaran_kegiatan_renstra');
            $table->unsignedBigInteger('id_satuan');
            $table->timestamps();
            $table->foreign('id_sasaran_kegiatan_renstra','fk_r4_3_i_s_k_r4_2_s_k')->references('id_sasaran_kegiatan_renstra')->on('renstra4_2_sasaran_kegiatans');
            $table->foreign('id_satuan','fk_r4_3_i_s_k_s')->references('id_satuan')->on('satuans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renstra4_3_indikator_sasaran_kegiatans');
    }
};
