<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_fasilitas', function (Blueprint $table) {
            $table->dropColumn('jml_gnp');
            $table->dropColumn('jml_ganjil');
            $table->integer('jml_fasilitas');
            $table->integer('kondisi_baik');
            $table->integer('kondisi_rusak');

        });

        DB::statement("ALTER TABLE data_fasilitas ADD tgl_diterima DATE");
        DB::statement("ALTER TABLE data_fasilitas ADD foto LONGBLOB");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tgl_diterima');
        Schema::dropIfExists('jml_fasilitas');
        Schema::dropIfExists('kondisi_baik');
        Schema::dropIfExists('kondisi_rusak');
        Schema::dropIfExists('foto');
    }
};
