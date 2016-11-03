<?php
namespace ClamCardKata;

use \ClamCardKata\Journey;
use \ClamCardKata\Prices;

class ClamCard
{
    private $prices;
    private $id;

    private $journeys;

    public function __construct(Prices $prices)
    {
        $this->prices = $prices;
        $journeys = [];
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function addJourney(Journey $journey)
    {
        $this->journeys[] = $journey;
    }

    public function charge($journeyNumber)
    {
        $journey = $this->journeys[$journeyNumber - 1];

        return $this->prices->getPrice($journey);
    }
}
