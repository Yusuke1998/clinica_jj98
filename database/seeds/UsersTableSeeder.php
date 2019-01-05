<?php

use Illuminate\Database\Seeder;
use App\User;
use App\doctor;
use App\receptionist;
use App\patient;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
    	// ADMINISTRADOR

        $usuario = User::create([
        	'username'	=>	'administrador',
        	'email'		=>	'administrador@gmail.com',
        	'rol'		=>	'admin',
        	'password'	=>	bcrypt('administrador')
        ]);

        //MEDICO

        $doctor = User::create([
        	'username'	=>	'medico',
        	'email'		=>	'medico@gmail.com',
        	'rol'		=>	'doctor',
        	'password'	=>	bcrypt('medico')
        ]);

        $medico = doctor::create([
	        'firstname' => 'Jose (ejemplo)',
	        'lastname' 	=> 'Perez',
	        'ci' 		=> '12345678',
	        'telephone1'=> '12345678',
	        'email1' 	=> $doctor->email,
	        'address1'	=> 'Villa de cura - edo. Aragua',
	        'user_id' 	=> $doctor->id,
        ]);

        // RECEPCIONISTA

        $receptionist = User::create([
	        'username' 	=> 'recepcionista',
	        'email' 	=> 'recepcionista@gmail.com',
	        'rol' 		=> 'receptionist',
	        'password' 	=> bcrypt('recepcionista'),
        ]);

        $recepcionista = receptionist::create([
        'firstname' 	=> 'Maria (ejemplo)',
        'lastname' 		=> 'Perez',
        'ci' 			=> '87654321',
        'telephone1' 	=> '87654321',
        'email1' 		=> '87654321',
        'address1' 		=> 'Cagua - edo. Aragua',
        'user_id' 		=> $receptionist->id,
        ]);

        // PACIENTE

        $paciente = patient::create([
        'firstname'     => 'Juanito (ejemplo)',
        'lastname'      => 'Perez',
        'ci'            => '0987654321',
        'telephone1'    => '0987654321',
        'email1'        => 'juanito@gmail.com',
        'address1'      => 'Maracay - edo. Aragua',
        ]);

    }
}
