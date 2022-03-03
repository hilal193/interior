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
                "created_at" => now()
            ],
            [
                // "url" => "http://127.0.0.1:8000/img/g2.jpg",
                // "url" => "/img/a2.jpg",
                "url" => "a2.jpg",
                "titre" => "ambient interior",
                "created_at" => now()
            ],
            [
                // "url" => "http://127.0.0.1:8000/img/g3.jpg",
                "url" => "a3.jpg",
                "titre" => "Lavendar",
                "created_at" => now()
            ],
            [
                // "url" => "http://127.0.0.1:8000/img/g4.jpg",
                "url" => "a4.jpg",
                "titre" => "ambient interior",
                "created_at" => now()
            ],
        ]);
    }
}
