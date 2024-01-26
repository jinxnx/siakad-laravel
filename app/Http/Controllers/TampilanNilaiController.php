<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TampilanNilaiController extends Controller
{
    public function t_nilai(){
        $siswa=DataNilai::findOrFail($siswa_id);
        $mapel=DataNilai::findOrFail($kelas_id);
        $semester=DataNilai::findOrFail($semester);

        return view('/tampilannilai/{$siswa_id?}kelas_siswa={$kelas_id}&semester={$semester}', compact('t_nilai'));
    }
}
