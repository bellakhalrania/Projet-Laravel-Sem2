<?php

namespace Database\Factories;
use App\Models\Chauffeur;
use App\Models\Trajet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chauffeur>
 */
class ChauffeurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'ncin' => $this->faker->numerify('########'),
            'nom' => $this->faker->firstName,
            'prenom' => $this->faker->lastName,
            'salaire' => $this->faker->numerify('########'),
            'adresse' => $this->faker->city,
           
           
        ];
    }
    
}
