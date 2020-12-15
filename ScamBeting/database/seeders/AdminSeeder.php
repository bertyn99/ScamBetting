<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'bertyn', 'email' => 'bertynboulikou@gmail.com', 'password' => Hash::make('toto20'), 'isAdmin' => 1]);
    }
}
