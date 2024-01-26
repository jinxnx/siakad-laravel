<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DataSiswa; 
use App\Models\DataGuru;


class DataKelas extends Model
{
    protected $table='data_kelas';
    protected $primaryKey = 'id_kelas';
    protected $fillable= ['nama_kelas','wakel_id'];

    public $timestamps = false;

    public function siswa()
    {
        return $this->hasMany(DataSiswa::class, 'kelas_id', 'id_kelas');
    }

    public function walikelas()
    {
        return $this->hasMany(DataGuru::class, 'id_guru', 'wakel_id');
    }

    public function kelas_nilai()
    {
        return $this->belongsTo(DataNilai::class, 'kelas_id', 'id_kelas');
    }
}
