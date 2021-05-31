<?php

namespace Tests\Feature\Story;

use App\Models\Participant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Component\ParticipantCreateFormTest;
use Tests\TestCase;

class GuardianManagesParticipantsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guardian_can_view_participants_container(): void
    {
        $this->signInGuardian();

        $this->get(route('dashboard.index'))
            ->assertSee('Your Children');
    }

    /** @test */
    public function guardian_can_view_add_participant_button(): void
    {
        $this->signInGuardian();

        $this->get(route('dashboard.index'))
            ->assertSee(route('dashboard.participant.create'));
    }

    /** @test */
    public function guardian_can_add_participant(): void
    {
        $this->signInGuardian();
        $participant = $this->guardian_creates_participant();

        $this->assertDatabaseHas('participants', ['id' => $participant->id]);
    }

    /** @see ParticipantCreateFormTest */

    private function guardian_creates_participant(array $attributes = []): Participant
    {
        $participant = Participant::factory()->create($attributes);
        $participant->guardians()->attach(auth()->user()->guardian->id);
        return $participant;
    }

    /** @test */
    public function guardian_can_view_participants_firstname(): void
    {
        $this->signInGuardian();
        $participant = $this->guardian_creates_participant();

        $this->get(route('dashboard.index'))
            ->assertSee($participant->firstname);
    }

    /** @test */
    public function guardian_can_view_participants_lastname(): void
    {
        $this->signInGuardian();
        $participant = $this->guardian_creates_participant();

        $this->get(route('dashboard.index'))
            ->assertSee($participant->lastname);
    }

    /** @test */
    public function guardian_can_view_participants_age(): void
    {
        $this->signInGuardian();
        $participant = $this->guardian_creates_participant();

        $this->get(route('dashboard.index'))
            ->assertSee($participant->birthdate->age);
    }

    /** @test */
    public function guardian_can_view_participants_school_grade(): void
    {
        $this->signInGuardian();
        $participant = $this->guardian_creates_participant();

        $this->get(route('dashboard.index'))
            ->assertSee($participant->school_grade);
    }

    /** @test */
    public function guardian_can_view_participants_photo_allowed_information(): void
    {
        $this->signInGuardian();
        $this->guardian_creates_participant(['photos_allowed' => true]);

        $this->get(route('dashboard.index'))
            ->assertSee('Fotos erlaubt')
            ->assertDontSee('keine Fotos erlaubt');
    }

    /** @test */
    public function guardian_can_view_participants_photo_not_allowed_information(): void
    {
        $this->signInGuardian();
        $this->guardian_creates_participant(['photos_allowed' => false]);

        $this->get(route('dashboard.index'))
            ->assertSee('keine Fotos erlaubt');
    }

    // TODO[rw]: edit_participant tests (30.05.21 rw)

    // TODO[rw]: delete_participant tests (30.05.21 rw)

}
