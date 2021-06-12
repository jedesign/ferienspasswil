<?php

namespace Tests\Feature\Component;

use App\Http\Livewire\Participant\Create;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ParticipantEditFormTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function firstname_is_required(): void
    {
        self::markTestSkipped();
        $user = $this->signInUserAsGuardianWithParticipant();
        // TODO[rw/mr]: zusammen anschauen... (12.06.21 rw)˚
        Livewire::test('participant.edit', $user->guardian->participants->toArray());
//            ->set($fieldName, '')
//            ->call($method)
//            ->assertHasErrors([$fieldName => 'required']);

//        FormTest::field_is_required('participant.edit', 'firstname', 'update');
    }

    /** @test */
    public function lastname_is_required(): void
    {
        self::markTestSkipped();

        $this->signInUserAsGuardian();

        FormTest::field_is_required('participant.edit', 'lastname', 'update');
    }

    /** @test */
    public function birthdate_is_required(): void
    {
        self::markTestSkipped();

        $this->signInUserAsGuardian();

        FormTest::field_is_required('participant.edit', 'birthdate', 'update');
    }

    /** @test */
    public function gender_is_required(): void
    {
        self::markTestSkipped();

        $this->signInUserAsGuardian();

        FormTest::field_is_required('participant.edit', 'gender', 'update');
    }

    /** @test */
    public function school_grade_is_required(): void
    {
        self::markTestSkipped();

        $this->signInUserAsGuardian();

        FormTest::field_is_required('participant.edit', 'school_grade', 'update');
    }

    /** @test */
    public function photos_allowed_is_optional(): void
    {
        self::markTestSkipped();

        $this->signInUserAsGuardian();

        FormTest::field_is_optional('participant.edit', 'photos_allowed', 'update');
    }

    /** @test */
    public function note_is_optional(): void
    {
        self::markTestSkipped();

        $this->signInUserAsGuardian();

        FormTest::field_is_optional('participant.edit', 'note', 'update');
    }

    /** @test */
    public function allergies_are_optional(): void
    {
        self::markTestSkipped();

        $this->signInUserAsGuardian();

        FormTest::field_is_optional('participant.edit', 'allergies', 'update');
    }

    /** @test */
    public function is_redirected_after_creating_participant(): void
    {
        self::markTestSkipped();

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
