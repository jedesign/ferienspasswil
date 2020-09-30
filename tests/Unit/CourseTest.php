<?php

namespace Tests\Unit;

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
    public function it_has_an_id()
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertIsInt($course->id);
    }

    /** @test */
    public function it_has_an_title()
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertIsString($course->title);
    }

    /** @test */
    public function it_has_an_description()
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertIsString($course->description);
    }

    /** @test */
    public function it_can_be_canceled_due_to_weather()
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertIsBool($course->canceled_due_to_weather);
    }

    /** @test */
    public function it_can_be_canceled_due_to_min_participants()
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertIsBool($course->canceled_due_to_min_participants);
    }

    /** @test */
    public function it_can_be_canceled_due_to_other_reason()
    {
        /** @var Course $course */
        $course = Course::factory(['canceled_due_to_other_reason' => null])->create();
        $this->assertNull($course->canceled_due_to_other_reason);

        $course = Course::factory(['canceled_due_to_other_reason' => 'Corona'])->create();
        $this->assertIsString($course->canceled_due_to_other_reason);
    }

    /** @test */
    public function it_has_a_beginning()
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertInstanceOf(Carbon::class, $course->beginning);
    }

    /** @test */
    public function it_has_a_end()
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertInstanceOf(Carbon::class, $course->end);
    }

    /** @test */
    public function it_has_min_participants()
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertIsInt($course->min_participants);
    }

    /** @test */
    public function it_has_max_participants()
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertIsInt($course->max_participants);
    }

    /** @test */
    public function it_can_be_weather_sensitive()
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertIsBool($course->weather_sensitive);
    }

    /** @test */
    public function it_has_a_grade_group()
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertTrue(in_array($course->grade_group, GradeGroup::getConstants()));

        try {
            Course::factory(['grade_group' => 'non-existing-value'])->create();
        } catch (QueryException $exception) {
            $this->assertStringContainsString('Integrity constraint violation', $exception->getMessage());
        }
    }

    /** @test */
    public function it_has_a_meeting_point()
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertIsString($course->meeting_point);
    }

    /** @test */
    public function it_can_require_clothes()
    {
        /** @var Course $course */
        $course = Course::factory(['clothes' => null])->create();
        $this->assertNull($course->clothes);

        $course = Course::factory(['clothes' => 'Wanderschuhe'])->create();
        $this->assertIsString($course->clothes);
    }

    /** @test */
    public function it_can_require_bring_alongs()
    {
        /** @var Course $course */
        $course = Course::factory(['bring_alongs' => null])->create();
        $this->assertNull($course->bring_alongs);

        $course = Course::factory(['bring_alongs' => 'Schutzmaske'])->create();
        $this->assertIsString($course->bring_alongs);
    }

    /** @test */
    public function it_has_a_price()
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertIsFloat($course->price);
    }

    /** @test */
    public function it_belongs_to_allergies()
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertCount(0, $course->allergies);

        $course->allergies()->save(Allergy::factory()->create());
        $course->load('allergies');
        $this->assertCount(1, $course->allergies);
    }

    /** @test */
    public function it_belongs_to_participants()
    {
        /** @var Course $course */
        $course = Course::factory()->create();
        $this->assertCount(0, $course->participants);

        $course->participants()->save(Participant::factory()->create());
        $course->load('participants');
        $this->assertCount(1, $course->participants);
    }
}
