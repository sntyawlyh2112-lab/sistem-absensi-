<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Absensi;
use Barryvdh\DomPDF\Facade\Pdf;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'jumlahMahasiswa' => Mahasiswa::count(),
            'hadir' => Absensi::where('status', 'hadir')->count(),
            'izin' => Absensi::where('status', 'izin')->count(),
            'sakit' => Absensi::where('status', 'sakit')->count(),
            'alpa' => Absensi::where('status', 'alpa')->count()
        ]);
    }

    public function exportpdf()
    {
        $data = \App\Models\Absensi::with('mahasiswa')->get();
        
        $pdf = Pdf::loadView('absensi.pdf', compact('data'));

        return $pdf->download('laporan-absensi.pdf');
    }
}