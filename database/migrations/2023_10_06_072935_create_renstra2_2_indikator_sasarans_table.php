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
        Schema::create('renstra2_2_indikator_sasarans', function (Blueprint $table) {
            $table->id('id_indikator_sasaran_renstra');
            $table->text('nama_indikator_sasaran_renstra');
            $table->unsignedBigInteger('id_sasaran_renstra');
            $table->unsignedBigInteger('id_satuan');
            $table->timestamps();
            $table->foreign('id_sasaran_renstra','fk_r2_2_i_s_r2_1_s')->references('id_sasaran_renstra')->on('renstra2_1_sasarans');
            $table->foreign('id_satuan','fk_r2_2_i_s_s')->references('id_satuan')->on('satuans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renstra2_2_indikator_sasarans');
    }
};
