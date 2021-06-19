<?php

namespace Tests\Unit;

use App\Enums\CourseState;
use App\Enums\DaySpan;
use App\Enums\GradeGroup;
use App\Models\Allergy;
use App\Models\Course;
use App\Models\Participant;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class CourseTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_an_id(): void
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertIsInt($course->id);
    }

    /** @test */
    public function it_has_an_title(): void
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertIsString($course->title);
    }

    /** @test */
    public function it_has_a_slug(): void
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertIsString($course->slug);
    }

    /** @test */
    public function it_has_an_description(): void
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertIsString($course->description);
    }

    /** @test */
    public function it_has_a_state(): void
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertContains($course->state, CourseState::getConstants());
    }

    /** @test */
    public function it_can_have_a_state_message(): void
    {
        /** @var Course $course */
        $course = Course::factory(['state_message' => null])->create();
        $this->assertNull($course->state_message);

        $course = Course::factory(['state_message' => 'Corona'])->create();
        $this->assertIsString($course->state_message);
    }

    /** @test */
    public function it_has_a_beginning(): void
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertInstanceOf(Carbon::class, $course->beginning);
    }

    /** @test */
    public function it_has_a_end(): void
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertInstanceOf(Carbon::class, $course->end);
    }

    /** @test */
    public function it_has_a_day_span(): void
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        self::assertContains($course->day_span, DaySpan::getConstants());
    }

    /** @test */
    public function it_has_min_participants(): void
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertIsInt($course->min_participants);
    }

    /** @test */
    public function it_has_max_participants(): void
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertIsInt($course->max_participants);
    }

    /** @test */
    public function it_has_a_grade_group(): void
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertContains($course->grade_group, GradeGroup::getConstants());

        $exceptionThrown = false;

        try {
            Course::factory(['grade_group' => 'non-existing-value'])->create();
        } catch (QueryException $exception) {
            $exceptionThrown = true;
            $this->assertStringContainsString('Integrity constraint violation', $exception->getMessage());
        }
        $this->assertTrue($exceptionThrown);
    }

    /** @test */
    public function it_has_a_meeting_point(): void
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertIsString($course->meeting_point);
    }

    /** @test */
    public function it_can_have_clothes(): void
    {
        /** @var Course $course */
        $course = Course::factory(['clothes' => null])->create();
        $this->assertNull($course->clothes);

        $course = Course::factory(['clothes' => 'Wanderschuhe'])->create();
        $this->assertIsString($course->clothes);
    }

    /** @test */
    public function it_can_have_bring_alongs(): void
    {
        /** @var Course $course */
        $course = Course::factory(['bring_alongs' => null])->create();
        $this->assertNull($course->bring_alongs);

        $course = Course::factory(['bring_alongs' => 'Schutzmaske'])->create();
        $this->assertIsString($course->bring_alongs);
    }

    /** @test */
    public function it_has_a_price(): void
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertIsFloat($course->price);
    }

    /** @test */
    public function it_belongs_to_allergies(): void
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertCount(0, $course->allergies);

        $course->allergies()->save(Allergy::factory()->create());
        $course->load('allergies');
        $this->assertCount(1, $course->allergies);
    }

    /** @test */
    public function it_belongs_to_participants(): void
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertCount(0, $course->participants);

        $course->participants()->save(Participant::factory()->create());
        $course->load('participants');
        $this->assertCount(1, $course->participants);
    }
}
