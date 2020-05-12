<?php

declare(strict_types=1);

namespace App\Task1;
/**
 * Class Track
 * @package App\Task1
 */
class Track
{
    /**
     * Array of Car object
     * @var Car[]
     */
    protected array $cars = [];
    protected float $lapLength;
    protected int $lapsNumber;

    /**
     * Track constructor.
     * @param float $lapLength
     * @param int $lapsNumber
     * @throws \Exception
     */
    public function __construct(float $lapLength, int $lapsNumber)
    {
        $this->setLapLength($lapLength);
        $this->setLapsNumber($lapsNumber);
    }

    /**
     * Get LapLength
     * @return float
     */
    public function getLapLength(): float
    {
        return $this->lapLength;
    }

    /**
     * @param $lapLength
     * @throws \Exception
     */
    public function setLapLength($lapLength)
    {
        if ($lapLength <= 0) {
            throw new \Exception('Invalid lapLength value! lapLength must be greater than 0');
        } else {
            $this->lapLength = $lapLength;
        }
    }

    /**
     * Get LapsNumber
     * @return int
     */
    public function getLapsNumber(): int
    {
        return $this->lapsNumber;
    }

    /**
     * @param $lapsNumber
     * @throws \Exception
     */
    public function setLapsNumber($lapsNumber)
    {
        if ($lapsNumber <= 0) {
            throw new \Exception('Invalid lapsNumber value! lapsNumber must be greater than 0');
        } else {
            $this->lapsNumber = $lapsNumber;
        }
    }

    /**
     * Add car on Track
     * @param Car $car
     */
    public function add(Car $car): void
    {
        $this->cars[] = $car;
    }

    /**
     * Show all cars on Track
     * @return array
     */
    public function all(): array
    {
        return $this->cars;
    }

    /**
     * Start of Run and get winner
     * @return Car
     */
    public function run(): Car
    {
        $timeOfEachCar = [];
        $cars = $this->all();

        if (empty($cars)) {
            throw new \Exception('Need to add at least 1 car!');
        } else {
            foreach ($cars as $car) {

                $car_speed = $car->getSpeed();
                $pitStopTime = $car->getPitStopTime();
                $fuelConsumption = $car->getFuelConsumption();
                $fuelTankVolume = $car->getFuelTankVolume();
                $allWay = $this->lapLength * $this->lapsNumber;
                $kmConsumption = 100;

                // Calculate all time on Track in seconds of each Car
                $timeOnTrack = ($allWay / $kmConsumption) * ($kmConsumption / $car_speed) * 60 * 60;
                // Calculate all pitStops of each Car
                $pitStops = (($allWay / $kmConsumption) * $fuelConsumption) / $fuelTankVolume;
                // Calculate time on all pitStops
                $timeOnPitStop = $pitStops * $pitStopTime;
                // Calculate all time of each car on track with pitStops
                $allSpentSeconds = $timeOnTrack + $timeOnPitStop;
                // Add time of each car add to array
                $timeOfEachCar[] = $allSpentSeconds;

            }
        }

        return $this->all()[array_search(min($timeOfEachCar), $timeOfEachCar)];
    }
}