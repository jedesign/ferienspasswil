<?php

namespace Tests\Feature\Component;

use App\Http\Livewire\Guardian\Edit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class GuardianProfileFormTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function firstname_is_required(): void
    {
        $this->signInUserAsGuardian();

        FormTest::field_is_required('guardian.edit', 'firstname', 'update');
    }

    /** @test */
    public function lastname_is_required(): void
    {
        $this->signInUserAsGuardian();

        FormTest::field_is_required('guardian.edit', 'lastname', 'update');
    }

    /** @test */
    public function street_is_required(): void
    {
        $this->signInUserAsGuardian();

        FormTest::field_is_required('guardian.edit', 'street', 'update');
    }

    /** @test */
    public function street_number_is_optional(): void
    {
        $this->signInUserAsGuardian();

        FormTest::field_is_optional('guardian.edit', 'street_number', 'update');
    }

    /** @test */
    public function postcode_is_required(): void
    {
        $this->signInUserAsGuardian();

        FormTest::field_is_required('guardian.edit', 'postcode', 'update');
    }

    /** @test */
    public function postcode_is_4_digits(): void
    {
        $this->signInUserAsGuardian();

        FormTest::field_is_4_digits('guardian.edit', 'postcode', 'update');
    }

    /** @test */
    public function city_is_required(): void
    {
        $this->signInUserAsGuardian();

        FormTest::field_is_required('guardian.edit', 'city', 'update');
    }

    /** @test */
    public function phone_is_required(): void
    {
        $this->signInUserAsGuardian();

        FormTest::field_is_required('guardian.edit', 'phone', 'update');
    }

    /** @test */
    public function email_is_required(): void
    {
        $this->signInUserAsGuardian();

        FormTest::field_is_required('guardian.edit', 'email', 'update');
    }

    /** @test */
    public function email_is_valid_email(): void
    {
        $this->signInUserAsGuardian();

        FormTest::field_is_valid_email('guardian.edit', 'email', 'update');
    }

    /** @test */
    public function email_has_not_been_taken_already(): void
    {
        $this->signInUserAsGuardian();

        FormTest::field_has_not_been_taken_already('guardian.edit', 'email', 'update');
    }

    /** @test */
    public function see_email_has_not_already_been_taken_validation_message_as_user_types(): void
    {
        $this->signInUserAsGuardian();

        FormTest::see_field_has_not_already_been_taken_validation_message_as_user_types('guardian.edit', 'email', 'update');
    }


    /** @test */
    public function is_redirected_after_editing_profile(): void
    {
        $guardian = $this->signInUserAsGuardian();

        Livewire::test(Edit::class)
            ->set('firstname', $guardian->firstname)
            ->set('lastname', $guardian->lastname)
            ->set('street', 'Wohnstrasse')
            ->set('street_number', '777')
            ->set('postcode', '7777')
            ->set('city', 'the city')
            ->set('email', $guardian->email)
            ->call('update')
            ->assertRedirect(route('dashboard.index'));
    }

}
