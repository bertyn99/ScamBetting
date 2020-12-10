<?php

namespace Database\Seeders;

use App\Models\Jeu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JeuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jeux = [['nom_jeu' => "Heartstone"], ['nom_jeu' => "Counter-Strike"], ['nom_jeu' => "League of Legends"], ['nom_jeu' => "Valorant"], ['nom_jeu' => "Rainbow 6 Siege"]];
        foreach ($jeux as $jeu) {
            Jeu::create($jeu);
        }
    }
}
