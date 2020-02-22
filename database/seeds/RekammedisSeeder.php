<?php

use Illuminate\Database\Seeder;
use App\Model\rekamMedis;

class RekammedisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $daftar =['3','4','5','6','7','8','9','10'];
        $dokter =['1','1','2','3','3','2','2','3'];
        $no_medis =['RM-01','RM-02','RM-03','RM-04','RM-05','RM-06','RM-07','RM-08'];
        
        $suhu =['30','40','50','60','70','30','40','50'];
        $berat =['30','40','50','60','70','30','40','50'];
        $tinggi =['30','40','50','60','70','30','40','50'];
        $darah =['30','40','50','60','70','30','40','50'];
       
        for ($i=0; $i < 8; $i++) { 
            # code...
            $rekammedis = new rekamMedis;
            $rekammedis->id_pendaftaran = $daftar[$i];
            $rekammedis->id_dokter = $dokter[$i];
            $rekammedis->no_medis = $no_medis[$i];
            $rekammedis->suhu_badan = $suhu[$i];
            $rekammedis->berat_badan = $berat[$i];
            $rekammedis->tinggi_badan = $tinggi[$i];
            $rekammedis->tekanan_darah = $darah[$i];
            $rekammedis->save();
        }
    }
}
