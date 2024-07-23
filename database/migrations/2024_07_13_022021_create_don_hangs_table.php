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
        Schema::create('don_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_don_hang')->unique();
            $table->string('ten_nguoi_nhan');
            $table->string('email_nguoi_nhan')->unique();
            $table->string('sdt_nguoi_nhan', 12)->unique();
            $table->boolean('gioi_tinh');
            $table->string('dia_chi_nguoi_nhan', 255);
            $table->date('ngay_dat');
            $table->integer('tong_tien');
            $table->text('ghi_chu');
            $table->unsignedBigInteger('id_nguoi_dung');
            $table->foreign('id_nguoi_dung')->references('id')->on('tai_khoans')->onDelete('cascade');
            $table->unsignedBigInteger('id_phuong_thuc');
            $table->foreign('id_phuong_thuc')->references('id')->on('phuong_thuc_thanh_toan')->onDelete('cascade');
            $table->unsignedBigInteger('id_trang_thai');
            $table->foreign('id_trang_thai')->references('id')->on('trang_thai_don_hangs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_hangs');
    }
};
