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
        Schema::create('rpjmd3_misis', function (Blueprint $table) {
            $table->id('id_misi_rpjmd');
            $table->text('nama_misi_rpjmd');
            $table->unsignedBigInteger('id_visi_rpjmd');
            $table->tinyInteger('status_misi_rpjmd')->nullable()->default(0);
            $table->timestamps();
            $table->foreign('id_visi_rpjmd','fk_r3_m_r2_v')->references('id_visi_rpjmd')->on('rpjmd2_visis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rpjmd3_misis');
    }
};
