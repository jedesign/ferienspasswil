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

}
