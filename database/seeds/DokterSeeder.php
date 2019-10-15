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

        $kode = ['KDK-001','KDK-002','KDK-003','KDK-004','KDK-005','KDK-006','KDK-007','KDK-008','KDK-009','KDK-010'];
        $tipeDokter =['1','1','1','1','0','0','0','0','0','0'];
        $poli =['1','1','1','1','5','4','4','1','3','2'];
        $alamat =['1','2','3','4','5','6','7','8','9','10'];
        $nik =['09090909090','09090909091','09090909092','09090909093','09090909094','09090909095','09090909096','09090909097','09090909098','09090909099'];
        $tanggalLahir = ['2001-10-16T18:10:00','2019-10-16T18:10:00',
                        '2002-10-16T18:10:00','2003-10-16T18:10:00',
                        '2004-10-16T18:10:00','2005-10-16T18:10:00',
                        '2007-10-16T18:10:00','2008-10-16T18:10:00',
                        '2009-10-16T18:10:00','2010-10-16T18:10:00'];
        $nama =['Drs.Eko Purnama','Drs.Rio Hardiansyah',
                'Drs.Febrian','Drs.Hadi',
                'Drs.Devina','Drs.Subarjo',
                'Drs.Arifin','Drs.DwiEka','Drs.Gustian','Drs.Anggi'];
        $tempatLahir =['Bekasi','Jawa barat',
                'Jakarta','Surabaya',
                'Medan','Palembang',
                'Depok','Bogor','Yogyakarta','Surabaya'];
        $telepone =['08569743546','08569743546','08569743546','08569743546','08569743546756','08569743546','08569743546','08569743546','08569743546','08569743546'];
        $usia =['21','22','23','24','35','36','27','28','29','30'];
        $jenisKelamin =['1','0','1','0','1','0','1','0','1','0'];
        
        for ($i=0; $i < 10; $i++) { 
            # code...
            $dokter = new dokter;
            $dokter->kode_dokter = $kode[$i];
            $dokter->tipe_dokter = $tipeDokter[$i];
            $dokter->id_tipe_poli = $poli[$i];
            $dokter->alamat_dokter = $alamat[$i];
            $dokter->nik = $nik[$i];
            $dokter->tanggal_lahir = $tanggalLahir[$i];
            $dokter->nama_lengkap = $nama[$i];
            $dokter->telepon = $telepone[$i];
            $dokter->hp = $telepone[$i];
            $dokter->tempat_lahir = $tempatLahir[$i];
            $dokter->usia = $usia[$i];
            $dokter->jenis_kelamin = $jenisKelamin[$i];
            $dokter->agama = "Islam";
            $dokter->keterangan = "Mantap Gan!";
            $dokter->save();
        }
        
    }
}
