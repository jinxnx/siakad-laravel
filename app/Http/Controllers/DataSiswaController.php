<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSiswa;
use App\Models\DataKelas;   
use Illuminate\Support\Facades\Auth;

class DataSiswaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

public function index()
{
    $data_siswa=DataSiswa::with('kelas')->get();
    $kelas=DataKelas::with('siswa')->get();
    
    return view('Siswa.datasiswa', compact('data_siswa','kelas'));

}

public function show($id_siswa)
{
    $tampilan_siswa=DataSiswa::find($id_siswa);
    return view('Siswa.tampilansiswa', compact('tampilan_siswa'));
 }

 public function edit($id_siswa)
 {
     $edit_siswa=DataSiswa::find($id_siswa);
     $kelas=DataKelas::with('siswa')->get();
     $base64_img = $edit_siswa->foto;
     $img = base64_encode($base64_img);
     return view('Siswa.editsiswa',compact('edit_siswa', 'kelas'), ['image' => $img]);
  }

  

 public function create()
    {

    }
    
    public function store (Request $request){
    
    $logo = file_get_contents($request->inputfoto_siswa);
    
    $data =[
    'nama'=> $request->nama_siswa,
    'nisn'=> $request->nisn_siswa,
    'nis'=> $request->nis_siswa,
    'kelas_id'=> $request->kelas_siswa,
    'jenis_kelamin'=>$request->jk_siswa,
    'tempat_lahir'=> $request->tl_siswa,
    'tanggal_lahir'=> $request->tgl_siswa,
    'agama'=>$request->agama_siswa,
    'nama_ayah'=>$request->nayah_siswa,
    'nama_ibu'=>$request->nibu_siswa,
    'pekerjaan_ayah'=>$request->payah_siswa,
    'pekerjaan_ibu'=>$request->pibu_siswa,
    'asal_sekolah'=>$request->asekolah_siswa,
    'nopes'=>$request->nopes_siswa,
    'no_ijazah'=>$request->nijazah_siswa,
    'no_skhun'=>$request->nskhun_siswa,
    'alamat'=>$request->alamat_siswa,
    'foto'=>$logo,
];

        
    datasiswa::create($data);

        return to_route('datasiswa.index')->with('success','Data Berhasil Ditambahkan');

}
public function update(Request $request, $id_siswa)
    {
        $data = [
            'nama'=> $request->nama_siswa,
            'nisn'=> $request->nisn_siswa,
            'nis'=> $request->nis_siswa,
            'kelas_id'=> $request->kelas_siswa,
            'jenis_kelamin'=>$request->jk_siswa,
            'tempat_lahir'=> $request->tl_siswa,
            'tanggal_lahir'=> $request->tgl_siswa,
            'agama'=>$request->agama_siswa,
            'nama_ayah'=>$request->nayah_siswa,
            'nama_ibu'=>$request->nibu_siswa,
            'pekerjaan_ayah'=>$request->payah_siswa,
            'pekerjaan_ibu'=>$request->pibu_siswa,
            'asal_sekolah'=>$request->asekolah_siswa,
            'nopes'=>$request->nopes_siswa,
            'no_ijazah'=>$request->nijazah_siswa,
            'no_skhun'=>$request->nskhun_siswa,
            'alamat'=>$request->alamat_siswa,
        ];
        datasiswa::where('id_siswa' , $id_siswa)->update($data);
        return redirect ('/datasiswa')->with('success','Data Berhasil Diperbaharui');
    }

 public function destroy($id_siswa){

    $hapus_siswa= DataSiswa::findOrFail($id_siswa);
    $hapus_siswa->delete();
    return redirect ('/datasiswa')->with('success', 'Data Berhasil Dihapus');

 }



}