<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DataMapel;
use App\Models\DataKelas;

class DataGuru extends Model
{
    protected $table='data_guru';
    protected $primaryKey = 'id_guru';
    protected $fillable= ['nama','nip','mapel_id','wakel_id','nuptk','jenis_kelamin','jabatan','tahun_sertifikasi','tempat_lahir','tanggal_lahir','nama_ibu','golongan_capeg','tmt_capeg','golongan_akhir','tmt_akhir','masa_kerjath','masa_kerjabln','mulai_tugas', 'tingkat_ijazah','jurusan_kuliah','tahun_tamat','jumlah_jam','ket','foto'];

    public $timestamps = false;

    public function mapel()
    {
        return $this->belongsTo(DataMapel::class, 'mapel_id' , 'id_mapel');
    
    }

    public function wakel()
    {
        return $this->hasMany(DataKelas::class, 'wakel_id' , 'id_guru');
    
    }


}
