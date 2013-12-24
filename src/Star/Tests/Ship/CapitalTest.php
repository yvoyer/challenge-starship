<?php
/**
 * This file is part of the starship project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Tests\Ship;

use Star\Ship\Capital;
use Star\Tests\UnitTestCase;

/**
 * Class CapitalTest
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Tests\Ship
 */
class CapitalTest extends UnitTestCase
{
    /**
     * @var Capital
     */
    private $ship;

    public function setUp()
    {
        $this->ship = new Capital();
    }

    public function testShouldHaveAttackBetweenFourAndTwenty()
    {
        $defender = $this->getMockStarShip();
        $defender
            ->expects($this->once())
            ->method('takeDamage')
            ->with($this->logicalOr($this->greaterThanOrEqual(4), $this->lessThanOrEqual(20)));

        $this->ship->attack($defender);
    }

    public function testShouldHaveHitPoints()
    {
        $this->assertSame(500, $this->ship->hitPoint());
    }

    public function testShouldAbsorbDamageUpTo20()
    {
        $this->ship->takeDamage(500);
        $this->assertSame(20, $this->ship->hitPoint());
    }
}
 