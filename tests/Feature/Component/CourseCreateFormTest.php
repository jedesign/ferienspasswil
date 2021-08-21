<?php

namespace Tests\Feature\Component;

use App\Enums\CourseState;
use App\Http\Livewire\Course\Create;
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

        FormTest::field_is_required_string('course.create', [], 'title', 'save');
    }

    /** @test */
    public function description_is_required(): void
    {
        $this->signInUserAsEmployee();

        FormTest::field_is_required_string('course.create', [], 'description', 'save');
    }

    /** @test */
    public function state_is_required(): void
    {
        $this->signInUserAsEmployee();

        FormTest::field_is_required_string('course.create', [], 'state', 'save');
    }

    /** @test */
    public function beginning_date_is_required(): void
    {
        $this->signInUserAsEmployee();

        FormTest::field_is_required_string('course.create', [], 'beginning_date', 'save');
    }

    /** @test */
    public function beginning_time_is_required(): void
    {
        $this->signInUserAsEmployee();

        FormTest::field_is_required_string('course.create', [], 'beginning_time', 'save');
    }

    /** @test */
    public function end_date_is_required(): void
    {
        $this->signInUserAsEmployee();

        FormTest::field_is_required_string('course.create', [], 'end_date', 'save');
    }

    /** @test */
    public function end_time_is_required(): void
    {
        $this->signInUserAsEmployee();

        FormTest::field_is_required_string('course.create', [], 'end_time', 'save');
    }

    /** @test */
    public function min_participants_are_greater_than_zero(): void
    {
        $this->signInUserAsEmployee();

        FormTest::field_is_greater_than_zero('course.create', [], 'min_participants', 'save');
    }

    /** @test */
    public function max_participants_are_greater_than_min_participants(): void
    {
        $this->signInUserAsEmployee();

        FormTest::field_is_greater_than_zero('course.create', [], 'max_participants', 'save');
    }

    /** @test */
    public function grade_group_is_required(): void
    {
        $this->signInUserAsEmployee();

        FormTest::field_is_required_string('course.create', [], 'grade_group', 'save');
    }

    /** @test */
    public function meeting_point_is_required(): void
    {
        $this->signInUserAsEmployee();

        FormTest::field_is_required_string('course.create', [], 'meeting_point', 'save');
    }

    /** @test */
    public function clothes_are_optional(): void
    {
        $this->signInUserAsEmployee();

        FormTest::field_is_optional_string('course.create', [], 'clothes', 'save');
    }

    /** @test */
    public function bring_alongs_are_optional(): void
    {
        $this->signInUserAsEmployee();

        FormTest::field_is_optional_string('course.create', [], 'bring_alongs', 'save');
    }

    /** @test */
    public function price_is_optional(): void
    {
        $this->signInUserAsEmployee();

        FormTest::field_is_optional_number('course.create', [], 'price', 'save');
    }

    /** @test */
    public function is_redirected_after_creating_course(): void
    {
        $this->signInUserAsEmployee();

        Livewire::test(Create::class)
            ->set('title', 'Einhönrer reiten')
            ->set('description', 'Das hast du noch nie gemacht.')
            ->set('state', CourseState::CANCELED)
            ->set('beginning_date', '2021-07-19')
            ->set('beginning_time', '09:00')
            ->set('end_date', '2021-07-19')
            ->set('end_time', '12:00')
            ->set('min_participants', 4)
            ->set('max_participants', 20)
            ->set('grade_group', 'intermediate')
            ->set('meeting_point', 'Jugendzentrum Obere Mühle')
            ->set('clothes', '')
            ->set('bring_alongs', '')
            ->set('price', 0)
            ->call('save')
            ->assertRedirect(route('admin.courses'));
    }

}
