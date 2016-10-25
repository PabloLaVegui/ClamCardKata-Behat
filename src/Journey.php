<?php
namespace ClamCardKata;

class Journey
{
    private $from;
    private $to;

    public function setFrom($station)
    {
        $this->from = $station;
    }

    public function setTo($station)
    {
        $this->to = $station;
    }

    public function from()
    {
        return $this->from;
    }

    public function to()
    {
        return $this->to;
    }
}
