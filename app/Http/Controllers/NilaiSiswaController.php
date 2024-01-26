<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSiswa;
use App\Models\DataNilai;
use App\Models\DataMapel;
use App\Models\DataKelas;
use Alert;
use Illuminate\Support\Facades\Auth;

class NilaiSiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    $nilai_siswa=DataSiswa::with('siswa_nilai')->get();

    return view ('Siswa.nilai', compact('nilai_siswa'));
}

public function show(Request $request, $id_siswa)
{
    $tampilan_nilai=DataSiswa::with('siswa_nilai')->find($id_siswa);
    $data_nilai=DataNilai::with('nilai_kelas','nilai_siswa','nilai_mapel')->where('siswa_id', '=', $id_siswa)->get();
    $kelas=['kelas_id'=> $request->kelas_siswa];
    $semester=['semester'=> $request->semester];
    $kelas_nama=DataKelas::where('id_kelas', $kelas)->get();
    $semester_nama= $request->semester;
    $kelas_semester = DataNilai::with('nilai_kelas','nilai_siswa','nilai_mapel')->where('kelas_id', $kelas)->where('semester', $semester)->get();
    $mapel=DataMapel::with('mapel_nilai')->get();
    $tampil_kelas=DataKelas::with('kelas_nilai')->get();
    $base64_img = $tampilan_nilai->foto;
    $img = base64_encode($base64_img);
    return view('Siswa.tampilannilai',compact('tampilan_nilai','data_nilai','kelas_semester','kelas_nama', 'semester_nama','mapel', 'tampil_kelas'), ['image' => $img]);
}

public function store (Request $request){


    $data = [
    'siswa_id'=> $request->siswa_id,
    'mapel_id'=> $request->mapel_nilai,
    'kelas_id'=> $request->kelas_siswa_input,
    'semester'=> $request->semester_input,
    'kkm'=> $request->kkm_nilai,
    'nilai'=> $request->siswa_nilai,
];

        
    datanilai::create($data);

       return redirect()->back()->with('success','Data Berhasil Ditambahkan');

}

public function destroy($id_nilai){

    $hapus_nilai= DataNilai::find($id_nilai);
    $hapus_nilai->delete();
    return redirect()->back()->with('success', 'Data Berhasil Dihapus');
 }


 public function user_image()
 {
     $id = Auth::user()->user_id;
     if ($id == 0){
         return view ('Siswa.nilai');
     }else{
         $user_ava =DataSiswa::where('nis', $id)->first();
         $base64_img = $user_ava->foto;
         $img = base64_encode($base64_img);
         return view('Siswa.nilai', ['user_image' => $img]);
     }
  }
}
