<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attendance;

class AttendanceSeeder extends Seeder
{
    /**
     * Jalankan seeder untuk tabel attendance.
     */
    public function run(): void
    {
        Attendance::create([
            'nama' => 'Santy',
            'tanggal' => now()->toDateString(),
            'jam_masuk' => '08:00',
            'jam_keluar' => '16:00',
            'status' => 'hadir',
        ]);

        Attendance::create([
            'nama' => 'Budi',
            'tanggal' => now()->toDateString(),
            'jam_masuk' => null,
            'jam_keluar' => null,
            'status' => 'izin',
        ]);

        Attendance::create([
            'nama' => 'Ani',
            'tanggal' => now()->toDateString(),
            'jam_masuk' => null,
            'jam_keluar' => null,
            'status' => 'sakit',
        ]);
    }
}
