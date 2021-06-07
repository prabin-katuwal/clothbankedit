<?php

use Illuminate\Database\Seeder;
use App\User;

class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
            "name"=>"superadmin",
            "email"=>"superadmin@gmail.com",
            "password"=>bcrypt('11111111'),
            "status"=>1
        ]);
    }
}
