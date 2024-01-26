<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataStaff;
use Alert;

class DataStaffController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $data_staff=DataStaff::all();
        return view ('Sekolah.staff', compact('data_staff'));
    }
    public function show($id_staff)
    {
        $tampilan_staff=DataStaff::find($id_staff);
        return view('Sekolah.tampilanstaff',compact('tampilan_staff'));
     }

     public function create()
     {
      //
     }
 
  public function store (Request $request){
      
    $logo = file_get_contents($request->inputfoto_staff);
     
     $data = [
     'nama'=> $request->nama_staff,
     'nip'=> $request->nip_staff,
     'bidang'=> $request->bidang_staff,
     'nuptk'=> $request->nuptk_staff,
     'jenis_kelamin'=>$request->jk_staff,
     'jabatan'=> $request->jabatan_staff,
     'tempat_lahir'=> $request->tmpl_staff,
     'tanggal_lahir'=> $request->tgl_staff,
     'nama_ibu'=>$request->nibu_staff,
     'golongan_capeg'=>$request->golcapeg_staff,
     'tmt_capeg'=>$request->tmtcapeg_staff,
     'golongan_akhir'=>$request->golakhir_staff,
     'tmt_akhir'=>$request->tmtakhir_staff,
     'masa_kerjath'=>$request->mkt_staff,
     'masa_kerjabln'=>$request->mkb_staff,
     'mulai_tugas'=>$request->mb_staff,
     'tingkat_ijazah'=>$request->pa_staff,
     'jurusan_kuliah'=>$request->jp_staff,
     'tahun_tamat'=>$request->tt_staff,
     'keterangan'=>$request->ps_staff,
     'foto'=>$logo,
 ];
 
         
     datastaff::create($data);
 
         return to_route('staff.index')->with('success','Data Berhasil Ditambahkan');
 
 }

 public function edit($id_staff)
 {
     $edit_staff=DataStaff::find($id_staff);
     $staff=DataStaff::get();
     return view('Sekolah.editstaff',compact('edit_staff','staff'));
  }

  public function update(Request $request, $id_staff)
  {
      $data = [
          'nama'=> $request->nama_staff,
          'nip'=> $request->nip_staff,
          'bidang'=> $request->bidang_staff,
          'nuptk'=> $request->nuptk_staff,
          'jenis_kelamin'=>$request->jk_staff,
          'jabatan'=> $request->jabatan_staff,
          'tempat_lahir'=> $request->tl_staff,
          'tanggal_lahir'=> $request->tgl_staff,
          'nama_ibu'=>$request->nibu_staff,
          'golongan_capeg'=>$request->gc_staff,
          'tmt_capeg'=>$request->tmtc_staff,
          'golongan_akhir'=>$request->gt_staff,
          'tmt_akhir'=>$request->tmta_staff,
          'masa_kerjath'=>$request->mkt_staff,
          'masa_kerjabln'=>$request->mkb_staff,
          'mulai_tugas'=>$request->mb_staff,
          'tingkat_ijazah'=>$request->ti_staff,
          'jurusan_kuliah'=>$request->jp_staff,
          'tahun_tamat'=>$request->tt_staff,
          'keterangan'=>$request->ket_staff,
      ];
      datastaff::where('id_staff' , $id_staff)->update($data);
      return redirect('/staff')->with('success','Data Berhasil Diperbaharui');
  }


 public function destroy($id_staff){

    $hapus_staff= DataStaff::findOrFail($id_staff);
    $hapus_staff->delete();
    return redirect ('/staff')->with('success', 'Data Berhasil Dihapus');

 }
}
