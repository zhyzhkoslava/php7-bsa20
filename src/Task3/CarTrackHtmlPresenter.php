<?php

declare(strict_types=1);

namespace App\Task3;

use App\Task1\Car;
use App\Task1\Track;

/**
 * Class CarTrackHtmlPresenter
 * @package App\Task3
 */
class CarTrackHtmlPresenter
{
    /**
     * @param Track $track
     * @return string
     */
    public function present(Track $track): string
    {
        $carsOnTrack = $track->all();
        $render = "<div style=text-align:center>";
        foreach ($carsOnTrack as $car) {
            $render .= '<div>';
            $render .= '<h2>Car name - ' . $car->getName() . '</h2>';
            $render .= '<img src="' . $car->getImage() . '">';
            $render .= '<p>Speed -  ' . $car->getSpeed() . '</p>';
            $render .= '<p>Pit Stop Time -  ' . $car->getPitStopTime() . '</p>';
            $render .= '<p>Fuel Consumption -  ' . $car->getFuelConsumption() . '</p>';
            $render .= '<p>Fuel Tank Volume -  ' . $car->getFuelTankVolume() . '</p>';
            $render .= '<hr>';
            $render .= '</div>';
        }
        $render .= '</div>';

        return $render;
    }
}