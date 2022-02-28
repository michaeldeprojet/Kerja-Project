<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurnalPklTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurnal_pkl', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa', 100);
            $table->date('tgl_pkl');
            $table->string('pembimbing', 100);
            $table->unsignedInteger('nis');
            $table->string('perusahaan', 100);
            $table->string('divisi', 100);
            $table->unsignedSmallInteger('minggu');
            $table->longText('kegiatan');
            $table->longText('hasil');
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
        Schema::dropIfExists('jurnal_pkl');
    }
}
