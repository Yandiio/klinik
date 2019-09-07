<?php

use Illuminate\Database\Seeder;
use App\Model\diagnosa;

class diagnosaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $diagnosa = new diagnosa;
        $diagnosa->nama = "laboratorium a";
        $diagnosa->hasil_diagnosa = "hasil a";
        $diagnosa->keterangan = "ketrangan laboratorium";
        $diagnosa->save();

        $diagnosa = new diagnosa;
        $diagnosa->nama = "laboratorium b";
        $diagnosa->hasil_diagnosa = "hasil a";
        $diagnosa->keterangan = "ketrangan laboratorium";
        $diagnosa->save();
        
        $diagnosa = new diagnosa;
        $diagnosa->nama = "laboratorium c";
        $diagnosa->hasil_diagnosa = "hasil a";
        $diagnosa->keterangan = "ketrangan laboratorium";
        $diagnosa->save();

        $diagnosa = new diagnosa;
        $diagnosa->nama = "laboratorium d";
        $diagnosa->hasil_diagnosa = "hasil a";
        $diagnosa->keterangan = "ketrangan laboratorium";
        $diagnosa->save();

        $diagnosa = new diagnosa;
        $diagnosa->nama = "laboratorium f";
        $diagnosa->hasil_diagnosa = "hasil a";
        $diagnosa->keterangan = "ketrangan laboratorium";
        $diagnosa->save();
        
    }
}
