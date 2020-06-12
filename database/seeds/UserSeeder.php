<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<=500;$i++){
            DB::table('users')->insert([
                'name' =>  $faker->name,
                'email' =>  $faker->email,
            ]);
        }
    }
}
