<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataStaff extends Model
{
    protected $table='data_staff';
    protected $primaryKey = 'id_staff';
    protected $fillable = ['nama','nip','bidang','nuptk','jenis_kelamin','jabatan','tempat_lahir','tanggal_lahir','nama_ibu','golongan_capeg','tmt_capeg','golongan_akhir','tmt_akhir','masa_kerjath','masa_kerjabln','mulai_tugas', 'tingkat_ijazah','jurusan_kuliah','tahun_tamat','keterangan','foto'];

    public $timestamps = false;
}
