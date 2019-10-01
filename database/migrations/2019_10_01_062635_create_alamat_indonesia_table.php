<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlamatIndonesiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Artisan::call('laravolt:indonesia:seed');
        // Schema::create('alamat_indonesia', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('alamat_indonesia');
        Schema::dropIfExists('indonesia_villages');
        Schema::dropIfExists('indonesia_districts');
        Schema::dropIfExists('indonesia_cities');
        Schema::dropIfExists('indonesia_provinces');
    }
}
