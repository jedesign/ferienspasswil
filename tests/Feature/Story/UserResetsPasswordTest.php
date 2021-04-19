<?php

namespace Tests\Feature\Story;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Livewire;
use Tests\Feature\Component\PasswordRequestFormTest;
use Tests\TestCase;

class UserResetsPasswordTest extends TestCase
{

    use RefreshDatabase;


    /** @test */
    public function user_can_view_password_request_page()
    {
        $this->get(route('password.request'))
            ->assertSuccessful()
            ->assertSeeLivewire('auth.passwords.email');
    }

    /** @see PasswordRequestFormTest */

    /** @test */
    public function user_enters_a_valid_email_address_and_gets_an_email_for_password_reset()
    {
        $user = User::factory()->create();

        Livewire::test('auth.passwords.email')
            ->set('email', $user->email)
            ->call('sendResetPasswordLink')
            ->assertNotSet('emailSentMessage', false);

        $this->assertDatabaseHas('password_resets', [
            'email' => $user->email,
        ]);
    }

    /** @test */
    public function user_can_view_password_reset_page_with_valid_token_link()
    {
        $user = User::factory()->create();

        $token = Str::random(16);

        DB::table('password_resets')->insert([
            'email' => $user->email,
            'token' => Hash::make($token),
            'created_at' => Carbon::now(),
        ]);

        $this->get(route('password.reset', [
            'email' => $user->email,
            'token' => $token,
        ]))
            ->assertSuccessful()
            ->assertSee($user->email)
            ->assertSeeLivewire('auth.passwords.reset');
    }

    /** @test */
    public function user_can_reset_password()
    {
        $user = User::factory()->create();

        $token = Str::random(16);

        DB::table('password_resets')->insert([
            'email' => $user->email,
            'token' => Hash::make($token),
            'created_at' => Carbon::now(),
        ]);

        Livewire::test('auth.passwords.reset', [
            'token' => $token,
        ])
            ->set('email', $user->email)
            ->set('password', 'new-password')
            ->set('password_confirmation', 'new-password')
            ->call('resetPassword');

        $this->assertTrue(Auth::attempt([
            'email' => $user->email,
            'password' => 'new-password',
        ]));
    }
}
