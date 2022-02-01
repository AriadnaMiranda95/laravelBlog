<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
        for($i= 0; $i < 10; $i++){
            DB::table('posts')->insert([
                'title' => $faker->name,
                'body' => $faker->paragraph(),
                'image' => Str::random(60),
                'user_id' => "1",
                'categoria_id' => $faker->randomElement([1,2])

            ]);
        }
    }
}
