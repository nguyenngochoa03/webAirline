<?php

namespace Database\Seeders;

use App\Models\QuanLyHangHangKhong;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuanLyHangHangKhongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuanLyHangHangKhong::factory()->count(20)->create();
    }
}
