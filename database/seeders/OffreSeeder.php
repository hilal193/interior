<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OffreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("offres")->insert([
            [
                "titre"=>"Interior Design",
                "description"=>" Sony laptops are among the most well known laptops on today’s market. Sony is a name that
                over time has established itself as creating a solid product.",
                "created_at"=>now(),
            ],
            [
                "titre"=>"Architecture Design",
                "description"=>" Sony laptops are among the most well known laptops on today’s market. Sony is a name that
                over time has established itself as creating a solid product.",
                "created_at"=>now(),
            ],
            [
                "titre"=>"Concept Design",
                "description"=>" Sony laptops are among the most well known laptops on today’s market. Sony is a name that
                over time has established itself as creating a solid product.",
                "created_at"=>now(),
            ],
        ]);
    }
}
