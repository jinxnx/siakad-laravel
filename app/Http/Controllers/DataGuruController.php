<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataGuru;
use App\Models\DataMapel;
use App\Models\DataKelas;

class DataGuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
{
    $data_guru=DataGuru::with('mapel')->get();
    $wakel=DataGuru::with('wakel')->get();
    $mapel=DataMapel::with('guru')->get();

    return view ('Guru.dataguru', compact('data_guru','wakel','mapel'));
}
public function show($id_guru)
{
    $tampilan_guru=DataGuru::find($id_guru);
    $base64_img = $tampilan_guru->foto;
    $img = base64_encode($base64_img);
    return view('Guru.tampilanguru',compact('tampilan_guru'), ['image' => $img]);
 }

 public function create()
    {
     //
    }

public function edit($id_guru)
 {
     $edit_guru=DataGuru::find($id_guru);
     $mapel=DataMapel::with('guru')->get();
     $base64_img = $edit_guru->foto;
     $img = base64_encode($base64_img);
     return view('Guru.editguru',compact('edit_guru', 'mapel'), ['image' => $img]);
  }

 public function store (Request $request){
        
    $logo = file_get_contents($request->inputfoto_guru);
    
    $data = [
    'nama'=> $request->nama_guru,
    'nip'=> $request->nip_guru,
    'mapel_id'=> $request->mapel_guru,
    'nuptk'=> $request->nuptk_guru,
    'jenis_kelamin'=>$request->jk_guru,
    'jabatan'=> $request->jabatan_guru,
    'tahun_sertifikasi'=> $request->tahun_sertifikasi,
    'tempat_lahir'=> $request->tl_guru,
    'tanggal_lahir'=> $request->tgl_guru,
    'nama_ibu'=>$request->nibu_guru,
    'golongan_capeg'=>$request->golcapeg_guru,
    'tmt_capeg'=>$request->tmtcapeg_guru,
    'golongan_akhir'=>$request->golakhir_guru,
    'tmt_akhir'=>$request->tmtakhir_guru,
    'masa_kerjath'=>$request->mkt_guru,
    'masa_kerjabln'=>$request->mkb_guru,
    'mulai_tugas'=>$request->mb_guru,
    'tingkat_ijazah'=>$request->pa_guru,
    'jurusan_kuliah'=>$request->jp_guru,
    'tahun_tamat'=>$request->tt_guru,
    'jumlah_jam'=>$request->jjm_guru,
    'ket'=>$request->ps_guru,
    'foto'=>$logo,
];

        
    dataguru::create($data);

        return to_route('dataguru.index')->with('success','Data Berhasil Ditambahkan');

}

public function update(Request $request, $id_guru)
    {
        $data = [
            'nama'=> $request->nama_guru,
            'nip'=> $request->nip_guru,
            'mapel_id'=> $request->mapel_guru,
            'nuptk'=> $request->nuptk_guru,
            'jenis_kelamin'=>$request->jk_guru,
            'jabatan'=> $request->jabatan_guru,
            'tahun_sertifikasi'=> $request->tahun_sertifikasi,
            'tempat_lahir'=> $request->tl_guru,
            'tanggal_lahir'=> $request->tgl_guru,
            'nama_ibu'=>$request->nibu_guru,
            'golongan_capeg'=>$request->golcapeg_guru,
            'tmt_capeg'=>$request->tmtcapeg_guru,
            'golongan_akhir'=>$request->golakhir_guru,
            'tmt_akhir'=>$request->tmtakhir_guru,
            'masa_kerjath'=>$request->mkt_guru,
            'masa_kerjabln'=>$request->mkb_guru,
            'mulai_tugas'=>$request->mb_guru,
            'tingkat_ijazah'=>$request->pa_guru,
            'jurusan_kuliah'=>$request->jp_guru,
            'tahun_tamat'=>$request->tt_guru,
            'jumlah_jam'=>$request->jjm_guru,
            'ket'=>$request->ps_guru,
        ];
        dataguru::where('id_guru' , $id_guru)->update($data);
        return redirect ('/dataguru')->with('success','Data Berhasil Diperbaharui');
    }


public function destroy($id_guru){

    $hapus_guru= DataGuru::findOrFail($id_guru);
    $hapus_guru->delete();
    return redirect ('/dataguru')->with('success','Data Berhasil Dihapus');;

 }

}
