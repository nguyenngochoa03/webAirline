<?php

namespace Database\Seeders;

use App\Models\QuanLyThongKe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuanLyThongKeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuanLyThongKe::factory()->count(10)->create();
    }
}
