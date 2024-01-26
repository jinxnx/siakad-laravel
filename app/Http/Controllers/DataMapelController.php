<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataGuru;
use App\Models\DataMapel;

class DataMapelController extends Controller
{
    public function index()
{
    $data_mapel=DataMapel::with('guru')->get();
    return view ('Kurikulum.datamapel', compact('data_mapel'));
}


public function create()
    {
     //
    }

public function store (Request $request){
    
        
        $data = [
        'nama_mapel'=> $request->nama_mapel,
    ];
    
        datamapel::create($data);
    
            return to_route('mapel.index')->with('Success','Data Berhasil Ditambahkan');
    
    }
}
