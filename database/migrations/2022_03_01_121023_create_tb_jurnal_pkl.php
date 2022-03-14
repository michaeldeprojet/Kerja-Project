<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbJurnalPkl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_jurnal_pkl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_siswa')->unsigned();
            $table->integer('nis');
            $table->date('tgl_pkl');
            $table->bigInteger('id_pembimbing')->unsigned();
            $table->string('nama_perusahaan');
            $table->string('divisi');
            $table->unsignedSmallInteger('minggu');
            $table->longText('kegiatan');
            $table->longText('hasil');
            $table->foreign('id_pembimbing')->references('id')->on('tb_pembimbing');
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
        Schema::dropIfExists('tb_jurnal_pkl');
    }
}
