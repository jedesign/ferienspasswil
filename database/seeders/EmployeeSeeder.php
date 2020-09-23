<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'public_transport_subscription' => 'GA'
        ])->user()->create([
            'firstname' => 'Peter',
            'lastname' => 'Meter',
            'email' => 'peter.meter@test.ch',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
            'phone' => '071 123 45 67'
        ]);
    }
}
