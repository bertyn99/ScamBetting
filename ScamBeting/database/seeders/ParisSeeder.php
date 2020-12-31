<?php

namespace Database\Seeders;

use App\Models\{Equipe, Paris};
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ParisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $id = range(1, 5);
        foreach (range(1, 10) as $index) {
            $paris = Paris::create(['id_jeu' => $id, 'endbet' => $faker->dateTimeThisMonth()]);
            $paris->equipes()->attach(array_slice($id, 0, rand(1, 4)));
        }
    }
}
