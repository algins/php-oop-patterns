<?php

namespace App\Tests\Creational;

use App\Creational\Singleton\Preferences;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testSingleton(): void
    {
        $pref1 = Preferences::instance();

        $name = 'Joe';
        $pref1->setProperty('name', $name);
        unset($pref1);

        $pref2 = Preferences::instance();

        $this->assertEquals($pref2->getProperty('name'), $name);
    }
}
