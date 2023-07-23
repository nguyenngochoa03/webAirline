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
        Schema::create('quan_ly_chuyen_bay', function (Blueprint $table) {
            $table->increments('MaChuyenBay'); // Khóa chính tự động tăng
            $table->string('SanBayDi');
            $table->string('SanBayDen');
            $table->dateTime('ThoiGian');
            $table->integer('SoGheTrong');
            $table->integer('status')->default('1');
            // Các trường khác nếu cần
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quan_ly_chuyen_bay');
    }
};
