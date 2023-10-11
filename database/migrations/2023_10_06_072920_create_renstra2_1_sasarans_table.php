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
        Schema::create('renstra2_1_sasarans', function (Blueprint $table) {
            $table->id('id_sasaran_renstra');
            $table->text('nama_sasaran_renstra');
            $table->unsignedBigInteger('id_tujuan_renstra');
            $table->timestamps();
            $table->foreign('id_tujuan_renstra','fk_r2_1_s_r1_1_t')->references('id_tujuan_renstra')->on('renstra1_1_tujuans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renstra2_1_sasarans');
    }
};
