<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name"=>"Hilal",
            "prenom"=>"Koujil",
            "psaudonyme"=>"adminH",
            "age"=>28,
            "role_id"=>1,
            "email" => "testHilal@hotmail.com",
            "password" => Hash::make("testhilal"),
            "created_at" => now()
        ]);
    }
}
