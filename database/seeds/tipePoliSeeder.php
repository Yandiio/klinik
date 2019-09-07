<?php

use Illuminate\Database\Seeder;
use App\Model\tipePoli;

class tipePoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipePoli = new tipePoli;
        $tipePoli->nama = "pribadi";
        $tipePoli->save();

        $tipePoli = new tipePoli;
        $tipePoli->nama = "avirst";
        $tipePoli->save();
        
        $tipePoli = new tipePoli;
        $tipePoli->nama = "bpjs";
        $tipePoli->save();

        $tipePoli = new tipePoli;
        $tipePoli->nama = "cigna";
        $tipePoli->save();

        $tipePoli = new tipePoli;
        $tipePoli->nama = "prudensial";
        $tipePoli->save();
    }
}
