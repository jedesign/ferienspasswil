<?php

namespace Tests\Feature\Component;

use App\Http\Livewire\Participant\Edit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ParticipantEditFormTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function firstname_is_required(): void
    {
        $user = $this->signInUserAsGuardianWithParticipant();

        FormTest::field_is_required(
            'participant.edit',
            ['participant' => $user->guardian->participants->first()],

            'firstname',
            'update');
    }

    /** @test */
    public function lastname_is_required(): void
    {
        $user = $this->signInUserAsGuardianWithParticipant();

        FormTest::field_is_required(
            'participant.edit',
            ['participant' => $user->guardian->participants->first()],
            'lastname',
            'update'
        );
    }

    /** @test */
    public function birthdate_is_required(): void
    {
        $user = $this->signInUserAsGuardianWithParticipant();

        FormTest::field_is_required(
            'participant.edit',
            ['participant' => $user->guardian->participants->first()],
            'birthdate',
            'update'
        );
    }

    /** @test */
    public function gender_is_required(): void
    {
        $user = $this->signInUserAsGuardianWithParticipant();

        FormTest::field_is_required(
            'participant.edit',
            ['participant' => $user->guardian->participants->first()],
            'gender',
            'update'
        );
    }

    /** @test */
    public function school_grade_is_required(): void
    {
        $user = $this->signInUserAsGuardianWithParticipant();

        FormTest::field_is_required(
            'participant.edit',
            ['participant' => $user->guardian->participants->first()],
            'school_grade',
            'update'
        );
    }

    /** @test */
    public function photos_allowed_is_optional(): void
    {
        $user = $this->signInUserAsGuardianWithParticipant();

        FormTest::field_is_optional(
            'participant.edit',
            ['participant' => $user->guardian->participants->first()],
            'photos_allowed',
            'update'
        );
    }

    /** @test */
    public function note_is_optional(): void
    {
        $user = $this->signInUserAsGuardianWithParticipant();

        FormTest::field_is_optional(
            'participant.edit',
            ['participant' => $user->guardian->participants->first()],
            'note',
            'update'
        );
    }

    /** @test */
    public function allergies_are_optional(): void
    {
        $user = $this->signInUserAsGuardianWithParticipant();

        Livewire::test('participant.edit', ['participant' => $user->guardian->participants->first()])
            ->set('allergies', [])
            ->call('update')
            ->assertHasNoErrors(['allergies' => 'required']);
    }

    /** @test */
    public function is_redirected_after_editing_participant(): void
    {
        $user = $this->signInUserAsGuardianWithParticipant();

        Livewire::test(Edit::class, ['participant' => $user->guardian->participants->first()])
            ->set('firstname', 'Karl')
            ->set('lastname', 'Handzahm')
            ->set('birthdate', '2000-01-01')
            ->set('gender', 'm')
            ->set('school_grade', 3)
            ->set('photos_allowed', false)
            ->set('note', 'Himenaeos amet vehicula phasellus primis habitant pharetra')
            ->set('allergies', [])
            ->call('update')
            ->assertRedirect(route('dashboard.index'));
    }

}
