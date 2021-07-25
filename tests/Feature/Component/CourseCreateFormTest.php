<?php

namespace Tests\Feature\Component;

use App\Http\Livewire\Participant\Create;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class CourseCreateFormTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function title_is_required(): void
    {
        $this->signInUserAsEmployee();

        FormTest::field_is_required('course.create', [], 'title', 'save');
    }

    /** @test */
    public function description_is_required(): void
    {
        $this->signInUserAsEmployee();

        FormTest::field_is_required('course.create', [], 'description', 'save');
    }

    /** @test */
    public function beginning_is_required(): void
    {
        $this->signInUserAsEmployee();

        FormTest::field_is_required('course.create', [], 'beginning', 'save');
    }

    /** @test */
    public function end_is_required(): void
    {
        $this->signInUserAsEmployee();

        FormTest::field_is_required('course.create', [], 'end', 'save');
    }

    /** @test */
    public function min_participant_is_required(): void
    {
        $this->markTestSkipped();
        $this->signInUserAsEmployee();
        // TODO[rw]: test not zero, test required number (25.07.21 rw)
    }

    /** @test */
    public function max_participant_is_required(): void
    {
        $this->markTestSkipped();
        $this->signInUserAsEmployee();
        // TODO[rw]: test not zero, test required number (25.07.21 rw)
    }

    /** @test */
    public function grade_group_is_required(): void
    {
        $this->signInUserAsEmployee();

        FormTest::field_is_required('course.create', [], 'grade_group', 'save');
    }

    // TODO[rw]: add other fields (25.07.21 rw)

//    /** @test */
//    public function is_redirected_after_creating_participant(): void
//    {
//        $this->signInUserAsGuardian();
//
//        Livewire::test(Create::class)
//            ->set('firstname', 'Karl')
//            ->set('lastname', 'Handzahm')
//            ->set('birthdate', '2000-01-01')
//            ->set('gender', 'm')
//            ->set('school_grade', 3)
//            ->set('photos_allowed', false)
//            ->set('note', 'Himenaeos amet vehicula phasellus primis habitant pharetra')
//            ->set('allergies', [])
//            ->call('save')
//            ->assertRedirect(route('dashboard.index'));
//    }

}
