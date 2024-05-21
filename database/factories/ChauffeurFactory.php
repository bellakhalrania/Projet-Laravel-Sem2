<?php

namespace Database\Factories;

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
           'ncin' =>fake()->ean8(),
           'nom'=> fake()->word(),
           'prenom'=> fake()->word(),
           'salaire'=>fake()->randomFloat(2),
           'adresse'=>fake()->paragraph()
           
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Chauffeur $chauffeur) {
            // Create 2 to 5 trajets for each chauffeur
            Trajet::factory()->count(random_int(2, 5))->create(['chauffeur_id' => $chauffeur->id]);
        });
    }
}
