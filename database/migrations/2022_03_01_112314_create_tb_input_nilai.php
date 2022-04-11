<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbInputNilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_input_nilai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_siswa')->unsigned();
            $table->string('kelas');
            $table->string('semester');
            $table->bigInteger('jurusan_id')->unsigned();
            $table->string('nama_industri');
            $table->string('instruktur');
            $table->integer('nilai_laporan');
            $table->jsonb('nilai_aspek_sikap');
            $table->jsonb('nilai_aspek_pengetahuan');
            $table->jsonb('nilai_aspek_keterampilan');
            $table->jsonb('nilai_rata_rata');
            $table->integer('nilai_akhir');
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
        Schema::dropIfExists('tb_input_nilai');
    }
}
