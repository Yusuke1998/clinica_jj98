<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $usuarios = User::create([
        	'username'	=>	'admin',
        	'email'		=>	'admin@gmail.com',
        	'rol'		=>	'admin',
        	'password'	=>	bcrypt('admin')
        ]);
    }
}
