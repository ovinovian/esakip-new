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
        Schema::create('renstra4_1_kegiatans', function (Blueprint $table) {
            $table->id('id_kegiatan_renstra');
            $table->unsignedBigInteger('id_sasaran_program_renstra');
            $table->unsignedBigInteger('id_kegiatan');
            $table->text('pj_kegiatan');
            $table->timestamps();
            $table->foreign('id_sasaran_program_renstra','fk_r4_1_k_r3_2_s_p')->references('id_sasaran_program_renstra')->on('renstra3_2_sasaran_programs');
            $table->foreign('id_kegiatan','fk_r4_1_k_m4_k')->references('id_kegiatan')->on('main4_kegiatans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renstra4_1_kegiatans');
    }
};
