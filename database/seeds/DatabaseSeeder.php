<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ConfigTableSeeder::class);
        $this->call(BloodTableSeeder::class);
        $this->call(DiseaseTableSeeder::class);
        $this->call(EthnicTableSeeder::class);
    }
}
