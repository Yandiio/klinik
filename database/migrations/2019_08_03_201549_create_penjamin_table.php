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
            $table->integer('hubungan')->nullable();
            $table->integer('id_pasien')->unsigned();
            $table->string('nik')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('telepone')->nullable();
            $table->string('hp')->nullable();
            $table->string('kode_karyawan')->nullable();
            $table->string('no_polis')->nullable();
            $table->date('tanggal_akhir_polis')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
            $table->foreign('id_tipe_asuransi')->references('id')->on('tipe_asuransi');
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
