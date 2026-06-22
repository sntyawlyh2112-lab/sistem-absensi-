<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Mahasiswa::create([
            'nim' => '12345',
            'nama' => 'Santy',
            'jurusan' => 'Informatika',
        ]);

        Mahasiswa::create([
            'nim' => '67890',
            'nama' => 'Budi',
            'jurusan' => 'Statistika',
        ]);

        Mahasiswa::create([
            'nim' => '54321',
            'nama' => 'Ani',
            'jurusan' => 'Ekonomi',
        ]);
    }
}