<?php

namespace Tests\Feature\Story;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;
use Tests\TestCase;

class EmployeeLogsInTest extends TestCase
{
    use RefreshDatabase;

    /** @see UserLogsInTest */

    /** @test */
    public function employee_can_log_in(): void
    {
        $user = User::factory()->for(
            Employee::factory(), 'role'
        )->create([
            'password' => Hash::make('password'),
            'remember_token' => null
        ]);

        Livewire::test('auth.login')
            ->set('email', $user->email)
            ->set('password', 'password')
            ->set('remember', true)
            ->call('authenticate')
            ->assertRedirect(route('admin.index'));

        $this->assertAuthenticatedAs($user);
        $this->assertNotNull(Auth::user()->remember_token);
    }


    /** @test */
    public function employee_can_view_admin_area(): void
    {
        $this->signInUserAsEmployee();

        $this->get(route('admin.index'))->assertSuccessful();
    }

    /** @test */
    public function employee_can_not_view_dashboard(): void
    {
        $this->signInUserAsEmployee();

        $this->get(route('dashboard.index'))
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function employee_is_redirected_if_already_logged_in(): void
    {
        $this->signInUserAsEmployee();

        $this->get(route('login'))
            ->assertRedirect(route('admin.index'));
    }
}
