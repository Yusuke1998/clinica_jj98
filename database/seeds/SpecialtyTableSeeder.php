<?php

use Illuminate\Database\Seeder;
use App\specialty;

class SpecialtyTableSeeder extends Seeder
{
    public function run()
    {
        $especialidades = [
        	'Obstetricia',
        	'Pediatria',
        	'Ginecologia',
        	'Otorrinolaringologo',
        	'Ofstalmologo',
        	'Oncologo',
        	'Cirujano',
        	'Neonatologo',
        	'Traumatologo',
        	'Neurologo',
        	'Dermatologo',
        	'Radiologmo',
        	'Urologo',
        	'Endocrinologo',
        	'Foneatra',
        	'Cardeologo',
        	'Gastroenterologo',
        	'Infectologo',
        	'Inmunologo',
        	'Nefrologo',
        	'Neumonologo',
        	'Psiquiatra',
        	'Sexologo',
        	'Alergologo',
        	'Urolologo',
        	'Cirujano Variatrico'
        ];

        $details = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

        foreach ($especialidades as $key => $value) {

        	$especialidad = specialty::create([
        		'name'		=>	$value,
        		'details'	=>	$details,
        	]);
        }
    }
}
