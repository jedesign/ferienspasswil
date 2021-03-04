<?php

namespace Tests\Feature\Story;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class UserLogsOutTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_log_out()
    {
        Auth::login(User::factory()->create());

        $this->get(route('home'))->assertSee(route('logout'));

        $this->post(route('logout'))
            ->assertRedirect(route('home'));

        $this->assertFalse(Auth::check());
    }

    /** @test */
    public function visitor_can_not_log_out()
    {
        $this->get(route('home'))->assertDontSee(route('logout'));

        $this->post(route('logout'))
            ->assertRedirect(route('login'));

        $this->assertFalse(Auth::check());
    }
}
