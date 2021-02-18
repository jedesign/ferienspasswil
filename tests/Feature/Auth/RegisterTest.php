<?php

namespace Tests\Feature\Auth;

use App\Models\Employee;
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
    public function a_guardian_is_redirected_if_already_logged_in()
    {
        $user = User::factory()->for(
            Guardian::factory(), 'role'
        )->create();

        $this->be($user);

        $this->get(route('register'))
            ->assertRedirect(route('dashboard.index'));
    }

    /** @test */
    public function an_employee_is_redirected_if_already_logged_in()
    {
        $user = User::factory()->for(
            Employee::factory(), 'role'
        )->create();

        $this->be($user);

        $this->get(route('register'))
            ->assertRedirect(route('admin.index'));
    }
}
