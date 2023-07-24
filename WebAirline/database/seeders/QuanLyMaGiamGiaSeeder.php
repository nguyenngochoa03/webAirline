<?php

namespace Database\Seeders;

use App\Models\QuanLyMaGiamGia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuanLyMaGiamGiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuanLyMaGiamGia::factory()->count(10)->create();
    }
}
