<?php

namespace Tests;

use App\Models\Employee;
use App\Models\Guardian;
use App\Models\Participant;
use App\Models\User;
use Database\Factories\EmployeeFactory;
use Database\Factories\GuardianFactory;
use Illuminate\Foundation\Mix;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function signInUserAsGuardianWithParticipant($guardianAttributes = [], $participantAttributes = []): User
    {
        return $this->signInUserAsGuardian(
            Guardian::factory($guardianAttributes)
                ->has(Participant::factory($participantAttributes))
        );
    }

    protected function signInUserAsGuardian(?GuardianFactory $guardian = null): User
    {
        $user = User::factory()->for(
            $guardian ?? Guardian::factory(),
            'role'
        )->create();

        $this->actingAs($user);

        return $user;
    }

    protected function signInUserAsEmployee(?EmployeeFactory $employee = null): User
    {
        $user = User::factory()->for(
            $employee ?? Employee::factory(),
            'role'
        )->create();

        $this->actingAs($user);

        return $user;
    }


    protected function setUp(): void
    {
        parent::setUp();

        // Swap out the Mix manifest implementation, so we don't need
        // to run the npm commands to generate a manifest file for
        // the assets in order to run tests that return views.
        $this->swap(Mix::class, function () {
            return '';
        });
    }
}
