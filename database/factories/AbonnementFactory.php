<?php

namespace Database\Factories;

use App\Models\Gare;
use App\Models\Trajet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Abonnement>
 */
class AbonnementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->numerify('########'),
             'lieu' => $this->faker->city,
             'Trajet_id' => Trajet::get('id')->random(),
             'garedepart_id' => Gare::get('id')->random(),
             'garearrive_id' => Gare::get('id')->random(),
             'image' => $this->faker->imageUrl(660, 360, true),
        ];
    }
}
