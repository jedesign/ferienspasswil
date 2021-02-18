<?php

namespace Tests\Feature\Auth;

use App\Models\Employee;
use App\Models\Guardian;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_view_login_page()
    {
        $this->get(route('login'))
            ->assertSuccessful()
            ->assertSeeLivewire('auth.login');
    }

    /** @test */
    public function a_guardian_is_redirected_if_already_logged_in()
    {
        $user = User::factory()->for(
            Guardian::factory(), 'role'
        )->create();

        $this->be($user);

        $this->get(route('login'))
            ->assertRedirect(route('dashboard.index'));
    }

    /** @test */
    public function an_employee_is_redirected_if_already_logged_in()
    {
        $user = User::factory()->for(
            Employee::factory(), 'role'
        )->create();

        $this->be($user);

        $this->get(route('login'))
            ->assertRedirect(route('admin.index'));
    }

    /** @test */
    public function a_user_can_login()
    {
        $user = User::factory()->create(['password' => Hash::make('password')]);

        Livewire::test('auth.login')
            ->set('email', $user->email)
            ->set('password', 'password')
            ->call('authenticate');

        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function guardian_is_redirected_to_the_dashboard_after_login()
    {
        $guardian = Guardian::factory()->create();
        $guardian->user()->create(User::factory()->raw(['password' => Hash::make('password')]));

        Livewire::test('auth.login')
            ->set('email', $guardian->email)
            ->set('password', 'password')
            ->call('authenticate')
            ->assertRedirect(route('dashboard.index'));
    }

    /** @test */
    public function employee_is_redirected_to_the_admin_page_after_login()
    {
        $employee = Employee::factory()->create();
        $employee->user()->create(User::factory()->raw(['password' => Hash::make('password')]));

        Livewire::test('auth.login')
            ->set('email', $employee->email)
            ->set('password', 'password')
            ->call('authenticate')
            ->assertRedirect(route('admin.index'));
    }

    /** @test */
    public function email_is_required()
    {
        $user = User::factory()->create(['password' => Hash::make('password')]);

        Livewire::test('auth.login')
            ->set('password', 'password')
            ->call('authenticate')
            ->assertHasErrors(['email' => 'required']);
    }

    /** @test */
    public function email_must_be_valid_email()
    {
        $user = User::factory()->create(['password' => Hash::make('password')]);

        Livewire::test('auth.login')
            ->set('email', 'invalid-email')
            ->set('password', 'password')
            ->call('authenticate')
            ->assertHasErrors(['email' => 'email']);
    }

    /** @test */
    public function password_is_required()
    {
        $user = User::factory()->create(['password' => Hash::make('password')]);

        Livewire::test('auth.login')
            ->set('email', $user->email)
            ->call('authenticate')
            ->assertHasErrors(['password' => 'required']);
    }

    /** @test */
    public function bad_login_attempt_shows_message()
    {
        $user = User::factory()->create();

        Livewire::test('auth.login')
            ->set('email', $user->email)
            ->set('password', 'bad-password')
            ->call('authenticate')
            ->assertHasErrors('email');

        $this->assertFalse(Auth::check());
    }
}
