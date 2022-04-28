<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbLaporanPkl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_laporan_pkl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_siswa')->unsigned();
            $table->string('periode_pkl');
            $table->string('perusahaan');
            $table->bigInteger('id_pembimbing')->unsigned();
            $table->string('divisi');
            $table->string('upload_file');
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
        Schema::dropIfExists('tb_laporan_pkl');
    }
}
