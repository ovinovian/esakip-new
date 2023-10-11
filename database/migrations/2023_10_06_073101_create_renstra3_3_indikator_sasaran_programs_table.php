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
        Schema::create('renstra3_3_indikator_sasaran_programs', function (Blueprint $table) {
            $table->id('id_indikator_sasaran_program_renstra');
            $table->text('nama_indikator_sasaran_program_renstra');
            $table->unsignedBigInteger('id_sasaran_program_renstra');
            $table->unsignedBigInteger('id_satuan');
            $table->timestamps();
            $table->foreign('id_sasaran_program_renstra','fk_r3_3_i_s_p_r3_2_s_p')->references('id_sasaran_program_renstra')->on('renstra3_2_sasaran_programs');
            $table->foreign('id_satuan','fk_r3_3_i_s_p_s')->references('id_satuan')->on('satuans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renstra3_3_indikator_sasaran_programs');
    }
};
