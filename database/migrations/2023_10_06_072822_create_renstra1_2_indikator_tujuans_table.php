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
        Schema::create('renstra1_2_indikator_tujuans', function (Blueprint $table) {
            $table->id('id_indikator_tujuan_renstra');
            $table->text('nama_indikator_tujuan_renstra');
            $table->unsignedBigInteger('id_tujuan_renstra');
            $table->unsignedBigInteger('id_satuan');
            $table->timestamps();
            $table->foreign('id_tujuan_renstra','fk_r1_2_i_t_r1_1_t')->references('id_tujuan_renstra')->on('renstra1_1_tujuans');
            $table->foreign('id_satuan','fk_r1_2_i_t_s')->references('id_satuan')->on('satuans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renstra1_2_indikator_tujuans');
    }
};
