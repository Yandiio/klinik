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
            $table->string('kode_dokter');
            $table->integer('id_tipe_poli')->unsigned();
            $table->integer('tipe_dokter');
            $table->integer('alamat_dokter')->unsigned();
            $table->string('nik');
            $table->date('tanggal_lahir');
            $table->string('nama_lengkap');
            $table->integer('telepon');
            $table->integer('hp');
            $table->string('tempat_lahir');
            $table->integer('usia');
            $table->integer('jenis_kelamin');
            $table->string('agama');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('id_tipe_poli')->references('id')->on('tipe_poli');
            $table->foreign('alamat_dokter')->references('id')->on('alamat_dokter');
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
