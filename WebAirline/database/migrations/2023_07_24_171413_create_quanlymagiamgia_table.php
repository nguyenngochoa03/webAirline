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
        Schema::create('quanlymagiamgia', function (Blueprint $table) {
            $table->bigIncrements('MaGiamGia'); // Khóa chính tự động tăng
            $table->string('TenMaGiamGia');
            $table->decimal('GiaGiamGia', 10, 2);
            $table->integer('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quanlymagiamgia');
    }
};
