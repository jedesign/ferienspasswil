<?php

namespace Tests\Unit;

use App\Models\Allergy;
use App\Models\Course;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AllergyTest extends TestCase {
    use RefreshDatabase;

    /** @test */
    public function it_has_a_title() {
        $title   = 'Hundehaare';
        $allergy = Allergy::factory( [ 'title' => $title ] )->create();
        $this->assertIsString( $allergy->title );
        $this->assertEquals( $title, $allergy->title );
    }

    /** @test */
    public function it_belongs_to_courses() {
        $allergy = Allergy::factory()->create();
        $this->assertCount( 0, $allergy->courses );

        $allergy->courses()->save(Course::factory()->create());
        $allergy->load('courses');
        $this->assertCount( 1, $allergy->courses );
    }

}
