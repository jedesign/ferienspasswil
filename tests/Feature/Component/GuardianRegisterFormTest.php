<?php

namespace Tests\Feature\Component;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class GuardianRegisterFormTest extends TestCase
{
    use RefreshDatabase;

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
