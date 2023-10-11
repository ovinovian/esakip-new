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
        Schema::create('main2_bidangs', function (Blueprint $table) {
            $table->id('id_bidang');
            $table->text('nama_bidang');
            $table->unsignedBigInteger('id_urusan');
            $table->string('kode_bidang',2);
            $table->timestamps();
            $table->foreign('id_urusan','fk_m2_b_m1_u')->references('id_urusan')->on('main1_urusans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main2_bidangs');
    }
};
