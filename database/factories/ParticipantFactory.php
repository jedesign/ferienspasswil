<?php

namespace Database\Factories;

use App\Enums\Gender;
use App\Models\Participant;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Participant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(Gender::getConstants());
        return [
            'firstname' => $gender === 'm' ? $this->faker->firstNameMale : $this->faker->firstNameFemale,
            'lastname' => $this->faker->lastName,
            'birthdate' => $this->faker->dateTimeBetween('-15 years', '-8 years'),
            'gender' => $gender,
            'school_grade' => $this->faker->numberBetween(1, 6),
            'photos_allowed' => $this->faker->boolean,
            'note' => $this->faker->boolean ? $this->faker->sentence : null,
        ];
    }
}
