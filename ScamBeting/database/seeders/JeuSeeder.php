<?php

namespace Database\Seeders;

use App\Models\Jeu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Normalizer\SlugNormalizer;

class JeuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jeux = [['nom_jeu' => "Heartstone", 'slug' => "heartstone"], ['nom_jeu' => "Counter-Strike", 'slug' => "counter-strike"], ['nom_jeu' => "League of Legends", 'slug' => "league-of-legends"], ['nom_jeu' => "Valorant", 'slug' => "valorant"], ['nom_jeu' => "Rainbow 6 Siege", 'slug' => "rainbow-6-siege"]];
        foreach ($jeux as $jeu) {
            Jeu::create($jeu);
        }
    }
}
