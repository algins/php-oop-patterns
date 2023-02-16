<?php

namespace App\Behavioral\Observer;

use Ramsey\Uuid\Uuid;

class Order implements Observable
{
    private array $observers = [];
    private string $id;

    public function __construct()
    {
        $this->id = Uuid::uuid4()->toString();
    }

    public function id(): string
    {
        return $this->id;
    }

    public function process(): void
    {
        $this->notify();
    }

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        $this->observers = array_filter($this->observers, fn($o) => $o !== $observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
