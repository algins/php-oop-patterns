<?php

namespace App\Tests\Singleton;

use App\Singleton\Preferences;
use PHPUnit\Framework\TestCase;

class PreferencesTest extends TestCase
{
    public function testSingleton()
    {
        $pref1 = Preferences::instance();

        $name = 'Joe';
        $pref1->setProperty('name', $name);
        unset($pref1);

        $pref2 = Preferences::instance();

        $this->assertEquals($pref2->getProperty('name'), $name);
    }
}
