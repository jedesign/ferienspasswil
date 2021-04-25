<?php

namespace Database\Factories;

use App\Enums\CourseState;
use App\Enums\GradeGroup;
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
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph(),
            'state' => $this->faker->randomElement(CourseState::getConstants()),
            'state_message' => $this->faker->boolean ? $this->faker->words(3, true) : null,
            'beginning' => $this->faker->dateTimeThisMonth->format('Y-m-d H:i:s'),
            'end' => $this->faker->dateTimeThisMonth->format('Y-m-d H:i:s'),
            'min_participants' => $minParticipants,
            'max_participants' => $this->faker->numberBetween($minParticipants + 1, 15),
            'grade_group' => $this->faker->randomElement(GradeGroup::getConstants()),
            'meeting_point' => $this->faker->address,
            'clothes' => $this->faker->boolean ? $this->faker->words(3, true) : null,
            'bring_alongs' => $this->faker->boolean ? $this->faker->words(3, true) : null,
            'price' => $this->faker->randomFloat(null, 0, 10)
        ];
    }
}
