<?php

namespace Database\Seeders;

use App\Models\Equipe;
use App\Models\ScamBetting;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

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
            AdminSeeder::class,
            JeuSeeder::class,
            EquipeSeeder::class,
            ScamBettingSeeder::class
        ]);
    }
}
