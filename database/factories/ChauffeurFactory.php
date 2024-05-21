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
           'ncin' =>fake()->ean8(),
           'nom'=> fake()->word(),
           'prenom'=> fake()->word(),
           'salaire' => $this->faker->randomFloat(2, 1000, 999999), 

           'adresse' => $this->faker->address(),
           
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Chauffeur $chauffeur) {
            // Create between 2 to 5 trajets for each chauffeur
            $trajetsCount = random_int(2, 5);
            Trajet::factory()->count($trajetsCount)->create([
                'chauffeur_id' => $chauffeur->id,
            ]);
        });
    }
}
