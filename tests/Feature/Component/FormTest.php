<?php

namespace Tests\Feature\Component;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class FormTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function alibi() : void
    {
        self::assertTrue(true);
    }

    public static function field_is_required(string $name, array $params, string $fieldName, string $method): void
    {
        Livewire::test($name, $params)
            ->set($fieldName, '')
            ->call($method)
            ->assertHasErrors([$fieldName => 'required']);
    }

    public static function field_is_optional(string $name, array $params, string $fieldName, string $method): void
    {
        Livewire::test($name, $params)
            ->set($fieldName, '')
            ->call($method)
            ->assertHasNoErrors([$fieldName => 'required']);
    }

    public static function field_is_4_digits(string $route, string $fieldName, string $method): void
    {
        Livewire::test($route)
            ->set($fieldName, '123')
            ->call($method)
            ->assertHasErrors([$fieldName => 'digits']);

        Livewire::test($route)
            ->set($fieldName, '12345')
            ->call($method)
            ->assertHasErrors([$fieldName => 'digits']);

        Livewire::test($route)
            ->set($fieldName, '1234')
            ->call($method)
            ->assertHasNoErrors([$fieldName => 'digits']);
    }

    public static function field_is_valid_email(string $route, string $fieldName, string $method): void
    {
        Livewire::test($route)
            ->set($fieldName, 'tallstack')
            ->call($method)
            ->assertHasErrors([$fieldName => 'email']);
    }

    public static function field_has_not_been_taken_already(string $route, string $fieldName, string $method): void
    {
        User::factory()->create([$fieldName => 'tallstack@example.com']);

        Livewire::test($route)
            ->set($fieldName, 'tallstack@example.com')
            ->call($method)
            ->assertHasErrors([$fieldName => 'unique']);
    }

    public static function see_field_has_not_already_been_taken_validation_message_as_user_types(string $route, string $fieldName, string $method): void
    {
        User::factory()->create([$fieldName => 'tallstack@example.com']);

        Livewire::test($route)
            ->set($fieldName, 'smallstack@gmail.com')
            ->assertHasNoErrors()
            ->set($fieldName, 'tallstack@example.com')
            ->call($method)
            ->assertHasErrors([$fieldName => 'unique']);
    }

}
