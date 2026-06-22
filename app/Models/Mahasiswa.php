<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Absensi;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
        'nama',
        'nim',
        'jurusan'
    ];

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
}