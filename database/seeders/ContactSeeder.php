<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("contacts")->insert([
            [
                "nomAdresse"=>"TestBinghamton, New York",
                "rueAdresse"=>"4343 Hinkle Deegan Lake Road",
                "numero"=>"00 (958) 9865 562",
                "dispo"=>"Mon to Fri 9am to 6 pm",
                "email"=>"support@colorlib.com",
                "emailDescrip"=>"Send us your query anytime!",
                "logoAdresse"=>"lnr lnr-home",
                "logoPhone"=>"lnr lnr-phone-handset",
                "logoMail"=>"lnr lnr-envelope",

            ]
            ]);
    }
}
