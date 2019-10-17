<?php

use Illuminate\Database\Seeder;
use App\Model\role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $namaRole = ['Petugas Locket','Administratif','Kepala Klinik','Super Admin','dokter'];
        $keterangan = ['Modul Pendafataran','Modul Rekam medis dan dokter','laporan dan dahsboar','Semua Mua','input rekam medis'];
        for ($i=0; $i <4 ; $i++) { 
            # code...
            $role = new role;
            $role->name_role = $namaRole[$i];
            $role->keterangan = $keterangan[$i];
            $role->save();
        }
    }
}
