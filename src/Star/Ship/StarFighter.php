<?php
/**
 * This file is part of the starship project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Ship;

use Star\StarShip;

/**
 * Class StarFighter
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Ship
 */
class StarFighter implements StarShip
{
    /**
     * @var int
     */
    private $hitPoint;

    public function __construct()
    {
        $this->hitPoint = $this->getMaxHitPoint();
    }

    public function attack(StarShip $ship)
    {
        $ship->takeDamage(mt_rand(1, 10));
    }

    protected function getMaxHitPoint()
    {
        return 20;
    }

    /**
     * @return int
     */
    protected function absorbScore()
    {
        return 5;
    }

    /**
     * @return int
     */
    public function hitPoint()
    {
        return $this->hitPoint;
    }

    /**
     * @param int $damage
     */
    public function takeDamage($damage)
    {
        $realDamage = ($damage - $this->absorbScore());

        if ($realDamage > 0) {
            $this->hitPoint = $this->hitPoint - $realDamage;
        }
    }
}
 