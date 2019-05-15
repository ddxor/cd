<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginRequiredForDashboardTest extends TestCase
{
    /**
     * Check that we get a 302 if we try to access the dashboard & aren't logged in.
     *
     * @return void
     */
    public function testWeGetAValidResponseStatus() : void
    {
        $this->get('/home')->assertStatus(302);
    }

    /**
     * Check that a location header is present and that it is sending us back to a /login page.
     *
     * @return void
     */
    public function testWeAreRedirectedToTheLoginPage() : void
    {
        $locationHeader = $this->get('/home')->headers->get('location');

        $this->assertNotNull($locationHeader);
        $this->assertContains('/login', $locationHeader);
    }
}
