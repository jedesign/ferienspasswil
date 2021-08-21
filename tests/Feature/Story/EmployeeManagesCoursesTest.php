<?php

namespace Tests\Feature\Story;

use App\Models\Course;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmployeeManagesCoursesTest extends TestCase
{
    use RefreshDatabase;

    /** @see EmployeeLogsInTest */

    /** @test */
    public function employee_can_see_navigation_item_for_managing_courses(): void
    {
        $this->signInUserAsEmployee();

        $this->get(route('admin.index'))
            ->assertSee(route('admin.courses'));
    }

    /** @test */
    public function employee_can_see_course_creating_route(): void
    {
        $this->signInUserAsEmployee();

        $this->get(route('admin.courses'))
            ->assertSee(route('admin.course.create'));
    }


    /** @test */
    public function employee_can_see_course_creation_page(): void
    {
        $this->signInUserAsEmployee();

        $this->get(route('admin.course.create'))
            ->assertOk();
    }

    /** @test */
    public function employee_can_create_a_course(): void
    {
        $this->signInUserAsEmployee();

        $course = Course::factory()->create();

        $this->assertDatabaseHas(
            'courses',
            ['id' => $course->id]
        );
    }
    /** @see CourseCreateFormTest */

    /** @test */
    public function employee_can_see_courses_titles(): void
    {
        $this->signInUserAsEmployee();

        $course = Course::factory()->create();

        $this->get(route('admin.courses'))
            ->assertSee($course->title);
    }

    /** @test */
    public function employee_can_see_courses_beginning(): void
    {
        $this->signInUserAsEmployee();

        $course = Course::factory()->create();

        $this->get(route('admin.courses'))
            ->assertSee($course->beginning);
    }

    /** @test */
    public function employee_can_see_courses_ends(): void
    {
        $this->signInUserAsEmployee();

        $course = Course::factory()->create();

        $this->get(route('admin.courses'))
            ->assertSee($course->end);
    }

    /** @test */
    public function employee_can_see_courses_states(): void
    {
        $this->signInUserAsEmployee();

        $course = Course::factory()->create();

        $this->get(route('admin.courses'))
            ->assertSee($course->state);
    }

    /** @test */
    public function employee_can_see_course_edit_route(): void
    {
        $this->signInUserAsEmployee();

        $course = Course::factory()->create();

        $this->get(route('admin.courses'))
            ->assertSee($course->path());
    }

}
