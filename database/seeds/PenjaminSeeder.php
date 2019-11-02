<?php

use Illuminate\Database\Seeder;
use App\Model\penjamin;

class PenjaminSeeder extends Seeder
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
        $hubungan =['0','2','3','4','5','2','2','0','2','0'];
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
        $ketrangan  =['untuk Eka Purnama','untuk Rio Hardiansyah',
                'untuk Andi Febrian','untuk Siti Marini',
                'untuk Ayu Devina','untuk Rudi Subarjo',
                'untuk Putra Arifin','untuk Dwi Eka','untuk Suharjo','untuk Anggi Melati'];
        
        for ($i=0; $i < 10; $i++) { 
            # code...
            $penjamin = new penjamin;
            $penjamin->id_tipe_asuransi = $asuransi[$i];
            $penjamin->hubungan = $hubungan[$i];
            $penjamin->id_pasien = $pasienId[$i];
            $penjamin->nik = $nik[$i];
            $penjamin->nama_lengkap = $nama[$i];
            $penjamin->telepone = $telepone[$i];
            $penjamin->hp = $telepone[$i];
            $penjamin->kode_karyawan = $nik[$i]; 
            $penjamin->no_polis = $nik[$i];
            $penjamin->tanggal_akhir_polis = $tanggalLahir[$i];
            $penjamin->keterangan = $ketrangan[$i];
            $penjamin->save();
        }
    }
}
