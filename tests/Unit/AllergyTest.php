<?php

namespace Tests\Unit;

use App\Models\Allergy;
use App\Models\Course;
use App\Models\Participant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AllergyTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_a_title()
    {
        $this->assertNotNull(Allergy::factory()->create()->title);

        $title = 'Hundehaare';
        /** @var Allergy $allergy */
        $allergy = Allergy::factory(['title' => $title])->create();
        $this->assertIsString($allergy->title);
        $this->assertEquals($title, $allergy->title);
    }

    /** @test */
    public function it_has_an_id()
    {
        $this->assertNotNull(Allergy::factory()->create()->id);
    }

    /** @test */
    public function it_belongs_to_courses()
    {
        /** @var Allergy $allergy */
        $allergy = Allergy::factory()->create();
        $this->assertCount(0, $allergy->courses);

        $allergy->courses()->save(Course::factory()->create());
        $allergy->load('courses');
        $this->assertCount(1, $allergy->courses);
    }

    /** @test */
    public function it_belongs_to_participants()
    {
        /** @var Allergy $allergy */
        $allergy = Allergy::factory()->create();
        $this->assertCount(0, $allergy->participants);

        $allergy->participants()->save(Participant::factory()->create());
        $allergy->load('participants');
        $this->assertCount(1, $allergy->participants);
    }

}
