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
        Schema::create('rpjmd2_visis', function (Blueprint $table) {
            $table->id('id_visi_rpjmd');
            $table->text('nama_visi_rpjmd');
            $table->unsignedBigInteger('id_rpjmd');
            $table->tinyInteger('status_visi_rpjmd')->nullable()->default(0);
            $table->timestamps();
            $table->foreign('id_rpjmd','fk_r2_v_r1_r')->references('id_rpjmd')->on('rpjmd1_rpjmds');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rpjmd2_visis');
    }
};
