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
        Schema::create('renstra3_2_sasaran_programs', function (Blueprint $table) {
            $table->id('id_sasaran_program_renstra');            
            $table->text('nama_sasaran_program_renstra');            
            $table->unsignedBigInteger('id_program_renstra');            
            $table->timestamps();
            $table->foreign('id_program_renstra','fk_r3_2_s_p_r3_1_p')->references('id_program_renstra')->on('renstra3_1_programs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renstra3_2_sasaran_programs');
    }
};
