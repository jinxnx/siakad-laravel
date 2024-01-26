<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPelajaran;
use App\Models\DataKelas;
use App\Models\DataGuru;
use App\Models\DataMapel;

class JadwalPelajaranController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
{
    $jadwal_pelajaran=JadwalPelajaran::with('mapel_kelas','guru','mapel_jp')->get();

    $kelas=['kelas_id'=> $request->kelas_siswa];
    $kelas_nama =DataKelas::where('id_kelas', $kelas)->get();
    $sennin_jp= JadwalPelajaran::with('mapel_kelas', 'guru', 'mapel_jp')->where('kelas_id', $kelas)->where('hari', 'Sennin')->orderBy('jam_mulai', 'asc')->get();
    $selasa_jp= JadwalPelajaran::with('mapel_kelas', 'guru', 'mapel_jp')->where('kelas_id', $kelas)->where('hari', 'Selasa')->orderBy('jam_mulai', 'asc')->get();
    $rabu_jp =   JadwalPelajaran::with('mapel_kelas', 'guru', 'mapel_jp')->where('kelas_id', $kelas)->where('hari', 'Rabu')->orderBy('jam_mulai', 'asc')->get();  
    $kamis_jp= JadwalPelajaran::with('mapel_kelas', 'guru', 'mapel_jp')->where('kelas_id', $kelas)->where('hari', 'Kamis')->orderBy('jam_mulai', 'asc')->get();
    $jumat_jp= JadwalPelajaran::with('mapel_kelas', 'guru', 'mapel_jp')->where('kelas_id', $kelas)->where('hari', 'Jumat')->orderBy('jam_mulai', 'asc')->get();
    $sabtu_jp= JadwalPelajaran::with('mapel_kelas', 'guru', 'mapel_jp')->where('kelas_id', $kelas)->where('hari', 'Sabtu')->orderBy('jam_mulai', 'asc')->get();

    return view('Kurikulum.jadwalpelajaran', compact('jadwal_pelajaran', 'sennin_jp','kelas', 'selasa_jp', 'rabu_jp', 'kamis_jp', 'jumat_jp', 'sabtu_jp', 'kelas_nama'));
}

}
