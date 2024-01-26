<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DataSiswa;
use App\Models\DataMapel;
use App\Models\DataKelas;

class DataNilai extends Model
{
    protected $table='data_nilai';
    protected $primaryKey='id_nilai';
    protected $fillable= ['siswa_id','mapel_id','kelas_id','semester','kkm','nilai'];

    public $timestamps=false;

    public function nilai_siswa()
    {
        return $this->hasMany(DataSiswa::class, 'id_siswa', 'siswa_id');
    }

    public function nilai_mapel()
    {
        return $this->hasMany(DataMapel::class, 'id_mapel', 'mapel_id');
    }

    public function nilai_kelas()
    {
        return $this->hasMany(DataKelas::class, 'id_kelas', 'kelas_id');
    }
}


