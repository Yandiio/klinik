<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Model\pasien;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $alamat =['1','2','3','4','5','6','7','8','9','10'];
        $nik =['1232532','223457373','345463626','454526281635','35342535263','343425243','4534252637','453534256','45352626','45352424352'];
        $nama =['Eka Purnama','Rio Hardiansyah',
                'Andi Febrian','Siti Marini',
                'Ayu Devina','Rudi Subarjo',
                'Putra Arifin','Dwi Eka','Suharjo','Anggi Melati'];
        $tempatLahir =['Bekasi','Jawa barat',
                'Jakarta','Surabaya',
                'Medan','Palembang',
                'Depok','Bogor','Yogyakarta','Surabaya'];
        $tanggalLahir = ['2001-10-16T18:10:00','2019-10-16T18:10:00',
                        '2002-10-16T18:10:00','2003-10-16T18:10:00',
                        '2004-10-16T18:10:00','2005-10-16T18:10:00',
                        '2007-10-16T18:10:00','2008-10-16T18:10:00',
                        '2009-10-16T18:10:00','2010-10-16T18:10:00'];
        $telepone =['08569743546','08569743546','08569743546','08569743546','08569743546756','08569743546','08569743546','08569743546','08569743546','08569743546'];
        $usia =['21','22','23','24','35','36','27','28','29','30'];
        $jenisKelamin =['1','0','1','0','1','0','1','0','1','0'];
        $golonganDarah =['1','2','1','0','1','3','2','0','1','3'];
        $agama =['1','2','1','0','1','3','4','0','1','3'];
        for ($i=0; $i < 10; $i++) { 
            # code...
            $pasien = new pasien;
            $pasien->nik = $nik[$i];
            $pasien->alamat_pasien = $alamat[$i];
            $pasien->nama_lengkap = $nama[$i];
            $pasien->tempat_lahir = $tempatLahir[$i];
            $pasien->tanggal_lahir = $tanggalLahir[$i];
            $pasien->telepone = $telepone[$i];
            $pasien->usia = $usia[$i];
            $pasien->jenis_kelamin = $jenisKelamin[$i];
            $pasien->golongan_darah = $golonganDarah[$i];
            $pasien->agama = $agama[$i];
            $pasien->save();
        }
        
    }
}
