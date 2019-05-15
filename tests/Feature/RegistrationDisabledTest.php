<?php

namespace Tests\Feature;

use Tests\TestCase;

class RegistrationDisabledTest extends TestCase
{
    /**
     * Assert that registration is disabled.
     *
     * @return void
     */
    public function testExample() : void
    {
        $response = $this->get('/register');

        $response->assertStatus(404);
    }
}
