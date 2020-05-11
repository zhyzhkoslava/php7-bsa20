<?php

declare(strict_types=1);

namespace App\Task1;
/**
 * Class Car
 * @package App\Task1
 */
class Car
{
    /**
     * Car constructor.
     * @param int $id
     * @param string $image
     * @param string $name
     * @param int $speed
     * @param int $pitStopTime
     * @param float $fuelConsumption
     * @param float $fuelTankVolume
     */
    public function __construct(
        int $id,
        string $image,
        string $name,
        int $speed,
        int $pitStopTime,
        float $fuelConsumption,
        float $fuelTankVolume
    )
    {
        $this->id = $id;
        $this->image = $image;
        $this->name = $name;
        $this->speed = $speed;
        $this->pitStopTime = $pitStopTime;
        $this->fuelConsumption = $fuelConsumption;
        $this->fuelTankVolume = $fuelTankVolume;
    }

    /**
     * Get car id.
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get car image
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Get car name
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get car speed
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * Get car pitStopTime
     * @return int
     */
    public function getPitStopTime(): int
    {
        return $this->pitStopTime;
    }

    /**
     * Get car fuelConsumption
     * @return float
     */
    public function getFuelConsumption(): float
    {
        return $this->fuelConsumption;
    }

    /**
     * Get car fuelTankVolume
     * @return float
     */
    public function getFuelTankVolume(): float
    {
        return $this->fuelTankVolume;
    }
}