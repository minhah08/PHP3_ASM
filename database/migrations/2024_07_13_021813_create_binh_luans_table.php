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
        Schema::create('binh_luans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tai_khoan');
            $table->unsignedBigInteger('id_san_pham');
            $table->foreign('id_tai_khoan')->references('id')->on('tai_khoans')->onDelete('cascade');
            $table->foreign('id_san_pham')->references('id')->on('san_phams')->onDelete('cascade');
            $table->text('noi_dung');
            $table->boolean('trang_thai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('binh_luans');
    }
};
