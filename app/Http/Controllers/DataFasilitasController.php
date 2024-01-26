<?php

namespace App\Http\Controllers;
use App\Models\DataFasilitas;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Carbon;

class DataFasilitasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $data_fasilitas=DataFasilitas::all();
        return view ('Sekolah.fasilitas', compact('data_fasilitas'));
    }
    
    public function create()
    {
     //
    }

    public function show($id_fasilitas)
    {
        $edit_fasilitas=DataFasilitas::find($id_fasilitas);
        $fasilitas=DataFasilitas::all();
   
        return view('Sekolah.editfasilitas',compact('edit_fasilitas', 'fasilitas'));
     }

    public function store (Request $request){
        
        $foto =  file_get_contents($request->foto_fasilitas1);

        $data = [
            'jenis_sarpras'=> $request->jenis_sarpras,
            'tgl_diterima'=> $request->tgl_diterima,
            'jml_fasilitas'=> $request->jumlah_fasilitas,
            'kondisi_baik'=> $request->kondisi_baik,
            'kondisi_rusak'=> $request->kondisi_rusak,
            'foto'=>$foto,
    ];
    
            
        datafasilitas::create($data);
            return redirect('/fasilitas')->with('success','Data Berhasil Ditambahkan');
    
    }

    public function update(Request $request, $id_fasilitas)
    {
        // $foto = file_get_contents($request->foto_fasilitas1);
        
        $data = [
            'jenis_sarpras'=> $request->jenis_sarpras,
            'tgl_diterima'=> $request->tgl_diterima,
            'jml_fasilitas'=> $request->jumlah_fasilitas,
            'kondisi_baik'=> $request->kondisi_baik,
            'kondisi_rusak'=> $request->kondisi_rusak,
            // 'foto'=>$foto,

        ];
        datafasilitas::where('id_fasilitas' , $id_fasilitas)->update($data);
        return redirect('/fasilitas')->with('success','Data Berhasil Diperbaharui');
    }

  
 public function destroy($id_fasilitas){

    $hapus_fasilitas= DataFasilitas::findOrFail($id_fasilitas);
    $hapus_fasilitas->delete();
    return redirect ('/fasilitas')->with('success','Data Berhasil Dihapus');;

 }
}
