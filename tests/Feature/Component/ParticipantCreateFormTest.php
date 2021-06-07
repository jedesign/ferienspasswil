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

        Livewire::test('participant.create')
            ->set('firstname', '')
            ->call('save')
            ->assertHasErrors(['firstname' => 'required']);
    }

    /** @test */
    public function lastname_is_required(): void
    {
        $this->signInUserAsGuardian();

        Livewire::test('participant.create')
            ->set('lastname', '')
            ->call('save')
            ->assertHasErrors(['lastname' => 'required']);
    }

    /** @test */
    public function birthdate_is_required(): void
    {
        $this->signInUserAsGuardian();

        Livewire::test('participant.create')
            ->set('birthdate', '')
            ->call('save')
            ->assertHasErrors(['birthdate' => 'required']);
    }

    /** @test */
    public function gender_is_required(): void
    {
        $this->signInUserAsGuardian();

        Livewire::test('participant.create')
            ->set('gender', '')
            ->call('save')
            ->assertHasErrors(['gender' => 'required']);
    }

    /** @test */
    public function school_grade_is_required(): void
    {
        $this->signInUserAsGuardian();

        Livewire::test('participant.create')
            ->set('school_grade', '')
            ->call('save')
            ->assertHasErrors(['school_grade' => 'required']);
    }

    /** @test */
    public function photos_allowed_is_optional(): void
    {
        $this->signInUserAsGuardian();

        Livewire::test('participant.create')
            ->set('photos_allowed', false)
            ->call('save')
            ->assertHasNoErrors(['photos_allowed' => 'required']);
    }

    /** @test */
    public function note_is_optional(): void
    {
        $this->signInUserAsGuardian();

        Livewire::test('participant.create')
            ->set('note', '')
            ->call('save')
            ->assertHasNoErrors(['note' => 'required']);
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
