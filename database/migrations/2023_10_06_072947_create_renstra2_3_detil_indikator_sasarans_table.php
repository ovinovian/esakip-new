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
        Schema::create('renstra2_3_detil_indikator_sasarans', function (Blueprint $table) {
            $table->id('id_detil_indikator_sasaran_renstra');
            $table->unsignedBigInteger('id_indikator_sasaran_renstra');
            $table->year('tahun');
            $table->decimal('target', $precision = 20, $scale = 6)->default('0.000000');
            $table->decimal('capaian', $precision = 20, $scale = 6)->default('0.000000');
            $table->tinyInteger('tahap');
            $table->timestamps();
            $table->foreign('id_indikator_sasaran_renstra','fk_r2_3_d_i_s_r2_2_i_s')->references('id_indikator_sasaran_renstra')->on('renstra2_2_indikator_sasarans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renstra2_3_detil_indikator_sasarans');
    }
};
