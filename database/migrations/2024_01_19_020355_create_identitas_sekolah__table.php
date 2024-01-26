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
        Schema::create('identitas_sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah')->length(50);
            $table->integer('npsn')->length(15);
            $table->string('akreditasi_sekolah')->length(1);
            $table->string('nomor_telepon')->length(20);
            $table->string('kurikulum_digunakan')->length(50);
            $table->string('website_sekolah')->length(50);
            $table->text('visi')->length(200);
            $table->text('misi')->length(500);
            $table->string('alamat')->length(200);
            $table->string('alamat_embed')->length(500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('identitas_sekolah');
    }
};
