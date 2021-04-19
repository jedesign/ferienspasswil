<?php

namespace Tests\Feature\Story;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Component\LoginFormTest;
use Tests\Feature\HomeTest;
use Tests\TestCase;

class UserLogsInTest extends TestCase
{
    use RefreshDatabase;

    /** @see HomeTest::can_view_home_page() */

    /** @test */
    public function user_can_access_login_page_trough_home()
    {
        $this->get(route('home'))->assertSee(route('login'));
    }

    /** @test */
    public function user_can_view_login_page()
    {
        $this->get(route('login'))->assertSuccessful();
    }

    /** @test */
    function login_page_contains_livewire_component()
    {
        $this->get(route('login'))
            ->assertSeeLivewire('auth.login');
    }

    /** @see LoginFormTest for all form elements */

    /** @see GuardianLogsInTest */
    /** @see EmployeeLogsInTest */
}
