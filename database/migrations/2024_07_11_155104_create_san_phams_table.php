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
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('ten_san_pham');
            $table->double('gia', 10,2)->default(0);
            $table->string('hinh_anh')->nullable();
            $table->unsignedBigInteger('so_luong');
            $table->string('mo_ta');
            $table->date('ngay_nhap_hang');
            $table->unsignedBigInteger('id_danh_muc');
            $table->foreign('id_danh_muc')->references('id')->on('danh_mucs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
