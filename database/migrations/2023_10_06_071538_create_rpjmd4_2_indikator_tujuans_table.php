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
        Schema::create('rpjmd4_2_indikator_tujuans', function (Blueprint $table) {
            $table->id('id_indikator_tujuan_rpjmd');
            $table->text('nama_indikator_tujuan_rpjmd');
            $table->unsignedBigInteger('id_tujuan_rpjmd');
            $table->unsignedBigInteger('id_satuan');
            $table->timestamps();
            $table->foreign('id_tujuan_rpjmd','fk_r4_2_i_t_r4_1_t')->references('id_tujuan_rpjmd')->on('rpjmd4_1_tujuans');
            $table->foreign('id_satuan','fk_r4_2_i_t_s')->references('id_satuan')->on('satuans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rpjmd4_2_indikator_tujuans');
    }
};
