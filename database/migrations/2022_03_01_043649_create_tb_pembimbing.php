<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPembimbing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pembimbing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('email');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir')->nullable();
            $table->bigInteger('jurusan_id');
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
        Schema::dropIfExists('tb_pembimbing');
    }
}
