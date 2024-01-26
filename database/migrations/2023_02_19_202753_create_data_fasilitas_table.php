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
        Schema::create('data_fasilitas', function (Blueprint $table) {
            $table->increments('id_fasilitas');
            $table->string('jenis_sarpras');
            $table->integer('jml_gnp');
            $table->integer('jml_ganjil');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_fasilitas');
    }
};
