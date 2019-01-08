<?php

use Illuminate\Database\Seeder;
use App\consultingroom;

class ConsultingroomTableSeeder extends Seeder
{
    public function run()
    {
        for ($i=1; $i <= 10 ; $i++) { 
     
        	$consultorio = consultingroom::create([
        		'number' 	=>	$i,
        		'location'	=>	'El consultorio '.$i.' se encuentra a la izquierda de la sala principal!',
        	]);
        }
    }
}
