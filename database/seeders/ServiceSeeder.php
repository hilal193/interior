<?php

namespace Database\Seeders;

use App\Models\Offre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "logo"=>"lnr lnr-license",
                "titre"=>"Expert Technicians",
                "description"=>"Computer users and programmers have become so accustomed to using Windows, even for the
                changing.",
                //ici l'offre de l'id sera mis en random et a chaque fois je recupere le premier genre first et a chaque fois il relance le random
                "offre_id"=>Offre::inRandomOrder()->first()->id,
                "created_at"=>now(),
            ],
            [
                "logo"=>"lnr lnr-user",
                "titre"=>"Professional Service",
                "description"=>"Finding the perfect learning tool for Flash is a daunting task to any novice web developer. One can find help.",
                "offre_id"=>Offre::inRandomOrder()->first()->id,
                "created_at"=>now(),
            ],
            [
                "logo"=>"lnr lnr-rocket",
                "titre"=>"Technical Skills",
                "description"=>"The moment you think of buying a Web Hosting Plan, you know one thing – So many choices, which one to choose.",
                "offre_id"=>Offre::inRandomOrder()->first()->id,
                "created_at"=>now(),
            ],
            [
                "logo"=>"lnr lnr-rocket",
                "titre"=>"Technical Skills",
                "description"=>"The moment you think of buying a Web Hosting Plan, you know one thing – So many choices, which one to choose.",
                "offre_id"=>Offre::inRandomOrder()->first()->id,
                "created_at"=>now(),
            ],
            [
                "logo"=>"lnr lnr-user",
                "titre"=>"Professional Service",
                "description"=>"Finding the perfect learning tool for Flash is a daunting task to any novice web developer. One can find help.",
                "offre_id"=>Offre::inRandomOrder()->first()->id,
                "created_at"=>now(),
            ],
            [
                "logo"=>"lnr lnr-license",
                "titre"=>"Expert Technicians",
                "description"=>"Computer users and programmers have become so accustomed to using Windows, even for the
                changing.",
                //ici l'offre de l'id sera mis en random et a chaque fois je recupere le premier genre first et a chaque fois il relance le random
                "offre_id"=>Offre::inRandomOrder()->first()->id,
                "created_at"=>now(),
            ],

        ]);
    }
}
