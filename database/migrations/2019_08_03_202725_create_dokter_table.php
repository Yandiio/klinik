<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tipe_poli')->unsigned();
            $table->string('nik');
            $table->date('tanggal_lahir');
            $table->string('nama_lengkap');
            $table->integer('telepone');
            $table->integer('hp');
            $table->string('tempat_lahir');
            $table->integer('usia');
            $table->integer('jenis_kelamin');
            $table->string('golongan_darah')->nullable();
            $table->string('agama');
            $table->string('keterangan');
            $table->timestamps();


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
        Schema::dropIfExists('dokter');
    }
}