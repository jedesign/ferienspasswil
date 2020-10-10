<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeTest extends TestCase
{
    /** @test */
    public function can_view_home_page()
    {
        $response = $this->get(route('home'));

        $response->assertSuccessful();
    }
}
