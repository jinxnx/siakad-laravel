<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DataGuru;
use App\Models\DataNilai;

class DataMapel extends Model
{
    protected $table='data_mapel';
    protected $primaryKey = 'id_mapel';
    protected $fillable= ['nama_mapel'];

    public $timestamps = false;

    public function guru()
    {
        return $this->hasMany(DataGuru::class, 'mapel_id', 'id_mapel');
    }

    public function mapel_nilai()
    {
        return $this->hasMany(DataNilai::class, 'mapel_id', 'id_mapel');
    }
}
