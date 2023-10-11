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
        Schema::create('rpjmd1_rpjmds', function (Blueprint $table) {
            $table->id('id_rpjmd');
			$table->year('tahun_awal');
			$table->year('tahun_akhir');
			$table->tinyInteger('status_rpjmd')->nullable()->default(0);
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rpjmd1_rpjmds');
    }
};
