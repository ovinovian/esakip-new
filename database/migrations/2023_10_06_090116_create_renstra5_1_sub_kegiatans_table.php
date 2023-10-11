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
        Schema::create('renstra5_1_sub_kegiatans', function (Blueprint $table) {
            $table->id('id_sub_kegiatan_renstra');
            $table->unsignedBigInteger('id_sasaran_kegiatan_renstra');
            $table->unsignedBigInteger('id_sub_kegiatan');
            $table->text('pj_sub_kegiatan');
            $table->timestamps();
            $table->foreign('id_sasaran_kegiatan_renstra','fk_r5_1_s_k_r4_2_s_k')->references('id_sasaran_kegiatan_renstra')->on('renstra4_2_sasaran_kegiatans');
            $table->foreign('id_sub_kegiatan','fk_r5_1_s_k_m5_s_k')->references('id_sub_kegiatan')->on('main5_sub_kegiatans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renstra5_1_sub_kegiatans');
    }
};
