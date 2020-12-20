<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ScamBeting;

class ScamBettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ScamBeting::create(['balance' => '0']);
    }
}
