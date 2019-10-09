<?php

use Illuminate\Database\Seeder;
use App\Model\AlamatDokter;

class alamatDokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alamatDokters = new AlamatDokter;
        $alamatDokters->alamat = "JL.Batu Sari 2";
        $alamatDokters->kelurahan = "Batu Ampar";
        $alamatDokters->kecamatan = "Kramat Jati";
        $alamatDokters->provinsi = "Jakarta";
        $alamatDokters->kabupaten = "DKI Jakarta";
        $alamatDokters->save();
    }
}
