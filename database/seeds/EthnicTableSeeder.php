<?php

use Illuminate\Database\Seeder;
use App\ethnicGroup;
class EthnicTableSeeder extends Seeder
{
    public function run()
    {
        $etnias = [
        	'etnia',
        	'etnia',
        	'etnia',
        	'etnia',
        	'etnia',
        	'etnia',
        	'etnia',
        	'etnia',
        	'etnia',
        	'etnia',
        	'etnia',
        	'etnia',
        	'etnia',
        	'etnia',
        	'etnia',
        	'etnia',
        ];

        foreach ($etnias as $key => $value) {
	        $etnia = ethnicGroup::create([
	        	'name'	=>	$value.' #'.$key,
	        ]);
        }
    }
}
