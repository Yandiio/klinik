<?php

use Illuminate\Database\Seeder;
use App\Model\diagnosa;

class DiagnosaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diagnosa = new Diagnosa;
        $diagnosa->kode_diagnosa = "KD-0001";
        $diagnosa->nama = "laboratorium a";
        $diagnosa->hasil_diagnosa = "hasil a";
        $diagnosa->keterangan = "ketrangan laboratorium";
        $diagnosa->save();

        $diagnosa = new Diagnosa;
        $diagnosa->kode_diagnosa = "KD-0002";
        $diagnosa->nama = "laboratorium b";
        $diagnosa->hasil_diagnosa = "hasil a";
        $diagnosa->keterangan = "ketrangan laboratorium";
        $diagnosa->save();
        
        $diagnosa = new Diagnosa;
        $diagnosa->kode_diagnosa = "KD-0003";
        $diagnosa->nama = "laboratorium c";
        $diagnosa->hasil_diagnosa = "hasil a";
        $diagnosa->keterangan = "ketrangan laboratorium";
        $diagnosa->save();

        $diagnosa = new Diagnosa;
        $diagnosa->kode_diagnosa = "KD-0004";
        $diagnosa->nama = "laboratorium d";
        $diagnosa->hasil_diagnosa = "hasil a";
        $diagnosa->keterangan = "ketrangan laboratorium";
        $diagnosa->save();

        $diagnosa = new Diagnosa;
        $diagnosa->kode_diagnosa = "KD-0005";
        $diagnosa->nama = "laboratorium f";
        $diagnosa->hasil_diagnosa = "hasil a";
        $diagnosa->keterangan = "ketrangan laboratorium";
        $diagnosa->save();
        
    }
}
