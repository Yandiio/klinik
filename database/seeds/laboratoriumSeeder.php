<?php

use Illuminate\Database\Seeder;
use App\Model\laboratorium;

class laboratoriumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $laboratorium = new laboratorium;
        $laboratorium->nama = "laboratorium a";
        $laboratorium->keterangan = "ketrangan laboratorium";
        $laboratorium->save();

        $laboratorium = new laboratorium;
        $laboratorium->nama = "laboratorium b";
        $laboratorium->keterangan = "ketrangan laboratorium";
        $laboratorium->save();
        
        $laboratorium = new laboratorium;
        $laboratorium->nama = "laboratorium c";
        $laboratorium->keterangan = "ketrangan laboratorium";
        $laboratorium->save();

        $laboratorium = new laboratorium;
        $laboratorium->nama = "laboratorium d";
        $laboratorium->keterangan = "ketrangan laboratorium";
        $laboratorium->save();

        $laboratorium = new laboratorium;
        $laboratorium->nama = "laboratorium f";
        $laboratorium->keterangan = "ketrangan laboratorium";
        $laboratorium->save();
    }
}
