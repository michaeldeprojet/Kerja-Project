<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDaftarHadir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_daftar_hadir', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_siswa')->unsigned();
            $table->integer('nis');
            $table->date('tgl_pkl');
            $table->string('nama_perusahaan');
            $table->string('kompetensi');
            $table->string('keterangan');
            $table->string('alasan')->nullable();
            $table->foreign('id_siswa')->references('id')->on('tb_siswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_daftar_hadir');
    }
}
