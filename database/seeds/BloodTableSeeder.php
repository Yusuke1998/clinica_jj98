<?php

use Illuminate\Database\Seeder;
use App\bloodType;

class BloodTableSeeder extends Seeder
{
    public function run()
    {
        $sangres = [
        	'sangre',
        	'sangre',
        	'sangre',
        	'sangre',
        	'sangre',
        	'sangre',
        	'sangre',
        	'sangre',
        	'sangre',
        	'sangre',
        	'sangre',
        	'sangre',
        	'sangre',
        	'sangre',
        	'sangre',
        	'sangre',
        ];

        foreach ($sangres as $key => $value) {
	        $sangre = bloodType::create([
	        	'name'	=>	$value.' #'.$key,
	        ]);
        }
    }
}
