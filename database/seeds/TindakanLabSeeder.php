<?php

use Illuminate\Database\Seeder;
use App\Model\tindakanLab;

class TindakanLabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $idlab =['1','2','3','4','1','2','3','4'];
        $mmedis = ['1','2','3','4','5','6','7','8'];
        
        
       
        for ($i=0; $i < 8; $i++) { 
            # code...
            $rekammedis = new tindakanLab;
            $rekammedis->id_laboratorium = $idlab[$i];
            $rekammedis->id_rekammedis = $mmedis[$i];
            $rekammedis->save();
        }
        for ($i=0; $i < 8; $i++) { 
            # code...
            $rekammedis = new tindakanLab;
            $rekammedis->id_laboratorium = $idlab[$i];
            $rekammedis->id_rekammedis = $mmedis[$i];
            $rekammedis->save();
        }
        for ($i=0; $i < 8; $i++) { 
            # code...
            $rekammedis = new tindakanLab;
            $rekammedis->id_laboratorium = $idlab[$i];
            $rekammedis->id_rekammedis = $mmedis[$i];
            $rekammedis->save();
        }
        for ($i=0; $i < 8; $i++) { 
            # code...
            $rekammedis = new tindakanLab;
            $rekammedis->id_laboratorium = $idlab[$i];
            $rekammedis->id_rekammedis = $mmedis[$i];
            $rekammedis->save();
        }
       
       
    }
}
