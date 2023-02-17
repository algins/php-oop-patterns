<?php

namespace App\Behavioral\NullObject;

class AuthUser extends User
{
    public function __construct(
        private readonly bool $isAdmin = false,
    ) {
    }

    public function isAdmin(): bool
    {
        return $this->isAdmin;
    }
}
