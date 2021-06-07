<?php

namespace Tests\Feature\Story;

use App\Models\Guardian;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;
use Tests\TestCase;

class GuardianLogsInTest extends TestCase
{
    use RefreshDatabase;

    /** @see UserLogsInTest */

    /** @test */
    public function guardian_can_log_in(): void
    {
        $user = User::factory()->for(
            Guardian::factory(), 'role'
        )->create([
            'password' => Hash::make('password'),
            'remember_token' => null
        ]);

        Livewire::test('auth.login')
            ->set('email', $user->email)
            ->set('password', 'password')
            ->set('remember', true)
            ->call('authenticate')
            ->assertRedirect(route('dashboard.index'));

        $this->assertAuthenticatedAs($user);
        self::assertNotNull(Auth::user()->remember_token);
    }


    /** @test */
    public function guardian_can_view_dashboard(): void
    {
        $this->signInUserAsGuardian();

        $this->get(route('dashboard.index'))->assertSuccessful();
    }

    /** @test */
    public function guardian_can_not_view_admin_area(): void
    {
        $this->signInUserAsGuardian();

        $this->get(route('admin.index'))
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function guardian_is_redirected_if_already_logged_in(): void
    {
        $this->signInUserAsGuardian();

        $this->get(route('login'))
            ->assertRedirect(route('dashboard.index'));
    }
}
