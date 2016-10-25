<?php
namespace ClamCardKata;

class Stations
{
    const STATION_ZONE = [
        'Asterisk' => 'zoneA',
        'Aldgate' => 'zoneA'
    ];

    public static function getZone($station)
    {
        return self::STATION_ZONE[$station];
    }
}
