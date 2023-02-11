<?php

namespace App\Creational\Singleton;

class Preferences
{
    private array $props = [];
    private static Preferences $instance;

    private function __construct()
    {
    }

    public static function instance(): Preferences
    {
        if (empty(self::$instance)) {
            self::$instance = new Preferences();
        }

        return self::$instance;
    }

    public function setProperty(string $key, string $value): void
    {
        $this->props[$key] = $value;
    }

    public function getProperty(string $key): ?string
    {
        return $this->props[$key] ?? null;
    }
}
