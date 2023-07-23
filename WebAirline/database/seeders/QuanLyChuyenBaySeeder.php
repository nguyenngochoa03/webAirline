<?php

namespace Database\Seeders;

use App\Models\QuanLyChuyenBay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuanLyChuyenBaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuanLyChuyenBay::factory()->count(50)->create();
    }
}
