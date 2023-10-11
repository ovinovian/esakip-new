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
        Schema::create('rpjmd4_1_tujuans', function (Blueprint $table) {
            $table->id('id_tujuan_rpjmd');
            $table->text('nama_tujuan_rpjmd');
            $table->unsignedBigInteger('id_misi_rpjmd');
            $table->tinyInteger('status_tujuan_rpjmd')->nullable()->default(0);
            $table->timestamps();
            $table->foreign('id_misi_rpjmd','fk_r4_1_t_r3_m')->references('id_misi_rpjmd')->on('rpjmd3_misis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rpjmd4_1_tujuans');
    }
};
