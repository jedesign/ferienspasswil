<?php

namespace Tests\Feature\Component;

use App\Http\Livewire\Participant\Create;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ParticipantCreateFormTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function firstname_is_required(): void
    {
        $this->signInUserAsGuardian();

        FormTest::field_is_required('participant.create', [], 'firstname', 'save');
    }

    /** @test */
    public function lastname_is_required(): void
    {
        $this->signInUserAsGuardian();

        FormTest::field_is_required('participant.create', [], 'lastname', 'save');
    }

    /** @test */
    public function birthdate_is_required(): void
    {
        $this->signInUserAsGuardian();

        FormTest::field_is_required('participant.create', [], 'birthdate', 'save');
    }

    /** @test */
    public function gender_is_required(): void
    {
        $this->signInUserAsGuardian();

        FormTest::field_is_required('participant.create', [], 'gender', 'save');
    }

    /** @test */
    public function school_grade_is_required(): void
    {
        $this->signInUserAsGuardian();

        FormTest::field_is_required('participant.create', [], 'school_grade', 'save');
    }

    /** @test */
    public function photos_allowed_is_optional(): void
    {
        $this->signInUserAsGuardian();

        FormTest::field_is_optional('participant.create', [], 'photos_allowed', 'save');
    }

    /** @test */
    public function note_is_optional(): void
    {
        $this->signInUserAsGuardian();

        FormTest::field_is_optional('participant.create', [], 'note', 'save');
    }

    /** @test */
    public function allergies_are_optional(): void
    {
        $this->signInUserAsGuardian();

        Livewire::test('participant.create')
            ->set('allergies', [])
            ->call('save')
            ->assertHasNoErrors(['allergies' => 'required']);
    }

    /** @test */
    public function is_redirected_after_creating_participant(): void
    {
        $this->signInUserAsGuardian();

        Livewire::test(Create::class)
            ->set('firstname', 'Karl')
            ->set('lastname', 'Handzahm')
            ->set('birthdate', '2000-01-01')
            ->set('gender', 'm')
            ->set('school_grade', 3)
            ->set('photos_allowed', false)
            ->set('note', 'Himenaeos amet vehicula phasellus primis habitant pharetra')
            ->set('allergies', [])
            ->call('save')
            ->assertRedirect(route('dashboard.index'));
    }

}
