<?php

use Illuminate\Database\Seeder;
use App\Model\hubungan;

class hubunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $namaHubungan = ['Kake','Nenek','Ayah','Paman','Bibi','Kaka','Adik'];

        for ($i=0; $i < count($namaHubungan) ; $i++) { 
            # code...
            $hubungan = new hubungan;
            $hubungan->hubungan_keluarga = $namaHubungan[$i];
            $hubungan->save();
        }
        
    }
}
