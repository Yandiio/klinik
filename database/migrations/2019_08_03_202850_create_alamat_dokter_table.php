<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlamatDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alamat_dokter', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_dokter')->unsigned();
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('provinsi');
            $table->string('kabupaten')->nullable();
            $table->timestamps();


            $table->foreign('id_dokter')->references('id')->on('dokter');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alamat_dokter');
    }
}
