<?php

namespace Tests\Feature;

use App\Models\Guardian;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_view_dashboard()
    {
        $user = User::factory()->for(
            Guardian::factory(), 'role'
        )->create();

        Auth::login($user);
        $response = $this->get(route('dashboard'));

        $response->assertSuccessful();
    }

    /** @test */
    public function must_be_authenticated()
    {
        $response = $this->get(route('dashboard'));

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function must_have_verified_email()
    {
        $user = User::factory()->create([
            'email_verified_at' => null,
        ]);

        Auth::login($user);

        $response = $this->get(route('dashboard'));

        $response->assertRedirect(route('verification.notice'));
    }
}
