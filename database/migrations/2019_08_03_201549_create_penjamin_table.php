<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjaminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjamin', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tipe_asuransi')->unsigned();
            $table->integer('id_hubungan')->unsigned();
            $table->integer('id_pasien')->unsigned();
            $table->string('nik');
            $table->string('nama_lengkap');
            $table->string('telepone');
            $table->string('hp');
            $table->string('kode_karyawan')->nullable();
            $table->date('no_polis');
            $table->string('tanggal_akhir_polis');
            $table->timestamps();
            $table->foreign('id_tipe_asuransi')->references('id')->on('tipe_asuransi');
            $table->foreign('id_hubungan')->references('id')->on('hubungan');
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
        Schema::dropIfExists('penjamin');
    }
}
