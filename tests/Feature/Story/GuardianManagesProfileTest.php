<?php

namespace Tests\Feature\Story;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GuardianManagesProfileTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guardian_can_view_her_firstname(): void
    {
        $user = $this->signInUserAsGuardian();

        $this->get(route('dashboard.index'))
            ->assertSee($user->guardian->firstname);
    }

    /** @test */
    public function guardian_can_view_his_lastname(): void
    {
        $user = $this->signInUserAsGuardian();

        $this->get(route('dashboard.index'))
            ->assertSee($user->guardian->lastname);
    }

    /** @test */
    public function guardian_can_view_her_street_and_number(): void
    {
        $user = $this->signInUserAsGuardian();

        $this->get(route('dashboard.index'))
            ->assertSee($user->guardian->streetAndNumber());
    }

    /** @test */
    public function guardian_can_view_his_postcode_and_city(): void
    {
        $user = $this->signInUserAsGuardian();

        $this->get(route('dashboard.index'))
            ->assertSee($user->guardian->postcodeAndCity());
    }

    /** @test */
    public function guardian_can_view_her_phone(): void
    {
        $user = $this->signInUserAsGuardian();

        $this->get(route('dashboard.index'))
            ->assertSee($user->guardian->phone);
    }

    /** @test */
    public function guardian_can_view_his_email(): void
    {
        $user = $this->signInUserAsGuardian();

        $this->get(route('dashboard.index'))
            ->assertSee($user->guardian->email);
    }

    /** @test */
    public function guardian_can_view_profile_edit_route(): void
    {
        $user = $this->signInUserAsGuardian();

        $this->get(route('dashboard.index'))
            ->assertSee(route('dashboard.profile'));
    }

    /** @test */
    public function guardian_can_edit_her_profile(): void
    {
        $user = $this->signInUserAsGuardian();

        $this->get(route('dashboard.profile'))
            ->assertSeeLivewire('guardian.edit');

        $user->update(['firstname' => 'Newish']);
        $this->assertDatabaseHas(
            'users',
            ['firstname' => 'Newish']
        );

        $user->guardian->update(['street' => 'another street']);
        $this->assertDatabaseHas(
            'guardians',
            ['street' => 'another street']
        );
    }
    /** @see GuardianProfileFormTest */
}
