<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identitas_Sekolah extends Model
{
    use HasFactory;
    protected $table='identitas_sekolah';
    protected $primaryKey = 'id';
    protected $fillable= ['nama_sekolah', 'npsn', 'akreditasi_sekolah', 'nomor_telepon', 'kurikulum_digunakan', 'website_sekolah', 'visi', 'misi', 'alamat', 'alamat_embed'] ;

    public $timestamps = false;
}
