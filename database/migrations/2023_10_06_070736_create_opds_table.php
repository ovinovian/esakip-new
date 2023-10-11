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
        Schema::create('opds', function (Blueprint $table) {
            $table->id('id_opd');
            $table->string('nama_opd');
            $table->string('kode_opd',50);
            $table->unsignedBigInteger('id_urusan');
            $table->unsignedBigInteger('id_bidang');
            $table->string('kode_sub_opd',50);
            $table->string('nama_sub_opd');
            $table->tinyInteger('status_opd')->nullable()->default(0);
            $table->timestamps();
            $table->foreign('id_urusan','fk_o_m1_u')->references('id_urusan')->on('main1_urusans');
            $table->foreign('id_bidang','fk_o_m2_b')->references('id_bidang')->on('main2_bidangs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opds');
    }
};
