<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataFasilitas extends Model
{
    protected $table='data_fasilitas';
    protected $primaryKey = 'id_fasilitas';
    protected $fillable = ['jenis_sarpras','jml_fasilitas','kondisi_baik', 'kondisi_rusak', 'tgl_diterima', 'foto', 'foto2', 'foto3', 'foto4'];

    public $timestamps = false;
}
