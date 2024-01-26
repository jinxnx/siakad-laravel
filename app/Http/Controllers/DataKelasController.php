<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKelas;
use App\Models\DataGuru;
use App\Models\DataSiswa;
use Alert;

class DataKelasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
{
    $data_kelas=DataKelas::with('siswa', 'walikelas')->get();
    $wakel=DataGuru::with('wakel')->get();

    return view ('Sekolah.kelas', compact('data_kelas', 'wakel'));
}

public function show($id_kelas)
{
    $tampilan_kelas=Datakelas::find($id_kelas);
    $wali_kelas= DataKelas::with('walikelas','siswa')->where('id_kelas' , $id_kelas)->get();

    return view('Sekolah.tampilankelas',compact('tampilan_kelas','wali_kelas'));
 }

public function create()
    {
     //
    }

public function update(Request $request, $id_kelas)
    {       
        $data = [
            'nama_kelas'=> $request->enama_kelas,
            'wakel_id'=> $request->ewali_kelas,
        ];
        datakelas::where('id_kelas' , $id_kelas)->update($data);
        return redirect('/kelas')->with('success','Data Berhasil Diperbaharui');
    }

public function destroy($id_kelas){

        $hapus_kelas= DataKelas::findOrFail($id_kelas);
        $hapus_kelas->delete();
        return redirect ('/kelas')->with('success','Data Berhasil Dihapus');;
    
}

public function store (Request $request){
    
        
        $data = [
        'nama_kelas'=> $request->nama_kelas,
        'wakel_id'=> $request->wali_kelas,
    
    ];
    
        datakelas::create($data);
    
            return to_route('kelas.index')->with('Success','Data Berhasil Ditambahkan');
    
    }
}
