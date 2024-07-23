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
        Schema::create('chi_tiet_gio_hangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_gio_hang');
            $table->unsignedBigInteger('id_san_pham');
            $table->integer('so_luong');
            $table->foreign('id_gio_hang')->references('id')->on('gio_hangs')->onDelete('cascade');
            $table->foreign('id_san_pham')->references('id')->on('san_phams')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_gio_hangs');
    }
};
