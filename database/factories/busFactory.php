<?php

namespace Database\Factories;
use App\Models\Bus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\bus>
 */
class busFactory extends Factory
{
    protected $model = Bus::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'matricule' => $this->faker->unique()->randomNumber(6),
            'model' => $this->faker->word(),
            'line' => $this->faker->word(),
            'etat' => $this->faker->boolean(),
         
        ];
    }
}
