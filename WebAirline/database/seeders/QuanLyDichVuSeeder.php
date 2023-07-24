<?php

namespace Database\Seeders;

use App\Models\QuanLyDichVu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuanLyDichVuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuanLyDichVu::factory()->count(10)->create();
    }
}
