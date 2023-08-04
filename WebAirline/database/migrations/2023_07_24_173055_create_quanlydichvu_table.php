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
        Schema::create('quanlydichvu', function (Blueprint $table) {
            $table->bigIncrements('MaDichVu'); // Khóa chính tự động tăng
            $table->string('TenDichVu');
            $table->text('MoTaDichVu');
            $table->decimal('GiaDichVu', 10, 2);
            $table->string('HinhAnh');
            $table->integer('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quanlydichvu');
    }
};
