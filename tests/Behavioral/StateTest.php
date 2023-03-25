<?php

namespace App\Tests\Behavioral;

use App\Behavioral\State\GearBox;
use App\Behavioral\State\States\DriveState;
use App\Behavioral\State\States\NeutralState;
use App\Behavioral\State\States\ParkState;
use App\Behavioral\State\States\ReverseState;
use Exception;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testParkState(): void
    {
        $gearBox = new GearBox();

        $this->assertInstanceOf(ParkState::class, $gearBox->getState());
        $this->assertTrue($gearBox->getIsLocked());
        $this->assertEquals(GearBox::NO_GEAR, $gearBox->getSelectedGear());

        $this->expectException(Exception::class);
        $gearBox->switchToPreviousState();
    }

    public function testReverseState(): void
    {
        $gearBox = new GearBox();
        $gearBox->switchToNextState();

        $this->assertInstanceOf(ReverseState::class, $gearBox->getState());
        $this->assertFalse($gearBox->getIsLocked());
        $this->assertEquals(GearBox::REVERSE_GEAR, $gearBox->getSelectedGear());

        $gearBox->switchToPreviousState();
        $this->assertInstanceOf(ParkState::class, $gearBox->getState());
    }

    public function testNeutralState(): void
    {
        $gearBox = new GearBox();
        $gearBox->switchToNextState();
        $gearBox->switchToNextState();

        $this->assertInstanceOf(NeutralState::class, $gearBox->getState());
        $this->assertFalse($gearBox->getIsLocked());
        $this->assertEquals(GearBox::NO_GEAR, $gearBox->getSelectedGear());

        $gearBox->switchToPreviousState();
        $this->assertInstanceOf(ReverseState::class, $gearBox->getState());
    }

    public function testDriveState(): void
    {
        $gearBox = new GearBox();
        $gearBox->switchToNextState();
        $gearBox->switchToNextState();
        $gearBox->switchToNextState();

        $this->assertInstanceOf(DriveState::class, $gearBox->getState());
        $this->assertFalse($gearBox->getIsLocked());
        $this->assertEquals(GearBox::FORWARD_GEAR, $gearBox->getSelectedGear());

        $this->expectException(Exception::class);
        $gearBox->switchToNextState();

        $gearBox->switchToPreviousState();
        $this->assertInstanceOf(NeutralState::class, $gearBox->getState());
    }
}
