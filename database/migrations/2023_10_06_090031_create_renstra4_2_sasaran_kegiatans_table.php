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
        Schema::create('renstra4_2_sasaran_kegiatans', function (Blueprint $table) {
            $table->id('id_sasaran_kegiatan_renstra');
            $table->text('nama_sasaran_kegiatan_renstra');
            $table->unsignedBigInteger('id_kegiatan_renstra');
            $table->timestamps();
            $table->foreign('id_kegiatan_renstra','fk_r4_2_s_k_r4_1_k')->references('id_kegiatan_renstra')->on('renstra4_1_kegiatans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renstra4_2_sasaran_kegiatans');
    }
};
