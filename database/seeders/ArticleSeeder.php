<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                "titre"=>"The Basics Of Buying A Telescope",
                "description"=>"MCSE boot camps have its supporters and its detractors. Some people do not understand
                why you should have to spend money on boot camp when you can get the MCSE study
                materials yourself at a fraction.",
                "auteur"=>"Mark wiens",
                "creation"=>"2015-11-11",
                "url"=>"blog1.jpg",
                // "tags"=>"Food, Technology, Politics, Lifestyle",
                // "categorie_id"=>Article::inRandomOrder()->first()->id,
                "categorie_id"=>1,
                "created_at"=>now(),
            ],
            [
                "titre"=>"The Basics Of Buying A Telescope",
                "description"=>"MCSE boot camps have its supporters and its detractors. Some people do not understand
                why you should have to spend money on boot camp when you can get the MCSE study
                materials yourself at a fraction.",
                "auteur"=>"Mark wiens",
                "url"=>"blog2.jpg",
                "creation"=>"2014-01-01",
                // "tags"=>"Social life",
                // "categorie_id"=>Article::inRandomOrder()->first()->id,
                "categorie_id"=>2,
                "created_at"=>now(),
            ],
            [
                "titre"=>"Mark wiensSocial life",
                "description"=>"MCSE boot camps have its supporters and its detractors. Some people do not understand
                why you should have to spend money on boot camp when you can get the MCSE study
                materials yourself at a fraction.",
                "auteur"=>"Mark wiens ",
                "creation"=>"2022-01-01",
                "url"=>"blog3.jpg",
                // "tags"=>"Social life",
                "categorie_id"=>3,
                "created_at"=>now(),
            ],
        ]);
    }
}
