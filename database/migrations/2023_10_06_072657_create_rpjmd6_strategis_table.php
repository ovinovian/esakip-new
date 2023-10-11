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
        Schema::create('rpjmd6_strategis', function (Blueprint $table) {
            $table->id('id_strategi_rpjmd');
            $table->text('nama_strategi_rpjmd');
            $table->unsignedBigInteger('id_sasaran_rpjmd');
            $table->tinyInteger('status_strategi_rpjmd')->nullable()->default(0);
            $table->timestamps();
            $table->foreign('id_sasaran_rpjmd','fk_r6_s_r5_1_s')->references('id_sasaran_rpjmd')->on('rpjmd5_1_sasarans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rpjmd6_strategis');
    }
};
