<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbIzinOrtu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_izin_ortu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('no_surat');
            $table->bigInteger('id_siswa')->unsigned();
            $table->string('nama_orangtua');
            $table->string('alamat_rumah');
            $table->date('tgl_surat');
            $table->string('upload_file');
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
        Schema::dropIfExists('tb_izin_ortu');
    }
}
