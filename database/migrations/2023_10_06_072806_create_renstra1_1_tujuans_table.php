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
        Schema::create('renstra1_1_tujuans', function (Blueprint $table) {
            $table->id('id_tujuan_renstra');
            $table->text('nama_tujuan_renstra');
            $table->unsignedBigInteger('id_sasaran_rpjmd');
            $table->unsignedBigInteger('id_opd');
            $table->timestamps();
            $table->foreign('id_sasaran_rpjmd','fk_r1_1_t_r5_1_s')->references('id_sasaran_rpjmd')->on('rpjmd5_1_sasarans');
            $table->foreign('id_opd','fk_r1_1_t_o')->references('id_opd')->on('opds');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renstra1_1_tujuans');
    }
};
