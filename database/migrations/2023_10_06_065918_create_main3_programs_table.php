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
        Schema::create('main3_programs', function (Blueprint $table) {
            $table->id('id_program');
            $table->text('nama_program');
            $table->unsignedBigInteger('id_bidang');
            $table->string('kode_program',2);
            $table->timestamps();
            $table->foreign('id_bidang','fk_m3_p_m2_b')->references('id_bidang')->on('main2_bidangs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main3_programs');
    }
};
