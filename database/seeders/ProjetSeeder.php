<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projets')->insert([
            [
                // "url" => "http://127.0.0.1:8000/img/g1.jpg",
                "url" => "a1.jpg",
                "titre" => "Lavendar ambient interior",
                "auteur" => "Envato",
                "dateCreate"=>"2009-01-01",
                "description" => "Lavendar Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.",
                "created_at" => now()
            ],
            [
                // "url" => "http://127.0.0.1:8000/img/g2.jpg",
                // "url" => "/img/a2.jpg",
                "url" => "a2.jpg",
                "titre" => "ambient interior",
                "auteur" => "Lavendar ambient interior",
                "dateCreate"=>"2010-01-01",
                "description" => "ambient Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.",
                "created_at" => now()
            ],
            [
                // "url" => "http://127.0.0.1:8000/img/g3.jpg",
                "url" => "a3.jpg",
                "titre" => "Lavendar",
                "auteur" => "interior",
                "dateCreate"=>"2022-01-01",
                "description" => "interior Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.",
                "created_at" => now()
            ],
            [
                // "url" => "http://127.0.0.1:8000/img/g4.jpg",
                "url" => "a4.jpg",
                "titre" => "ambient interior",
                "auteur" => "Lavendar ambient interior",
                "dateCreate"=>"2017-01-01",
                "description" => "dernier Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.",
                "created_at" => now()
            ],
        ]);
    }
}
