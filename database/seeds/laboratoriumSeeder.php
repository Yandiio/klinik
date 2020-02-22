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
        $laboratorium->nama = "IMMUNOLOGI";
        $laboratorium->keterangan = "Infeksi virus,status imun,response pasca vaksinasi";
        $laboratorium->save();

        $laboratorium = new laboratorium;
        $laboratorium->nama = "HEMATOLOGI";
        $laboratorium->keterangan = "anemia,infeksi sel darah putih,alergri,pembekuan darah,trombosit";
        $laboratorium->save();
        
        $laboratorium = new laboratorium;
        $laboratorium->nama = "PATOLOGI ANATOMI";
        $laboratorium->keterangan = "mikrospik,molukuler organ,hispatologi dan sitologi";
        $laboratorium->save();

        $laboratorium = new laboratorium;
        $laboratorium->nama = "MIKROBIOLOGI";
        $laboratorium->keterangan = "tinja,air seni,darah,dahak.mikroba patogen";
        $laboratorium->save();

        
    }
}
