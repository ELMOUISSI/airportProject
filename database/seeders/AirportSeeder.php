<?php

namespace Database\Seeders;

use App\Models\airport;
use App\Models\vole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        airport::factory(20)->create()->each(function($airp){
            vole::factory(5)->create(["airport_depart_id" => $airp->id,
                                     "airport_arrivee_id" => airport::factory()->create()->id]);
        });
    }
}
