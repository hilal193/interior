<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                "nom"=>"Social life",
                "mini_description"=>"Enjoy your social life together",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Politics",
                "mini_description"=>"Be a part of politics",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Food",
                "mini_description"=>"Let the food be finished",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Technology",
                "mini_description"=>"Let the food be finished",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Polytics",
                "mini_description"=>"Let the food be finished",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Lifestyle",
                "mini_description"=>"Let the food be finished",
                "created_at"=>now(),
            ],
        ]);
    }
}
