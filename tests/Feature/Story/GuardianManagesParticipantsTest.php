<?php

namespace Tests\Feature\Story;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Component\ParticipantCreateFormTest;
use Tests\TestCase;

class GuardianManagesParticipantsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guardian_can_view_participants_container(): void
    {
        $this->signInUserAsGuardian();

        $this->get(route('dashboard.index'))
            ->assertSee('Your Children');
    }

    /** @test */
    public function guardian_can_view_add_participant_button(): void
    {
        $this->signInUserAsGuardian();

        $this->get(route('dashboard.index'))
            ->assertSee(route('dashboard.participant.create'));
    }

    /** @test */
    public function guardian_can_add_participant(): void
    {
        $this->assertDatabaseHas(
            'participants',
            ['id' => $this->signInUserAsGuardianWithParticipant()->guardian->participants->first()->id]
        );
    }
    /** @see ParticipantCreateFormTest */

    /** @test */
    public function guardian_can_view_participants_firstname(): void
    {
        $user = $this->signInUserAsGuardianWithParticipant();

        $this->get(route('dashboard.index'))
            ->assertSee($user->guardian->participants->first()->firstname);
    }

    /** @test */
    public function guardian_can_view_participants_lastname(): void
    {
        $user = $this->signInUserAsGuardianWithParticipant();

        $this->get(route('dashboard.index'))
            ->assertSee($user->guardian->participants->first()->lastname);
    }

    /** @test */
    public function guardian_can_view_participants_age(): void
    {
        $user = $this->signInUserAsGuardianWithParticipant();

        $this->get(route('dashboard.index'))
            ->assertSee($user->guardian->participants->first()->birthdate->age);
    }

    /** @test */
    public function guardian_can_view_participants_school_grade(): void
    {
        $user = $this->signInUserAsGuardianWithParticipant();

        $this->get(route('dashboard.index'))
            ->assertSee($user->guardian->participants->first()->school_grade);
    }

    /** @test */
    public function guardian_can_view_participants_photo_allowed_information(): void
    {
        $this->signInUserAsGuardianWithParticipant(participantAttributes: ['photos_allowed' => true]);

        $this->get(route('dashboard.index'))
            ->assertSee('Fotos erlaubt')
            ->assertDontSee('keine Fotos erlaubt');
    }

    /** @test */
    public function guardian_can_view_participants_photo_not_allowed_information(): void
    {
        $this->signInUserAsGuardianWithParticipant(participantAttributes: ['photos_allowed' => false]);

        $this->get(route('dashboard.index'))
            ->assertSee('keine Fotos erlaubt');
    }



    // TODO[rw]: edit_participant tests (30.05.21 rw)

    // TODO[rw]: delete_participant tests (30.05.21 rw)

}
