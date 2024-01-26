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
        Schema::create('data_nilai', function (Blueprint $table) {
            $table->increments('id_nilai');
            $table->integer('siswa_id')->unsigned()->length(10);
            $table->integer('mapel_id')->unsigned()->length(10);
            $table->integer('kelas_id')->unsigned()->length(10);
            $table->integer('semester');
            $table->integer('kkm');
            $table->integer('nilai');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_nilai');
    }
};
