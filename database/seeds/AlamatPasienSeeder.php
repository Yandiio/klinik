<?php

use Illuminate\Database\Seeder;
use App\Model\AlamatPasien;

class AlamatPasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $almt = ['Jalan ALkaromah Rt 04 Rw 05 No.6',
                    'Jalan Kebangkitan Rt 03 Rw 01 No.7',
                    'Jalan Kemayoran Rt 04 Rw 02 No.8',
                    'Jalan Markisa Rt 04 Rw 04 No.7',
                    'Jalan Hankam Rt 05 Rw 05 No.6',
                    'Jalan Belimbing Rt 04 Rw 0 No.4',
                    'Jalan Melati Rt 08 Rw 07 No.3',
                    'Jalan Harapan Jaya Rt 08 Rw 05 No.3',
                    'Jalan alkaromah Rt 04 Rw 09 No.3',
                    'Jalan Kebangkitan Rt 02 Rw 07 No.3'];

        $kabupaten =['1214','1215','1216','1217','1218','1219','1220','1221','1222','1223'];
        $provinsi = ['11','12','13','14','15','16','17','18','19','21'];
        $kecamatan =['1101020','1101021','1101022','1101030','1101031','1101032','1101040','1101050','1101051','1101010'];
        $kelurahan =['1101010001','1101010002','1101010003','1101010004','1101010005','1101010006','1101010007','1101010008','1101010009','1101010010'];
        
        for ($i=0; $i <10 ; $i++) { 
            # code...
            $alamat = new alamatPasien;
            $alamat->alamat = $almt[$i];
            $alamat->kelurahan = $kelurahan[$i];
            $alamat->kecamatan = $kecamatan[$i];
            $alamat->provinsi = $provinsi[$i];
            $alamat->kabupaten =  $kabupaten[$i];
            $alamat->save();
        }
    }
}
