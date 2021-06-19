<?php

namespace Tests\Unit;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_an_id(): void
    {
        /** @var Employee $employee */
        $employee = Employee::factory()->create();
        $this->assertIsInt($employee->id);
    }

    /** @test */
    public function it_can_have_a_public_transport_subscription(): void
    {
        /** @var Employee $employee */
        $employee = Employee::factory(['public_transport_subscription' => null])->create();
        $this->assertNull($employee->public_transport_subscription);

        $employee = Employee::factory(['public_transport_subscription' => 'GA'])->create();
        $this->assertIsString($employee->public_transport_subscription);
    }

    /** @test */
    public function it_belongs_to_a_user(): void
    {
        /** @var Employee $employee */
        $employee = Employee::factory()->has(User::factory())->create();

        $this->assertInstanceOf(User::class, $employee->user);
    }
}
