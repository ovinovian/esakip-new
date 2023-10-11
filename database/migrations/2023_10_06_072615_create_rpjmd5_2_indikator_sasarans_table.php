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
        Schema::create('rpjmd5_2_indikator_sasarans', function (Blueprint $table) {
            $table->id('id_indikator_sasaran_rpjmd');
            $table->text('nama_indikator_sasaran_rpjmd');
            $table->unsignedBigInteger('id_sasaran_rpjmd');
            $table->unsignedBigInteger('id_satuan');
            $table->timestamps();
            $table->foreign('id_sasaran_rpjmd','fk_r5_2_i_s_r5_1_s')->references('id_sasaran_rpjmd')->on('rpjmd5_1_sasarans');
            $table->foreign('id_satuan','fk_r5_2_i_s_s')->references('id_satuan')->on('satuans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rpjmd5_2_indikator_sasarans');
    }
};
