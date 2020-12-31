<?php

namespace Database\Seeders;

use App\Models\Equipe;
use Illuminate\Database\Seeder;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipes = [['nom_equipe' => 'Misfits', 'id_jeu' => 4], ['nom_equipe' => 'Fnatic', 'id_jeu' => 4], ['nom_equipe' => 'Fnatic', 'id_jeu' => 2], ['nom_equipe' => 'G2 Esport', 'id_jeu' => 2], ['nom_equipe' => 'Team Vitality', 'id_jeu' => 2], ['nom_equipe' => 'SK Gaming', 'id_jeu' => 2], ['nom_equipe' => 'Rogue', 'id_jeu' => 2], ['nom_equipe' => 'Fnatic', 'id_jeu' => 3], ['nom_equipe' => 'G2 Esport', 'id_jeu' => 2]];
        foreach ($equipes as $equipe) {
            Equipe::create($equipe);
        }
    }
}
