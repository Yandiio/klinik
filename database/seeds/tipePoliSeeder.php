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
        $poli = ['GIGI','ANAK','MATA','UMUM','SYARAF'];
        for ($i=0; $i <5 ; $i++) { 
            # code...
            $tipePoli = new tipePoli;
            $tipePoli->nama = $poli[$i];
            $tipePoli->save();
        }
        
    }
}
