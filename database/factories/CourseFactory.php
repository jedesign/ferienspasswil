<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $minParticipants = $this->faker->numberBetween(1, 5);
        $weatherSensitive = $this->faker->boolean;
        return [
            'title' => $this->faker->sentence(4),
            'title_short' => $this->faker->sentence(2),
            'description' => $this->faker->paragraph(),
            'active' => $this->faker->boolean,
            'beginning' => $this->faker->dateTimeThisMonth->format('Y-m-d H:i:s'),
            'end' => $this->faker->dateTimeThisMonth->format('Y-m-d H:i:s'),
            'min_participants' => $minParticipants,
            'max_participants' => $this->faker->numberBetween($minParticipants + 1, 15),
            'weather_sensitive' => $weatherSensitive,
            'canceled_due_to_weather' => $weatherSensitive ? $this->faker->boolean : false,
            'grade_group' => $this->faker->randomElement(['all', 'lower', 'intermediate']),
            'meeting_point' => $this->faker->address,
            'clothes' => $this->faker->boolean ? $this->faker->words(3, true) : null,
            'bring_alongs' => $this->faker->boolean ? $this->faker->words(3, true) : null,
            'price' => $this->faker->randomFloat(null, 0, 10)
        ];
    }
}
