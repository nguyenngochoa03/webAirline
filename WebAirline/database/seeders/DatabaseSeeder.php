<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\students;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([QuanLyChuyenBaySeeder::class,QuanLyHangHangKhongSeeder::class,QuanLyDatVeSeeder::class,QuanLyDichVuSeeder::class,
            QuanLyMaGiamGiaSeeder::class,QuanLyThongKeSeeder::class,QuanLyYeuCauHoTroSeeder::class,studentsSeeder::class]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
