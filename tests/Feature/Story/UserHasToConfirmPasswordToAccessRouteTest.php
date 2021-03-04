<?php

namespace Tests\Feature\Story;

use App\Models\User;
use Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Tests\TestCase;

class UserHasToConfirmPasswordToAccessRouteTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_has_to_confirm_their_password_before_visiting_a_protected_page()
    {
        Auth::login(User::factory()->create());

        $this->get('/must-be-confirmed')
            ->assertRedirect(route('password.confirm'));

        $this->followingRedirects()
            ->get('/must-be-confirmed')
            ->assertSeeLivewire('auth.passwords.confirm');
    }

    /** @test */
    public function user_confirms_their_password_and_gets_redirected()
    {
        Auth::login(User::factory()->create([
            'password' => Hash::make('password'),
        ]));

        $this->withSession(['url.intended' => '/must-be-confirmed']);

        Livewire::test('auth.passwords.confirm')
            ->set('password', 'password')
            ->call('confirm')
            ->assertRedirect('/must-be-confirmed');
    }

    protected function setUp(): void
    {
        parent::setUp();

        Route::get('/must-be-confirmed', function () {
            return 'You must be confirmed to see this page.';
        })->middleware(['web', 'password.confirm']);
    }
}
