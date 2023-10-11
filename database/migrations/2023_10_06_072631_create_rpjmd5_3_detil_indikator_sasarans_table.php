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
        Schema::create('rpjmd5_3_detil_indikator_sasarans', function (Blueprint $table) {
            $table->id('id_detil_indikator_sasaran_rpjmd');
            $table->unsignedBigInteger('id_indikator_sasaran_rpjmd');
            $table->year('tahun');
            $table->decimal('target', $precision = 20, $scale = 6)->default('0.000000');
            $table->decimal('capaian', $precision = 20, $scale = 6)->default('0.000000');
            $table->tinyInteger('tahap');
            $table->timestamps();
            $table->foreign('id_indikator_sasaran_rpjmd','fk_r5_3_i_s_r5_2_i_s')->references('id_indikator_sasaran_rpjmd')->on('rpjmd5_2_indikator_sasarans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rpjmd5_3_detil_indikator_sasarans');
    }
};
