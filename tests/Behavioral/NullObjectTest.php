<?php

namespace App\Tests\NullObject;

use App\Behavioral\NullObject\AuthUser;
use App\Behavioral\NullObject\GuestUser;
use PHPUnit\Framework\TestCase;

class NullObjectTest extends TestCase
{
    public function testNullObject(): void
    {
        $authUser = new AuthUser();
        $authAdminUser = new AuthUser(true);
        $guestUser = new GuestUser();

        $this->assertFalse($authUser->isAdmin());
        $this->assertTrue($authAdminUser->isAdmin());
        $this->assertFalse($guestUser->isAdmin());
    }
}
