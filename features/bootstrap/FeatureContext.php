<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
    }

    /**
     * @Given /^I have (\d+) attacking \'([^\']*)\'$/
     */
    public function iHaveAttacking($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Given /^I have (\d+) defending \'([^\']*)\'$/
     */
    public function iHaveDefending($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When /^I attack the defending ship with \'([^\']*)\'$/
     */
    public function iAttackTheDefendingShipWith($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then /^The defending \'([^\']*)\' should have between (\d+) and (\d+) hp$/
     */
    public function theDefendingShouldHaveBetweenAndHp($arg1, $arg2, $arg3)
    {
        throw new PendingException();
    }

    /**
     * @Given /^The defending \'([^\']*)\' should not be destroyed$/
     */
    public function theDefendingShouldNotBeDestroyed($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then /^The defending \'([^\']*)\' should be destroyed$/
     */
    public function theDefendingShouldBeDestroyed($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should not be able to attack again$/
     */
    public function iShouldNotBeAbleToAttackAgain()
    {
        throw new PendingException();
    }
}
