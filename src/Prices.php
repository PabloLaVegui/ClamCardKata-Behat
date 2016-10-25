<?php
namespace ClamCardKata;

class Prices
{
    const PRICES = [
        'zoneA' => 2.5
    ];

    public function getPrice($fromStation, $toStation)
    {
        $fromZone = Stations::getZone($fromStation);
        $toZone   = Stations::getZone($toStation);

        return $this->getPriceByZones($fromZone, $toZone);
    }

    private function getPriceByZones($fromZone, $toZone)
    {
        return $fromZone === $toZone ? $this->getZonePrice($fromZone) : 0;
    }

    private function getZonePrice($zone)
    {
        return number_format(self::PRICES[$zone], 2);
    }
}
