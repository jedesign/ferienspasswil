<?php

namespace Tests\Unit;

use App\Models\Employee;
use App\Models\Guardian;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_a_firstname()
    {
        /** @var User $user */
        $user = User::factory()->create();
        $this->assertIsString($user->firstname);
    }

    /** @test */
    public function it_has_a_lastname()
    {
        /** @var User $user */
        $user = User::factory()->create();
        $this->assertIsString($user->lastname);
    }

    /** @test */
    public function it_has_an_email()
    {
        $email = 'fredy.nazgul@mordor.me';
        /** @var User $user */
        $user = User::factory(['email' => $email])->create();
        $this->assertIsString($user->email);

        try {
            User::factory(['email' => $email])->create();
        } catch (QueryException $exception) {
            $this->assertStringContainsString(
                'UNIQUE constraint failed: users.email',
                $exception->getMessage());
        }

    }

    /** @test */
    public function it_has_an_email_verified_timestamp()
    {
        /** @var User $user */
        $user = User::factory(['email_verified_at' => null])->create();
        $this->assertNull($user->email_verified_at);

        $timestamp = Carbon::now()->getTimestamp();
        /** @var User $anotherUser */
        $anotherUser = User::factory(['email_verified_at' => $timestamp])->create();
        $this->assertInstanceOf(\Illuminate\Support\Carbon::class, $anotherUser->email_verified_at);
    }

    /** @test */
    public function it_has_a_password()
    {
        /** @var User $user */
        $user = User::factory()->create();
        $this->assertIsString($user->password);
    }

    /** @test */
    public function it_has_a_remember_token()
    {
        /** @var User $user */
        $user = User::factory(['remember_token' => null])->create();
        $this->assertNull($user->remember_token);

        $remember_token = Str::random(100);
        /** @var User $anotherUser */
        $anotherUser = User::factory(['remember_token' => $remember_token])->create();
        $this->assertIsString($anotherUser->remember_token);
    }

    /** @test */
    public function it_has_a_phone()
    {
        /** @var User $user */
        $user = User::factory()->create();
        $this->assertIsString($user->phone);
    }

    /** @test */
    public function it_has_a_role()
    {
        try {
            User::factory(['role_type' => null])->create();
        } catch (QueryException $exception) {
            $this->assertStringContainsString('constraint failed: users.role_type', $exception->getMessage());
        }
        try {
            User::factory(['role_id' => null])->create();
        } catch (QueryException $exception) {
            $this->assertStringContainsString('constraint failed: users.role_id', $exception->getMessage());
        }
    }

    /** @test */
    public function it_can_be_of_role_employee()
    {
        /** @var Employee $employee */
        $employee = Employee::factory()->create();

        /** @var User $user */
        $user = User::factory([
            'role_type' => Employee::class,
            'role_id' => $employee->id
        ])->create();

        $this->assertTrue($user->is_employee);
        $this->assertFalse($user->is_guardian);
        $this->assertInstanceOf(Employee::class, $user->employee);
        $this->assertInstanceOf(Employee::class, $user->role);
        $this->assertNull($user->guardian);
    }

    /** @test */
    public function it_can_be_of_role_guardian()
    {
        /** @var Guardian $guardian */
        $guardian = Guardian::factory()->create();

        /** @var User $user */
        $user = User::factory([
            'role_type' => Guardian::class,
            'role_id' => $guardian->id
        ])->create();

        $this->assertTrue($user->is_guardian);
        $this->assertFalse($user->is_employee);
        $this->assertInstanceOf(Guardian::class, $user->guardian);
        $this->assertInstanceOf(Guardian::class, $user->role);
        $this->assertNull($user->employee);
    }
}
