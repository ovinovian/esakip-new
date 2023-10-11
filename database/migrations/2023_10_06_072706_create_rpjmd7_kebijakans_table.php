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
        Schema::create('rpjmd7_kebijakans', function (Blueprint $table) {
            $table->id('id_kebijakan_rpjmd');
            $table->text('nama_kebijakan_rpjmd');
            $table->unsignedBigInteger('id_strategi_rpjmd');
            $table->timestamps();
            $table->foreign('id_strategi_rpjmd','fk_r7_k_r6_s')->references('id_strategi_rpjmd')->on('rpjmd6_strategis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rpjmd7_kebijakans');
    }
};
