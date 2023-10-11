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
        Schema::create('rpjmd5_1_sasarans', function (Blueprint $table) {
            $table->id('id_sasaran_rpjmd');
            $table->text('nama_sasaran_rpjmd');
            $table->unsignedBigInteger('id_tujuan_rpjmd');
            $table->tinyInteger('status_sasaran_rpjmd')->nullable()->default(0);
            $table->timestamps();
            $table->foreign('id_tujuan_rpjmd','fk_r5_1_s_r4_1_t')->references('id_tujuan_rpjmd')->on('rpjmd4_1_tujuans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rpjmd5_1_sasarans');
    }
};
