<?php

use Illuminate\Database\Seeder;
use App\Model\tindakanDiagnosa;

class TindakanDiagnosaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $hasil =['pusing','kembung','demam','diare','kembung','pusing','anemia','migren'];
        $mmedis = ['4','5','6','7','8','6','7','8'];
        
        
       
        for ($i=0; $i < 5; $i++) { 
            # code...
            $rekammedis = new tindakanDiagnosa;
            $rekammedis->hasil_diagnosa = $hasil[0];
            $rekammedis->id_rekammedis = $mmedis[$i];
            $rekammedis->save();
        }
        for ($i=0; $i < 5; $i++) { 
            # code...
            $rekammedis = new tindakanDiagnosa;
            $rekammedis->hasil_diagnosa = $hasil[1];
            $rekammedis->id_rekammedis = $mmedis[$i];
            $rekammedis->save();
        }
        for ($i=0; $i < 5; $i++) { 
            # code...
            $rekammedis = new tindakanDiagnosa;
            $rekammedis->hasil_diagnosa = $hasil[2];
            $rekammedis->id_rekammedis = $mmedis[$i];
            $rekammedis->save();
        }
        for ($i=0; $i < 5; $i++) { 
            # code...
            $rekammedis = new tindakanDiagnosa;
            $rekammedis->hasil_diagnosa = $hasil[3];
            $rekammedis->id_rekammedis = $mmedis[$i];
            $rekammedis->save();
        }
        
       
    }
}
