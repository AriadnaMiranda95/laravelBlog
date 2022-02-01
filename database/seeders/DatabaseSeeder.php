<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table("users")->insert([
         ["name" => "ruben", "email" => "ruben@pepe.com", "password" => "password"],
         ["name" => "irene", "email" => "irene@pepe.com", "password" => "password"],
         ["name" => "jose", "email" => "jose@pepe.com", "password" => "password"] ]);

         DB::table("categorias")->insert([
         ["nombre" => "Hardware"],
         ["nombre" => "Sotfware"],
         ["nombre" => "Robotica"]
         ]);

         $this->call(PostSeeder::class);
    }
}
