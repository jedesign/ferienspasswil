<?php

namespace Database\Factories;

use App\Models\Guardian;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuardianFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Guardian::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'street' => $this->faker->streetName,
            'street_number' => $this->faker->buildingNumber,
            'postcode' => $this->faker->postcode,
            'city' => $this->faker->city,
            'social_service' => $this->faker->boolean,
        ];
    }
}
