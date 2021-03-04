<?php

namespace Tests\Feature\Story;

use App\Models\Guardian;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use Livewire\Livewire;
use Tests\Feature\Component\GuardianRegisterFormTest;
use Tests\Feature\HomeTest;
use Tests\TestCase;

class VisitorRegistersAsGuardianTest extends TestCase
{
    use RefreshDatabase;

    /** @see HomeTest::can_view_home_page() */

    /** @test */
    public function visitor_can_access_registration_page_trough_home()
    {
        $this->get(route('home'))->assertSee(route('register'));
    }

    /** @test */
    public function visitor_can_view_registration_page()
    {
        $this->get(route('register'))->assertSuccessful();
    }

    /** @test */
    function registration_page_contains_livewire_component()
    {
        $this->get(route('register'))
            ->assertSeeLivewire('auth.register');
    }

    /** @test */
    function visitor_can_register_as_guardian()
    {
        Event::fake();

        Livewire::test('auth.register')
            ->set('firstname', 'Tall')
            ->set('lastname', 'Stack')
            ->set('street', 'Stackstreet')
            ->set('street_number', 'Street Number')
            ->set('postcode', '1000')
            ->set('city', 'Stacksonville')
            ->set('phone', '0123456789')
            ->set('email', 'tallstack@example.com')
            ->set('password', 'password')
            ->set('password_confirmation', 'password')
            ->call('register')
            ->assertRedirect(route('verification.notice'));

        self::assertTrue(User::whereEmail('tallstack@example.com')->exists());
        self::assertEquals('tallstack@example.com', Auth::user()->email);
        self::assertNull(Auth::user()->email_verified_at);
        self::assertInstanceOf(Guardian::class, Auth::user()->role);

        Event::assertDispatched(Registered::class);
    }

    /** @see GuardianRegisterFormTest for all form elements */

    /** @test */
    public function unverified_guardian_can_view_verification_page()
    {
        $user = User::factory()->for(
            Guardian::factory(), 'role'
        )->create([
            'email_verified_at' => null,
        ]);

        Auth::login($user);

        $this->get(route('verification.notice'))
            ->assertSuccessful()
            ->assertSeeLivewire('auth.verify');
    }

    /** @test */
    public function unverified_guardian_can_resend_verification_email()
    {
        $user = User::factory()->for(
            Guardian::factory(), 'role'
        )->create([
            'email_verified_at' => null,
        ]);

        Livewire::actingAs($user);

        Livewire::test('auth.verify')
            ->call('resend')
            ->assertEmitted('resent');
    }

    /** @test */
    public function unverified_guardian_can_verify_email()
    {
        Event::fake();
        $user = User::factory()->for(
            Guardian::factory(), 'role'
        )->create([
            'email_verified_at' => null,
        ]);

        Auth::login($user);

        $url = URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
            [
                'id' => $user->getKey(),
                'hash' => sha1($user->getEmailForVerification()),
            ]
        );

        $this->get($url)->assertRedirect(route('login'));

        Event::assertDispatched(Verified::class);
        self::assertTrue($user->hasVerifiedEmail());
    }

    /** @test */
    public function guardian_can_not_verify_email_again()
    {
        Event::fake();

        $user = User::factory()->for(
            Guardian::factory(), 'role'
        )->create();

        Auth::login($user);

        $url = URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
            [
                'id' => $user->getKey(),
                'hash' => sha1($user->getEmailForVerification()),
            ]
        );

        $this->get($url)->assertRedirect(route('login'));
        Event::assertNotDispatched(Verified::class);
    }
}
