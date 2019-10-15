<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alamat_pasien')->unsigned();
            $table->string('nik');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('telepone');
            $table->integer('usia')->nullable();
            $table->integer('jenis_kelamin');
            $table->string('golongan_darah')->nullable();
            $table->string('agama');
            $table->timestamps();

            
            $table->foreign('alamat_pasien')->references('id')->on('alamat_pasien');


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien');
    }
}
