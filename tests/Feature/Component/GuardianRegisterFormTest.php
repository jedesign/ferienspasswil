<?php

namespace Tests\Feature\Component;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class GuardianRegisterFormTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function firstname_is_required(): void
    {
        FormTest::field_is_required('auth.register', [], 'firstname', 'register');
    }

    /** @test */
    public function lastname_is_required(): void
    {
        FormTest::field_is_required('auth.register', [], 'lastname', 'register');
    }

    /** @test */
    public function street_is_required(): void
    {
        FormTest::field_is_required('auth.register', [], 'street', 'register');
    }

    /** @test */
    public function street_number_is_optional(): void
    {
        FormTest::field_is_optional('auth.register', [], 'street_number', 'register');
    }

    /** @test */
    public function postcode_is_required(): void
    {
        FormTest::field_is_required('auth.register', [], 'postcode', 'register');
    }

    /** @test */
    public function postcode_is_4_digits(): void
    {
        FormTest::field_is_4_digits('auth.register', 'postcode', 'register');
    }

    /** @test */
    public function city_is_required(): void
    {
        FormTest::field_is_required('auth.register', [], 'city', 'register');
    }

    /** @test */
    public function phone_is_required(): void
    {
        FormTest::field_is_required('auth.register', [], 'phone', 'register');
    }

    /** @test */
    public function email_is_required(): void
    {
        FormTest::field_is_required('auth.register', [], 'email', 'register');
    }

    /** @test */
    public function email_is_valid_email(): void
    {
        FormTest::field_is_valid_email('auth.register', 'email', 'register');
    }

    /** @test */
    public function email_has_not_been_taken_already(): void
    {
        FormTest::field_has_not_been_taken_already('auth.register', 'email', 'register');
    }

    /** @test */
    public function see_email_has_not_already_been_taken_validation_message_as_user_types(): void
    {
        FormTest::see_field_has_not_already_been_taken_validation_message_as_user_types('auth.register', 'email', 'register');
    }

    /** @test */
    public function password_is_required(): void
    {
        Livewire::test('auth.register')
            ->set('password', '')
            ->set('password_confirmation', 'password')
            ->call('register')
            ->assertHasErrors(['password' => 'required']);
    }

    /** @test */
    public function password_is_minimum_of_eight_characters(): void
    {
        Livewire::test('auth.register')
            ->set('password', 'secret')
            ->set('password_confirmation', 'secret')
            ->call('register')
            ->assertHasErrors(['password' => 'min']);
    }

    /** @test */
    public function password_matches_password_confirmation(): void
    {
        Livewire::test('auth.register')
            ->set('email', 'tallstack@example.com')
            ->set('password', 'password')
            ->set('password_confirmation', 'not-password')
            ->call('register')
            ->assertHasErrors(['password' => 'confirmed']);
    }
}
