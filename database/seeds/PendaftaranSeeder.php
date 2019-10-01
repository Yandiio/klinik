<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Carbon\Carbon;

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

        for ($i=0; $i < 10; $i++) { 
            # code...
            $faker = Faker::create();
            DB::table('pendaftaran')->insert([
                'id_pasien'      => $faker->unique()->numberBetween($min = 1, $max = 10),
                'id_tipe_poli'   => $faker->unique()->numberBetween($min = 1, $max = 5),
                'no_daftar'      => $faker->unique()->numberBetween($min = 23, $max = 50),
                'tgl_daftar'     => Carbon::now(),
                'keluhan'        => $faker->word
            ]);
        }
    }
}
