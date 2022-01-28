<?php

namespace Database\Seeders;


use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i= 0; $i < 10; $i++){
            DB::table('categoria')->insert([
                'title' => $faker->name,
                'description' => $faker->realText(100),
                'image' => $faker->imageUrl(),
            ]);
        }
        //
    }
}
