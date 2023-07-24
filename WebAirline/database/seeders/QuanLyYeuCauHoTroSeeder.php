<?php

namespace Database\Seeders;

use App\Models\QuanLyYeuCauHoTro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuanLyYeuCauHoTroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuanLyYeuCauHoTro::factory()->count(10)->create();
    }
}
