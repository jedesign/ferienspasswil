<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Participant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AllergySeeder::class,
            CourseSeeder::class,
            GuardianParticipantSeeder::class,
        ]);
        Employee::factory()->times(20)->create();
    }
}
