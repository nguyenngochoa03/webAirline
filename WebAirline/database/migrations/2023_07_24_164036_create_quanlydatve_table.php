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
        Schema::create('quanlydatve', function (Blueprint $table) {
            $table->bigIncrements('MaDatVe'); // Khóa chính tự động tăng
            $table->string('DiemKhoiHanh');
            $table->string('DiemDen');
            $table->date('NgayDatVe');
            $table->date('NgayKhoiHanh');
            $table->string('HanhKhach')->nullable();
            $table->integer('SoLuongVe');
            $table->decimal('GiaVe', 10, 2);
            $table->string('TrangThaiDatVe')->nullable();
            $table->integer('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quanlydatve');
    }
};
