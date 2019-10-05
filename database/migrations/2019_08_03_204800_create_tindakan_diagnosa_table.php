<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTindakanDiagnosaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tindakan_diagnosa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_diagnosa')->unsigned();
            $table->timestamps();

            
            $table->foreign('id_diagnosa')->references('id')->on('diagnosa');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tindakan_diagnosa');
    }
}
