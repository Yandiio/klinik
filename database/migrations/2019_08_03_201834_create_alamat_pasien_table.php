<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlamatPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alamat_pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pasien')->unsigned();
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('provinsi');
            $table->string('kabupaten')->nullable();
            $table->timestamps();


            $table->foreign('id_pasien')->references('id')->on('pasien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alamat_pasien');
    }
}
