<?php

use Illuminate\Database\Seeder;
use App\disease;

class DiseaseTableSeeder extends Seeder
{
    public function run()
    {
        $enfermedades = [
        	'Enfermedad',
        	'Enfermedad',
        	'Enfermedad',
        	'Enfermedad',
        	'Enfermedad',
        	'Enfermedad',
        	'Enfermedad',
        	'Enfermedad',
        	'Enfermedad',
        	'Enfermedad',
        	'Enfermedad',
        	'Enfermedad',
        	'Enfermedad',
        	'Enfermedad',
        	'Enfermedad',
        	'Enfermedad',
        ];

        foreach ($enfermedades as $key => $value) {
	        $enfermedad = disease::create([
	        	'name'	=>	$value.' #'.$key,
	        ]);
        }

    }
}
