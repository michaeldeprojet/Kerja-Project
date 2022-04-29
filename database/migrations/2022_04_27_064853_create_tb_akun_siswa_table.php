<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAkunSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_akun_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('username', 100);
            $table->string('password');
            $table->bigInteger('jurusan_id');
            $table->string('nama')->nullable();
            $table->integer('nis')->nullable();
            $table->integer('nisn')->nullable();
            $table->string('email')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('status_pkl')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('role')->nullable();
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
        Schema::dropIfExists('tb_akun_siswa');
    }
}
