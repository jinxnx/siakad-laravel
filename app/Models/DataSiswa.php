<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DataKelas; 
use App\Models\DataNilai;


class DataSiswa extends Model
{
    protected $table='data_siswa';
    protected $primaryKey = 'id_siswa';
    protected $fillable= ['nama','nis','nisn','kelas_id','jenis_kelamin','tempat_lahir','tanggal_lahir','agama','nama_ayah','nama_ibu','pekerjaan_ayah','pekerjaan_ibu','asal_sekolah','nopes','no_ijazah','no_skhun','alamat','foto'];

    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'nis';   
    }

    public function kelas()
    {
        return $this->belongsTo(DataKelas::class, 'kelas_id' , 'id_kelas');
    
    }

    public function siswa_nilai()
    {
        return $this->hasMany(DataNilai::class, 'siswa_id', 'id_siswa');
    }

    public function siswa_users(){
        return $this->hasOne(User::class, 'user_id','nis');
    }
}
