<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        

        $this->call(tipePoliSeeder::class);
        $this->call(tipeAsuransiSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(laboratoriumSeeder::class);
        $this->call(DiagnosaSeeder::class);
        $this->call(alamatDokterSeeder::class);
        $this->call(DokterSeeder::class);
        $this->call(AlamatPasienSeeder::class);
        $this->call(PasienSeeder::class);
        $this->call(PenjaminSeeder::class);
        $this->call(PendaftaranSeeder::class);
        
    }
}
