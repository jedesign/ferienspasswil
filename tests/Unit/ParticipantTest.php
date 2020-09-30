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
    public function it_has_an_id()
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        $this->assertIsInt($participant->id);
    }

    /** @test */
    public function it_has_a_firstname()
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        $this->assertIsString($participant->firstname);
    }

    /** @test */
    public function it_has_a_lastname()
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        $this->assertIsString($participant->lastname);
    }

    /** @test */
    public function it_has_a_birthdate()
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        $this->assertInstanceOf(Carbon::class, $participant->birthdate);
    }

    /** @test */
    public function it_has_a_gender()
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        $this->assertTrue(in_array($participant->gender, Gender::getConstants()));

        $exceptionThrown = false;

        try {
            Participant::factory(['gender' => 'non-existing-value'])->create();
        } catch (QueryException $exception) {
            $exceptionThrown = true;
            $this->assertStringContainsString('Integrity constraint violation', $exception->getMessage());
        }
        $this->assertTrue($exceptionThrown);
    }

    /** @test */
    public function it_has_a_school_grade()
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        $this->assertIsInt($participant->school_grade);
    }


    /** @test */
    public function it_can_have_photos_allowed()
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        $this->assertIsBool($participant->photos_allowed);
    }

    /** @test */
    public function it_can_have_a_note()
    {
        /** @var Participant $participant */
        $participant = Participant::factory(['note' => null])->create();
        $this->assertNull($participant->note);

        $participant = Participant::factory(['note' => \Str::random(20)])->create();
        $this->assertIsString($participant->note);
    }

    /** @test */
    public function it_belongs_to_allergies()
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        $this->assertCount(0, $participant->allergies);

        $participant->allergies()->save(Allergy::factory()->create());
        $participant->load('allergies');
        $this->assertCount(1, $participant->allergies);
    }

    /** @test */
    public function it_belongs_to_guardians()
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        $this->assertCount(0, $participant->guardians);

        $participant->guardians()->save(Guardian::factory()->create());
        $participant->load('guardians');
        $this->assertCount(1, $participant->guardians);
    }

    /** @test */
    public function it_belongs_to_courses()
    {
        /** @var Participant $participant */
        $participant = Participant::factory()->create();
        $this->assertCount(0, $participant->courses);

        $participant->courses()->save(Course::factory()->create());
        $participant->load('courses');
        $this->assertCount(1, $participant->courses);
    }
}
