<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GuestVerificationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_dashboard_redirects_to_login_as_guest()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
        $response->assertLocation(route('login'));
    }
}
