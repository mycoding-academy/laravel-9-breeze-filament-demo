<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_user_has_name()
    {
        $user = User::factory()->make([
            'first_name' => 'Prasit',
            'last_name' => 'Gebsaap',
            'email' => 'test@gmail.com'
        ]);

        $this->assertEquals('Prasit Gebsaap', $user->name);
    }
}
