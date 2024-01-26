<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_guru', function (Blueprint $table) {
            $table->increments('id_guru');
            $table->string('nama');
            $table->integer('nip')->unique();
            $table->integer('mapel_id')->unsigned()->length(10);
            $table->integer('nuptk');
            $table->integer('tahun_sertifikasi');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('nama_ibu');
            $table->string('jabatan');
            $table->string('golongan_capeg');
            $table->string('tmt_capeg');
            $table->string('golongan_akhir');
            $table->string('tmt_akhir');
            $table->integer('masa_kerjath');
            $table->integer('masa_kerjabln');
            $table->string('mulai_tugas');
            $table->string('tingkat_ijazah');
            $table->string('jurusan_kuliah');
            $table->integer('tahun_tamat');
            $table->integer('jumlah_jam');
            $table->string('ket');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_guru');
    }
};
