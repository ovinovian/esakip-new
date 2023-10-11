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
        Schema::create('renstra3_1_programs', function (Blueprint $table) {
            $table->id('id_program_renstra');
            $table->unsignedBigInteger('id_sasaran_renstra');
            $table->unsignedBigInteger('id_program');
            $table->text('pj_program');
            $table->timestamps();
            $table->foreign('id_sasaran_renstra','fk_r3_1_p_r2_1_s')->references('id_sasaran_renstra')->on('renstra2_1_sasarans');
            $table->foreign('id_program','fk_r3_1_p_m3_p')->references('id_program')->on('main3_programs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renstra3_1_programs');
    }
};
