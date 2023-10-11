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
        Schema::create('renstra1_3_detil_indikator_tujuans', function (Blueprint $table) {
            $table->id('id_detil_indikator_tujuan_renstra');
            $table->unsignedBigInteger('id_indikator_tujuan_renstra');
            $table->year('tahun');
            $table->decimal('target', $precision = 20, $scale = 6)->default('0.000000');
            $table->decimal('capaian', $precision = 20, $scale = 6)->default('0.000000');
            $table->tinyInteger('tahap');
            $table->timestamps();
            $table->foreign('id_indikator_tujuan_renstra','fk_r1_3_d_i_t_r1_2_i_t')->references('id_indikator_tujuan_renstra')->on('renstra1_2_indikator_tujuans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renstra1_3_detil_indikator_tujuans');
    }
};
