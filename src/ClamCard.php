<?php
namespace ClamCardKata;

use \ClamCardKata\Journey;
use \ClamCardKata\Prices;

class ClamCard
{
    private $prices;
    private $id;

    public function __construct(Prices $prices)
    {
        $this->prices = $prices;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function charge(Journey $journey)
    {
        return $this->prices->getPrice($journey->from(), $journey->to());
    }
}
