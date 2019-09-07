<?php

use Illuminate\Database\Seeder;
use App\Model\tipeAsuransi;

class tipeAsuransiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipeAsuransi = new tipeAsuransi;
        $tipeAsuransi->nama = "pribadi";
        $tipeAsuransi->save();

        $tipeAsuransi = new tipeAsuransi;
        $tipeAsuransi->nama = "avirst";
        $tipeAsuransi->save();
        
        $tipeAsuransi = new tipeAsuransi;
        $tipeAsuransi->nama = "brilife";
        $tipeAsuransi->save();

        $tipeAsuransi = new tipeAsuransi;
        $tipeAsuransi->nama = "pridencial";
        $tipeAsuransi->save();

        $tipeAsuransi = new tipeAsuransi;
        $tipeAsuransi->nama = "bpjs";
        $tipeAsuransi->save();
    }
}
