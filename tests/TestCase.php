<?php

namespace Tests;

use App\Models\Guardian;
use App\Models\User;
use Illuminate\Foundation\Mix;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function signInGuardian(): TestCase
    {
        return $this->actingAs(User::factory()->for(
            Guardian::factory(), 'role'
        )->create());
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
