<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class MyPlantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('my_plants')->insert([
            ['name' => 'Tulipán', 'scientific_name' => 'Tulipán tulipanus', 'img'=> 'url', 'observations' => 'add your text here'],
            ['name' => 'Tulipán', 'scientific_name' => 'Tulipán tulipanus', 'img'=> 'url', 'observations' => 'add your text here'],
        ]);
    }
}
