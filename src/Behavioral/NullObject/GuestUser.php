<?php

namespace App\Behavioral\NullObject;

class GuestUser extends User
{
    public function isAdmin(): bool
    {
        return false;
    }
}
