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
        Schema::create('quan_ly_hang_hang_khong', function (Blueprint $table) {
            $table->increments('MaHangHangKhong'); // Khóa chính tự động tăng
            $table->string('TenHangHangKhong');
            $table->string('SoDienThoai');
            $table->string('Email')->unique();
            $table->string('DiaChi');
            $table->integer('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quan_ly_hang_hang_khong');
    }
};
