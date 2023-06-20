<?php

use Illuminate\Database\Seeder;
use App\Modal\Obat;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obat = ['Paramex', 'Kataflam', 'Macrogol', 'Paracetamol', 'Antangin', 'Entrasol', 'Antibiotik', 'FG Troches', 'Moluxin', 'Tolak Angin'];
        $golonganDarah =['2500','20000','10000','12000','13000','35000','22500','30000','10000','3'];
    
        for ($i = 0; $i < 10; $i++)
        {
            $obat = new Obat;
            $obat->nama_obat = $obat[$i];
            $obat->satuan_jumlah = '12 Butir/pax';
            $obat->harga_obat = $harga_obat[$i];
        }
    }
}
