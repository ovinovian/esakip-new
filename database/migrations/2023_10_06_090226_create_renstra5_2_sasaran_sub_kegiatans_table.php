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
        Schema::create('renstra5_2_sasaran_sub_kegiatans', function (Blueprint $table) {
            $table->id('id_sasaran_sub_kegiatan_renstra');
            $table->text('nama_sasaran_sub_kegiatan_renstra');
            $table->unsignedBigInteger('id_sub_kegiatan_renstra');
            $table->unsignedBigInteger('id_satuan');
            $table->timestamps();
            $table->foreign('id_sub_kegiatan_renstra','fk_r5_2_s_s_k_r5_1_s_k')->references('id_sub_kegiatan_renstra')->on('renstra5_1_sub_kegiatans');
            $table->foreign('id_satuan','fk_r5_2_s_k_s')->references('id_satuan')->on('satuans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renstra5_2_sasaran_sub_kegiatans');
    }
};
