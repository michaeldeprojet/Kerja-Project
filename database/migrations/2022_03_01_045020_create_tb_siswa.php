<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('jurusan_id');
            $table->bigInteger('pembimbing_id')->nullable();
            $table->string('nama')->nullable();
            $table->integer('nis')->nullable();
            $table->integer('nisn')->nullable();
            $table->string('email')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('status_pkl')->nullable();
            $table->string('jenis_kelamin')->nullable();
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
        Schema::dropIfExists('tb_siswa');
    }
}
