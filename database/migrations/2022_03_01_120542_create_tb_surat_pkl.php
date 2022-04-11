<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSuratPkl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_surat_pkl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_siswa')->unsigned();
            $table->integer('no_surat');
            $table->string('penjabat');
            $table->date('tgl_surat');
            $table->string('perusahaan');
            $table->string('alamat_perusahaan');
            $table->bigInteger('id_pembimbing')->unsigned();
            $table->bigInteger('jurusan_id')->unsigned();
            $table->string('upload_file');
            $table->string('Type');
            $table->foreign('id_siswa')->references('id')->on('tb_siswa');
            $table->foreign('id_pembimbing')->references('id')->on('tb_pembimbing');
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
        Schema::dropIfExists('tb_surat_pkl');
    }
}
