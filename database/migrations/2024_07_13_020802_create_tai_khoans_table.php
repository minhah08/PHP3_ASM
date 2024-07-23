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
        Schema::create('tai_khoans', function (Blueprint $table) {
            $table->id();
            $table->string('hinh_anh')->nullable;
            $table->string('ho_ten');
            $table->string('email')->unique();
            $table->string('sdt', 12)->unique();
            $table->boolean('gioi_tinh');
            $table->string('dia_chi', 255);
            $table->date('ngay_sinh');
            $table->string('mat_khau');
            $table->unsignedBigInteger('id_chuc_vu');
            $table->foreign('id_chuc_vu')->references('id')->on('chuc_vus')->onDelete('cascade');
            $table->boolean('trang_thai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tai_khoans');
    }
};
