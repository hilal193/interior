<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            BlogSeeder::class,
            OffreSeeder::class,
            ServiceSeeder::class,
            ProjetSeeder::class,
            ProjetShowSeeder::class,
            ContactSeeder::class,
        ]);
    }
}
