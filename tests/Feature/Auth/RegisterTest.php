<?php

namespace Tests\Feature\Auth;

use App\Models\Guardian;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Livewire\Livewire;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function registration_page_contains_livewire_component()
    {
        $this->get(route('register'))
            ->assertSuccessful()
            ->assertSeeLivewire('auth.register');
    }

    /** @test */
    public function is_redirected_if_already_logged_in()
    {
        $user = User::factory()->create();

        $this->be($user);

        $this->get(route('register'))
            ->assertRedirect(route('dashboard'));
    }

    /** @test */
    function a_user_can_register()
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
            ->assertRedirect(route('dashboard'));

        $this->assertTrue(User::whereEmail('tallstack@example.com')->exists());
        $this->assertEquals('tallstack@example.com', Auth::user()->email);
        $this->assertInstanceOf(Guardian::class, Auth::user()->role);

        Event::assertDispatched(Registered::class);
    }

    /** @test */
    function firstname_is_required()
    {
        Livewire::test('auth.register')
            ->set('firstname', '')
            ->call('register')
            ->assertHasErrors(['firstname' => 'required']);
    }

    /** @test */
    function lastname_is_required()
    {
        Livewire::test('auth.register')
            ->set('lastname', '')
            ->call('register')
            ->assertHasErrors(['lastname' => 'required']);
    }

    /** @test */
    function street_is_required()
    {
        Livewire::test('auth.register')
            ->set('street', '')
            ->call('register')
            ->assertHasErrors(['street' => 'required']);
    }

    /** @test */
    function street_number_is_optional()
    {
        Livewire::test('auth.register')
            ->set('street_number', '')
            ->call('register')
            ->assertHasNoErrors(['street_number' => 'required']);
    }

    /** @test */
    function postcode_is_required()
    {
        Livewire::test('auth.register')
            ->set('postcode', '')
            ->call('register')
            ->assertHasErrors(['postcode' => 'required']);
    }

    /** @test */
    function postcode_is_4_digits()
    {
        Livewire::test('auth.register')
            ->set('postcode', '123')
            ->call('register')
            ->assertHasErrors(['postcode' => 'digits']);

        Livewire::test('auth.register')
            ->set('postcode', '12345')
            ->call('register')
            ->assertHasErrors(['postcode' => 'digits']);

        Livewire::test('auth.register')
            ->set('postcode', '1234')
            ->call('register')
            ->assertHasNoErrors(['postcode' => 'digits']);
    }

    /** @test */
    function city_is_required()
    {
        Livewire::test('auth.register')
            ->set('city', '')
            ->call('register')
            ->assertHasErrors(['city' => 'required']);
    }

    /** @test */
    function phone_is_required()
    {
        Livewire::test('auth.register')
            ->set('phone', '')
            ->call('register')
            ->assertHasErrors(['phone' => 'required']);
    }

    /** @test */
    function email_is_required()
    {
        Livewire::test('auth.register')
            ->set('email', '')
            ->call('register')
            ->assertHasErrors(['email' => 'required']);
    }

    /** @test */
    function email_is_valid_email()
    {
        Livewire::test('auth.register')
            ->set('email', 'tallstack')
            ->call('register')
            ->assertHasErrors(['email' => 'email']);
    }

    /** @test */
    function email_hasnt_been_taken_already()
    {
        User::factory()->create(['email' => 'tallstack@example.com']);

        Livewire::test('auth.register')
            ->set('email', 'tallstack@example.com')
            ->call('register')
            ->assertHasErrors(['email' => 'unique']);
    }

    /** @test */
    function see_email_hasnt_already_been_taken_validation_message_as_user_types()
    {
        User::factory()->create(['email' => 'tallstack@example.com']);

        Livewire::test('auth.register')
            ->set('email', 'smallstack@gmail.com')
            ->assertHasNoErrors()
            ->set('email', 'tallstack@example.com')
            ->call('register')
            ->assertHasErrors(['email' => 'unique']);
    }

    /** @test */
    function password_is_required()
    {
        Livewire::test('auth.register')
            ->set('password', '')
            ->set('password_confirmation', 'password')
            ->call('register')
            ->assertHasErrors(['password' => 'required']);
    }

    /** @test */
    function password_is_minimum_of_eight_characters()
    {
        Livewire::test('auth.register')
            ->set('password', 'secret')
            ->set('password_confirmation', 'secret')
            ->call('register')
            ->assertHasErrors(['password' => 'min']);
    }

    /** @test */
    function password_matches_password_confirmation()
    {
        Livewire::test('auth.register')
            ->set('email', 'tallstack@example.com')
            ->set('password', 'password')
            ->set('password_confirmation', 'not-password')
            ->call('register')
            ->assertHasErrors(['password' => 'confirmed']);
    }
}
