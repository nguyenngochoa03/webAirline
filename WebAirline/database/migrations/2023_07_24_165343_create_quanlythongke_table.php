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
        Schema::create('quanlythongke', function (Blueprint $table) {
            $table->bigIncrements('MaThongKe'); // Khóa chính tự động tăng
            $table->date('Ngay');
            $table->decimal('TongDoanhThu', 10, 2);
            $table->integer('TongSoVeBanDuoc');
            $table->integer('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quanlythongke');
    }
};
