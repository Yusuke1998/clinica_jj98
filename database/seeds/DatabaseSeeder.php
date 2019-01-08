<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(ConsultingroomTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ConfigTableSeeder::class);
        $this->call(BloodTableSeeder::class);
        $this->call(DiseaseTableSeeder::class);
        $this->call(SpecialtyTableSeeder::class);
        $this->call(EthnicTableSeeder::class);
    }
}
