<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Models\Mahasiswa;

class AbsensiController extends Controller
{
    public function index()
    {
        $data = Absensi::all();

        return view('absensi.index', compact('data'));
    }

    public function create()
    {
        $mahasiswa = Mahasiswa::all();

        return view('absensi.create', compact('mahasiswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'status' => 'required',
        ]);

        Absensi::create([
            'mahasiswa_id' => $request->mahasiswa_id,
            'tanggal' => $request->tanggal,
            'jam_masuk' => $request->jam_masuk,
            'jam_pulang' => $request->jam_pulang,
            'status' => $request->status,
        ]);

        return redirect('/absensi');
    }

    public function edit($id)
    {
        $data = Absensi::findOrFail($id);
        $mahasiswa = Mahasiswa::all();

        return view('absensi.edit', compact('data', 'mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $data = Absensi::findOrFail($id);

        $data->update([
            'mahasiswa_id' => $request->mahasiswa_id,
            'status' => $request->status,
        ]);

        return redirect('/absensi');
    }

    public function destroy($id)
    {
        Absensi::destroy($id);

        return redirect('/absensi');
    }
}