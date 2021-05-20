<?php

namespace Tests\Feature\Story;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\HomeTest;
use Tests\TestCase;

class VisitorVisitsCoursePageTest extends TestCase
{
    use RefreshDatabase;

    /** @see HomeTest::can_view_home_page() */

    /** @test */
    public function visitor_can_access_course_page_trough_home(): void
    {
        self::markTestSkipped();
        $this->get(route('home'))->assertSee(route('course.index'));
    }

    /** @test */
    public function visitor_can_view_course_page(): void
    {
        $this->get(route('course.index'))->assertSuccessful();
    }

    /** @test */
    // TODO[rw]: 🏋️‍ (20.05.21 rw)
    public function visitor_can_view_course_overview(): void
    {
        self::markTestSkipped();
        $this->get(route('course.index'))->assertSeeLivewire();
    }

    /** @test */
    // TODO[rw]: 🏋️‍ (20.05.21 rw)
    public function visitor_can_view_weather_status_of_weather_sensitive_course(): void
    {
        self::markTestSkipped();
        $this->get(route('course.index'))->assertSee();
    }

}
