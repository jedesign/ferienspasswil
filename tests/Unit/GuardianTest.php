<?php

namespace Tests\Unit;

use App\Models\Guardian;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GuardianTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_an_id(): void
    {
        /** @var Guardian $guardian */
        $guardian = Guardian::factory()->create();
        $this->assertIsInt($guardian->id);
    }

    /** @test */
    public function it_has_a_street(): void
    {
        /** @var Guardian $guardian */
        $guardian = Guardian::factory()->create();
        $this->assertIsString($guardian->street);
    }

    /** @test */
    public function it_can_have_a_street_number(): void
    {
        /** @var Guardian $guardian */
        $guardian = Guardian::factory(['street_number' => null])->create();
        $this->assertNull($guardian->street_number);

        $guardian = Guardian::factory()->create();
        $this->assertIsString($guardian->street_number);
    }

    /** @test */
    public function it_has_a_postcode(): void
    {
        /** @var Guardian $guardian */
        $guardian = Guardian::factory()->create();
        $this->assertIsInt($guardian->postcode);
    }

    /** @test */
    public function it_has_a_city(): void
    {
        /** @var Guardian $guardian */
        $guardian = Guardian::factory()->create();
        $this->assertIsString($guardian->city);
    }

    /** @test */
    public function it_can_be_social_service(): void
    {
        /** @var Guardian $guardian */
        $guardian = Guardian::factory()->create();
        $this->assertIsBool($guardian->social_service);
    }

    /** @test */
    public function it_belongs_to_a_user(): void
    {
        /** @var Guardian $guardian */
        $guardian = Guardian::factory()->has(User::factory())->create();

        $this->assertInstanceOf(User::class, $guardian->user);
    }
}
