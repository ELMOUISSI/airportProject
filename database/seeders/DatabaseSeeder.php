<?php
//seeders homa li kaytkalfo lina bach nansiriw les donnes de test f base de donnes 

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
    \App\Models\User::factory(10)->create();
    }
}
