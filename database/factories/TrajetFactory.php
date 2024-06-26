<?php

namespace Database\Factories;
use App\Models\Chauffeur;
use App\Models\Trajet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trajet>
 */
class TrajetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trajet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $chauffeurIds = Chauffeur::pluck('id');
        
        return [
            'departure' => $this->faker->city,
            'destination' => $this->faker->city,
            'departure_time' => $this->faker->dateTimeBetween('now', '+1 week'),
            'arrival_time' => $this->faker->dateTimeBetween('+1 week', '+2 weeks'),
            'chauffeur_id' => Chauffeur::get('id')->random(),
            
        ];
    }

    protected $casts = [
        'departure_time' => 'datetime',
        'arrival_time' => 'datetime',
    ];
}
