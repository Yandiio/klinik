<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekamMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pendaftaran')->unsigned();
            $table->integer('id_dokter')->unsigned();
            $table->integer('id_tindakan_diagnosa')->unsigned();
            $table->integer('id_tindakan_lab')->unsigned();
            $table->string('no_medis');
            $table->string('suhu_badan');
            $table->string('berat_badan');
            $table->string('tinggi_badan');
            $table->string('tekanan_darah');
            

            $table->timestamps();

            $table->foreign('id_pendaftaran')->references('id')->on('pendaftaran');
            $table->foreign('id_dokter')->references('id')->on('dokter');
            $table->foreign('id_tindakan_diagnosa')->references('id')->on('tindakan_diagnosa');
            $table->foreign('id_tindakan_lab')->references('id')->on('tindakan_lab');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekam_medis');
    }
}
