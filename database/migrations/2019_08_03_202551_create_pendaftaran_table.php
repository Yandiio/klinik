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
            $table->integer('id_penjamin')->unsigned();
            $table->integer('id_pasien')->unsigned()->nullable();
            $table->integer('id_tipe_poli')->unsigned();
            $table->string('no_daftar')->nullable();
            $table->date('tgl_daftar')->nullable();
            $table->string('status')->nullable();
            $table->string('keluhan')->nullable();
            $table->timestamps();

            $table->foreign('id_pasien')->references('id')->on('pasien');
            $table->foreign('id_penjamin')->references('id')->on('penjamin');
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
