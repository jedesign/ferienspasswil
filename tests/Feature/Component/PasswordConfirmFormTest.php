<?php

namespace Tests\Feature\Component;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class PasswordConfirmFormTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function password_is_required()
    {
        Livewire::test('auth.passwords.confirm')
            ->call('confirm')
            ->assertHasErrors(['password' => 'required']);
    }

    /** @test */
    public function password_has_to_be_valid_password()
    {
        Livewire::test('auth.passwords.confirm')
            ->set('password', 'not-password')
            ->call('confirm')
            ->assertHasErrors(['password' => 'password']);
    }
}
