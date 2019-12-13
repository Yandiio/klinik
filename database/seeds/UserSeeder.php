<?php

use Illuminate\Database\Seeder;
use App\Model\user;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $user = new user;
        $user->username = 'user';
        $user->password = bcrypt("123456");
        $user->id_role = 1;
        $user->save();
        
        $user = new user;
        $user->username = 'admin';
        $user->password = bcrypt("123456");
        $user->id_role = 2;
        $user->save();

       

        $user = new user;
        $user->username = 'supervisor';
        $user->password = bcrypt("123456");
        $user->id_role = 3;
        $user->save();

        $user = new user;
        $user->username = 'superadmin';
        $user->password = bcrypt("123456");
        $user->id_role = 5;
        $user->save();

        $user = new user;
        $user->username = 'eko';
        $user->password = bcrypt("123456");
        $user->id_role = 4;
        $user->id_dokter = 1;
        $user->save();

        

        $user = new user;
        $user->username = 'rio';
        $user->password = bcrypt("123456");
        $user->id_role = 4;
        $user->id_dokter = 2;
        $user->save();

        $user = new user;
        $user->username = 'febrian';
        $user->password = bcrypt("123456");
        $user->id_role = 4;
        $user->id_dokter = 3;
        $user->save();
    }
}
