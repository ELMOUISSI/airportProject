<?php

namespace Database\Factories;

use App\Models\airport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\vole>
 */
class VoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $airportDepartId = airport::all()->random()->id;
        return [
              

            "airport_depart_id"=>$airportDepartId,
            "airport_arrivee_id" => airport::where("id", "!=" ,$airportDepartId),
            'date_depart'=> fake()->date(),
            'date_arrivee'=> fake()->date()
        ];
    }
}
