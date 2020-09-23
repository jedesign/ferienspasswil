<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Guardian;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $roles = [
            Guardian::class,
            Employee::class
        ];

        $roleType = $this->faker->randomElement($roles);
        $role = $roleType::factory()->create();

        return [
            'firstname' => $this->faker->name,
            'lastname' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
            'phone' => $this->faker->phoneNumber,
            'role_type' => $roleType,
            'role_id' => $role->id
        ];
    }
}
