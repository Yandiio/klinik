<?php

use Illuminate\Database\Seeder;
use App\Model\dokter;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dokter = new dokter;
        $dokter->kode_dokter = "KDK-001";
        $dokter->tipe_dokter = 1;
        $dokter->id_tipe_poli = 1;
        $dokter->alamat_dokter = 1;
        $dokter->nik = "09090909090";
        $dokter->tanggal_lahir = "1993-10-08";
        $dokter->nama_lengkap = "Agus Setiyadi";
        $dokter->telepon = "02100000";
        $dokter->hp = "021000000";
        $dokter->tempat_lahir = "Jakarta";
        $dokter->usia = "26";
        $dokter->jenis_kelamin = 1;
        $dokter->agama = "Islam";
        $dokter->keterangan = "Mantap Gan!";
        $dokter->save();
    }
}
