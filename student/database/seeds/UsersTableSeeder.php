<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
                'role_id'=>2,
                'active'=>1,
        		'name'=>'Akshit',
        		'username'=>'aksh1150',
        		'email'=>'aksh115@gmail.com',
        		'password'=>bcrypt('123'),
        		'remember_token'=> str_random(10),

        	]);
    }
}
