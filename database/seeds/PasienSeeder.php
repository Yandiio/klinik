<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Carbon\Carbon;

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
        for ($i=0; $i < 10; $i++) { 
            # code...
            $faker = Faker::create();
            DB::table('pasien')->insert([
                'nik'               => $faker->unique()->numberBetween($min = 14002293, $max = 24002293),
                'nama_lengkap'      => $faker->name(),
                'tempat_lahir'      => $faker->city(),
                'tanggal_lahir'     => Carbon::now(),
                'telepone'          => $faker->unique()->numberBetween($min = 898989888, $max = 998989888),
                'usia'              => $faker->unique()->numberBetween($min = 0, $max = 56),
                'jenis_kelamin'     => $faker->unique()->numberBetween($min = 0, $max = 1),
                'golongan_darah'    => $faker->unique()->numberBetween($min = 0, $max = 3),
                'agama'             => $faker->unique()->numberBetween($min = 0, $max = 4),
            ]);
        }
        
    }
}
