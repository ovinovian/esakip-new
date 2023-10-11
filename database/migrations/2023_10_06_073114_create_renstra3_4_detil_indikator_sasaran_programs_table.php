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
        Schema::create('renstra3_4_detil_indikator_sasaran_programs', function (Blueprint $table) {
            $table->id('id_detil_indikator_sasaran_program_renstra');
            $table->unsignedBigInteger('id_indikator_sasaran_program_renstra');
            $table->year('tahun');
            $table->decimal('target', $precision = 20, $scale = 6)->default('0.000000');
            $table->decimal('capaian', $precision = 20, $scale = 6)->default('0.000000');
            $table->decimal('rincian', $precision = 20, $scale = 6)->default('0.000000');
            $table->decimal('realisasi', $precision = 20, $scale = 6)->default('0.000000');
            $table->tinyInteger('tahap');
            $table->timestamps();
            $table->foreign('id_indikator_sasaran_program_renstra','fk_r3_4_d_i_s_p_r3_3_i_s_p')->references('id_indikator_sasaran_program_renstra')->on('renstra3_3_indikator_sasaran_programs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renstra3_4_detil_indikator_sasaran_programs');
    }
};
