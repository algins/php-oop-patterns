<?php

namespace App\Behavioral\NullObject;

abstract class User
{
    abstract public function isAdmin(): bool;
}
