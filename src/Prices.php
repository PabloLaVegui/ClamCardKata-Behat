<?php
namespace ClamCardKata;

use \ClamCardKata\Journey;

class Prices
{
    const PRICES = [
        'zoneA' => 2.5,
        'zoneB' => 3.0
    ];

    public function getPrice(Journey $journey)
    {
        $fromZone = Stations::getZone($journey->from());
        $toZone   = Stations::getZone($journey->to());

        return $this->getPriceByZones($fromZone, $toZone);
    }

    private function getPriceByZones($fromZone, $toZone)
    {
        return $fromZone === $toZone
                    ? $this->getZonePrice($fromZone)
                    : $this->getZonePrice('zoneB');
    }

    private function getZonePrice($zone)
    {
        return number_format(self::PRICES[$zone], 2);
    }
}
