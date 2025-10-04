<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Faculty;

class AdminAndFacultySeeder extends Seeder
{
    public function run(): void
    {
        Admin::updateOrCreate(['email' => 'admin@example.com'], [
            'name' => 'Administrator',
            'password' => Hash::make('123456789'),
        ]);

        Faculty::truncate();
        Faculty::create(['name'=>'ผศ.ดร. สมชาย ใจดี','degree'=>'Ph.D.','position'=>'รองประธานสาขาฯ','image'=>'','bio'=>'ผู้เชี่ยวชาญด้านซอฟต์แวร์']);
        Faculty::create(['name'=>'ผศ.ดร. สายใจ กล้าหาญ','degree'=>'Ph.D.','position'=>'หัวหน้าหลักสูตร','image'=>'','bio'=>'สอนวิชาออกแบบซอฟต์แวร์']);
    }
}