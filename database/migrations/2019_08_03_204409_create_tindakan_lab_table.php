<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTindakanLabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tindakan_lab', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_laboratorium')->unsigned();
            $table->integer('id_rekammedis')->unsigned();
            $table->timestamps();

            
            $table->foreign('id_laboratorium')->references('id')->on('laboratorium');
            $table->foreign('id_rekammedis')->references('id')->on('rekam_medis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tindakan_lab');
    }
}
