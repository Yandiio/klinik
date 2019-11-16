<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Model\pendaftaran;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $asuransi =['1','1','2','3','5','2','2','1','2','1'];
        $poli =['1','1','2','3','5','2','3','3','4','1'];
        $status  =['0','0','0','0','0','0','0','0','0','0'];
        $nomor =['001','002','003','004','005','006','007','008','009','010'];
        
        $pasienId =['1','1','2','3','4','5','6','7','8','9'];
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
        $keluhan  =['Pusing','Batuk',
                'Demam','alergri',
                'gatal - gatal','Panas tinggi',
                'Perut Kembung','Mual','mata perih','Muntahber'];
        for ($i=0; $i < 10; $i++) { 
            # code...
            $pendaftaran = new pendaftaran;
            $pendaftaran->id_penjamin = $asuransi[$i];
            $pendaftaran->id_tipe_poli = $poli[$i];
            $pendaftaran->no_daftar = $nomor[$i];
            $pendaftaran->tgl_daftar = Carbon::now();
            $pendaftaran->keluhan = $keluhan[$i];
            $pendaftaran->status = $status[$i];
            $pendaftaran->save();
        }
    }
}
