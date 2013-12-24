<?php
/**
 * This file is part of the starship project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Tests\Ship;

use Star\Ship\StarFighter;
use Star\Tests\UnitTestCase;

/**
 * Class StarFighterTest
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Tests\Ship
 */
class StarFighterTest extends UnitTestCase
{
    /**
     * @var StarFighter
     */
    private $ship;

    public function setUp()
    {
        $this->ship = new StarFighter();
    }

    public function testShouldHaveAttackBetweenOneAndTen()
    {
        $defender = $this->getMockStarShip();
        $defender
            ->expects($this->once())
            ->method('takeDamage')
            ->with($this->logicalOr($this->greaterThanOrEqual(1), $this->lessThanOrEqual(10)));

        $this->ship->attack($defender);
    }

    public function testShouldHaveHitPoints()
    {
        $this->assertSame(20, $this->ship->hitPoint());
    }

    public function testShouldAbsorbDamageUpTo5()
    {
        $this->ship->takeDamage(20);
        $this->assertSame(5, $this->ship->hitPoint());
    }
}
 