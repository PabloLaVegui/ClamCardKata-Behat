<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use ClamCardKata\ClamCard;
use ClamCardKata\Journey;
use ClamCardKata\Prices;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{

    private $clamCard;
    private $journey;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $prices = new Prices();
        $this->clamCard = new ClamCard($prices);
        $this->journey = new Journey();
    }

    /**
     * @Given Michael has a Clamcard
     */
    public function michaelHasAClamcard()
    {
        $this->clamCard->setId("Michael Card");
    }

    /**
     * @When Michael travels from :from to :to
     */
    public function michaelTravelsFromTo($from, $to)
    {
        $this->journey->setFrom($from);
        $this->journey->setTo($to);
    }

    /**
     * @Then Michael will be charged £:price for his journey
     */
    public function michaelWillBeChargedPsForHisJourney($price)
    {
        PHPUnit_Framework_Assert::assertSame(
            $price,
            $this->clamCard->charge($this->journey)
        );
    }
}
