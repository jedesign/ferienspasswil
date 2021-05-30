<?php

namespace Tests\Unit;

use App\Enums\Gender;
use App\Models\Allergy;
use App\Models\Course;
use App\Models\Guardian;
use App\Models\Participant;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class ParticipantTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_an_id(): void
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        self::assertIsInt($participant->id);
    }

    /** @test */
    public function it_has_a_firstname(): void
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        self::assertIsString($participant->firstname);
    }

    /** @test */
    public function it_has_a_lastname(): void
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        self::assertIsString($participant->lastname);
    }

    /** @test */
    public function it_has_a_birthdate(): void
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        self::assertInstanceOf(Carbon::class, $participant->birthdate);
    }

    /** @test */
    public function it_has_a_gender(): void
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        self::assertContains($participant->gender, Gender::getConstants());

        $exceptionThrown = false;

        try {
            Participant::factory(['gender' => 'non-existing-value'])->create();
        } catch (QueryException $exception) {
            $exceptionThrown = true;
            self::assertStringContainsString('Integrity constraint violation', $exception->getMessage());
        }
        self::assertTrue($exceptionThrown);
    }

    /** @test */
    public function it_has_a_school_grade(): void
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        self::assertIsInt($participant->school_grade);
    }


    /** @test */
    public function it_can_have_photos_allowed(): void
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        self::assertIsBool($participant->photos_allowed);
    }

    /** @test */
    public function it_can_have_a_note(): void
    {
        /** @var Participant $participant */
        $participant = Participant::factory(['note' => null])->create();
        self::assertNull($participant->note);

        $participant = Participant::factory(['note' => \Str::random(20)])->create();
        self::assertIsString($participant->note);
    }

    /** @test */
    public function it_belongs_to_allergies(): void
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        self::assertCount(0, $participant->allergies);

        $participant->allergies()->save(Allergy::factory()->create());
        $participant->load('allergies');
        self::assertCount(1, $participant->allergies);
    }

    /** @test */
    public function it_belongs_to_guardians(): void
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        self::assertCount(0, $participant->guardians);

        $participant->guardians()->save(Guardian::factory()->create());
        $participant->load('guardians');
        self::assertCount(1, $participant->guardians);
    }

    /** @test */
    public function it_belongs_to_courses(): void
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        self::assertCount(0, $participant->courses);

        $participant->courses()->save(Course::factory()->create());
        $participant->load('courses');
        self::assertCount(1, $participant->courses);
    }
}
