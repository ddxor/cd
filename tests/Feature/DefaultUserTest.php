<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;

class DefaultUserTest extends TestCase
{
    /**
     * Assert that there is 1 user with the email 'admin@admin.com'.
     *
     * @return void
     */
    public function testDefaultUserExists() : void
    {
        $userCount = User::where('email', 'admin@admin.com')->count();

        $this->assertEquals(1, $userCount);
    }
}
