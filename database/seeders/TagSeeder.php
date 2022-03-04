<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                "nom"=>"Social life",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Politics",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Food",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Technology",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Polytics",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Lifestyle",
                "created_at"=>now(),
            ],
        ]);

        $articles = Article::all();
        Tag::all()->each(function ($tags) use ($articles) {
            $tags->articles()->attach(
            $articles->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
