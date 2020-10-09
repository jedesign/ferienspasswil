<?php

namespace Database\Seeders;

use App\Models\Guardian;
use App\Models\Participant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GuardianParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guardian = Guardian::create([
            'street' => 'Erlenbachstrasse',
            'street_number' => '12',
            'postcode' => '9500',
            'city' => 'Wil',
            'sja' => false
        ]);
        $guardian->user()->create([
            'firstname' => 'Fritz',
            'lastname' => 'Vetter-Frittenfett',
            'email' => 'fritz.vetter-frittenfett@test.ch',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
            'phone' => '071 123 45 67'
        ]);
        $guardian->participants()->createMany([
            Participant::factory()->raw(['lastname' => $guardian->user->lastname]),
            Participant::factory()->raw(['lastname' => $guardian->user->lastname]),
            Participant::factory()->raw(['lastname' => $guardian->user->lastname]),
            Participant::factory()->raw(['lastname' => $guardian->user->lastname]),
        ]);
        $guardian = Guardian::create([
            'street' => 'Bünzlistrasse',
            'street_number' => '123',
            'postcode' => '9552',
            'city' => 'Bronschhofen',
            'sja' => true
        ]);
        $guardian->user()->create([
            'firstname' => 'Ron',
            'lastname' => 'Weasley',
            'email' => 'ron.weasley@test.ch',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
            'phone' => '071 123 45 69'
        ]);
        $guardian->participants()->createMany([
            Participant::factory()->raw(),
            Participant::factory()->raw(),
            Participant::factory()->raw(),
            Participant::factory()->raw(),
        ]);
    }
}
