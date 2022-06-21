<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTbInputNilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_input_nilai', function (Blueprint $table) {
            $table->dropColumn('nilai_laporan');
            $table->jsonb('nilai_catatan_laporan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_input_nilai', function (Blueprint $table) {
            $table->integer('nilai_laporan');
            $table->dropColumn('nilai_catatan_laporan');
        });
    }
}
