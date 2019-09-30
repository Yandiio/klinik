<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pasien')->unsigned();
            $table->integer('id_tipe_poli')->unsigned();
            $table->string('no_daftar');
            $table->date('tgl_daftar');
            $table->string('keluhan');
            $table->timestamps();


            $table->foreign('id_pasien')->references('id')->on('pasien');
            $table->foreign('id_tipe_poli')->references('id')->on('tipe_poli');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
}
