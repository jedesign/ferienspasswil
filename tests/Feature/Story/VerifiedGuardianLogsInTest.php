<?php

namespace Tests\Feature\Story;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\HomeTest;
use Tests\TestCase;

class VerifiedGuardianLogsInTest extends TestCase
{
    use RefreshDatabase;

    /** @see HomeTest::can_view_home_page() */

    /** @test */
    public function verified_guardian_can_access_login_page_trough_home()
    {
        $this->get(route('home'))->assertSee(route('login'));
    }

    /** @test */
    public function verified_guardian_can_view_login_page()
    {
        $this->get(route('login'))->assertSuccessful();
    }

    /** @test */
    function login_page_contains_livewire_component()
    {
        $this->get(route('login'))
            ->assertSuccessful()
            ->assertSeeLivewire('auth.login');
    }

    /** @test */
    public function verified_guardian_can_login()
    {
        // TODO[mr/rw]: los (04.03.21 rw)
    }


    /** @test */
    public function verified_guardian_can_view_dashboard()
    {
        // TODO[mr/rw]: los (04.03.21 rw)
    }

}
