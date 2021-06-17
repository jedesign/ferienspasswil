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
        $this->signInUserAsGuardian();

        $this->get(route('dashboard.index'))
            ->assertSee('Your Children');
    }

    /** @test */
    public function guardian_can_view_participant_add_route(): void
    {
        $this->signInUserAsGuardian();

        $this->get(route('dashboard.index'))
            ->assertSee(route('dashboard.participant.create'));
    }

    /** @test */
    public function guardian_can_create_participant(): void
    {
        $user = $this->signInUserAsGuardianWithParticipant();

        $this->assertDatabaseHas(
            'participants',
            ['id' => $user->guardian->participants->first()->id]
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

    /** @test */
    public function guardian_cannot_view_participant_of_other_guardian(): void
    {
        $this->signInUserAsGuardian();

        $participant = Participant::factory()->create();

        $this->get(route('dashboard.index'))
            ->assertDontSee($participant->path());
    }

    /** @test */
    public function guardian_can_view_participant_edit_route(): void
    {
        $user = $this->signInUserAsGuardianWithParticipant();

        $this->get(route('dashboard.index'))
            ->assertSee($user->guardian->participants->first()->path());
    }

    /** @test */
    public function guardian_can_edit_participant(): void
    {
        $this->withoutExceptionHandling();

        $user = $this->signInUserAsGuardianWithParticipant();

        $this->get($user->guardian->participants->first()->path())
            ->assertSeeLivewire('participant.edit');

        $user->guardian->participants->first()->update(['firstname' => 'Newish']);

        $this->assertDatabaseHas(
            'participants',
            ['firstname' => 'Newish']
        );
    }
    /** @see ParticipantEditFormTest */

    /** @test */
    public function guardian_cannot_edit_participant_of_other_guardian(): void
    {
        $this->signInUserAsGuardian();

        $participant = Participant::factory()->create();

        $this->get($participant->path())
            ->assertStatus(403);
    }

    /** @test */
    public function guardian_can_view_participant_delete_route(): void
    {
        $user = $this->signInUserAsGuardianWithParticipant();

        $this->get(route('dashboard.index'))
            ->assertSee($user->guardian->participants->first()->path());
    }

    /** @test */
    public function guardian_can_delete_participant(): void
    {
        $user = $this->signInUserAsGuardianWithParticipant();
        $participant = $user->guardian->participants->first();

        $this->delete($participant->deletePath())
            ->assertRedirect(route('dashboard.index'));

        $this->assertDatabaseMissing(
            'participants',
            ['id' => $participant->id]
        );
    }

    /** @test */
    public function guardian_cannot_delete_participant_of_other_guardian(): void
    {
        $this->signInUserAsGuardian();

        $participant = Participant::factory()->create();

        $this->delete($participant->deletePath())
            ->assertStatus(403);
    }
}
