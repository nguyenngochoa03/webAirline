<?php

namespace Database\Seeders;

use App\Models\lisa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LisaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        lisa::factory()->count(10)->create();
    }
}
