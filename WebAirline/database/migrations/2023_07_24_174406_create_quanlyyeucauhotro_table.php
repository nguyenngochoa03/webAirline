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
        Schema::create('quanlyyeucauhotro', function (Blueprint $table) {
            $table->bigIncrements('MaYeuCauHoTro'); // Khóa chính tự động tăng
            $table->date('NgayYeuCau');
            $table->string('TenKhachHang');
            $table->string('ThongTinLienHe');
            $table->text('MoTaYeuCau');
            $table->string('TrangThai');
            $table->integer('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quanlyyeucauhotro');
    }
};
