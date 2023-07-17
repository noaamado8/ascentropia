<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for ($i = 0; $i < 5; $i++) {
            DB::table('socixs')->insert([
                'nome' => $faker->name(),
                'apelidos' => $faker->lastName(),
                'tipo_documento'=>'dni',
                'numero' => $faker->randomNumber(9, true),
                'data_nacemento' => $faker->date('Y-m-d'),
                'mobil' => $faker->randomNumber(6, true),
                'email'=>$faker->email(),
                'tipo'=>'basico'

         
        ]);
    } 
}
}
