<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ScamBetting;

class ScamBettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ScamBetting::create(['balance' => '0']);
    }
}
