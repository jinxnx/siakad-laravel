<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Identitas_Sekolah;

class IdentitasSekolahController extends Controller
{
    public function index(){
        return view ('Sekolah.identitas');
    }

    public function show()
{
    $identitas_sekolah=identitas_sekolah::first();
    $place = $identitas_sekolah->alamat_embed;
    $show = $this->generateHTMLStructure($place);
    
    return view('Sekolah.identitas', compact('identitas_sekolah'), ['embedSrc' => $place, 'htmlStructure' => $show]);
 }

    public function update(Request $request)
    {
        $id = $request->id_identitas;

        $data=[
            'nama_sekolah'=> $request->nama_sekolah,
            'npsn'=> $request->npsn,
            'akreditasi_sekolah'=> $request->akreditasi_sekolah,
            'nomor_telepon'=> $request->nomor_telepon,
            'kurikulum_digunakan'=>$request->kurikulum_digunakan,
            'website_sekolah'=> $request->website_sekolah,
            'visi'=> $request->visi,
            'misi'=>$request->misi,
            'alamat'=>$request->alamat,
            'alamat_embed'=>$request->alamat_embed,
            ];

        identitas_sekolah::where('id', $id)->update($data);
        return redirect ('/identitas')->with('success','Data Berhasil Diperbaharui');
    }

    private function generateHTMLStructure($place)
    {
        if ($place == 0){
            $html = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32659995.50349265!2d95.88120277123888!3d-2.2229369243819663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c07d7496404b7%3A0xe37b4de71badf485!2sIndonesia!5e0!3m2!1sen!2sid!4v1705621324984!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        }else{
            $html = "$place";
        }
        return $html;
    }

}
