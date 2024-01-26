<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\DataKelas;
use App\Models\DataGuru;
use App\Models\DataMapel;

class JadwalPelajaran extends Model
{
    public $table='jadwal_pelajaran';

    protected $fillable = [
        'hari',
        'kelas_id',
        'jam_habis',
        'guru_id',
        'jam_mulai',
        'mapel_id',
    ];

    public function mapel_kelas(){
        return $this->hasMany(DataKelas::class, 'id_kelas', 'kelas_id');
    }

    public function guru(){
        return $this->hasMany(DataGuru::class, 'id_guru', 'guru_id');
    }

    public function mapel_jp(){
        return $this->hasMany(DataMapel::class, 'id_mapel', 'mapel_id');
    }


}
