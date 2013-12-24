<?php
/**
 * This file is part of the starship project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Ship;

use Star\StarShip;

/**
 * Class Capital
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Ship
 */
class Capital extends StarFighter
{
    public function attack(StarShip $ship)
    {
        $ship->takeDamage(mt_rand(4, 20));
    }

    protected function getMaxHitPoint()
    {
        return 500;
    }

    /**
     * @return int
     */
    protected function absorbScore()
    {
        return 20;
    }
}
 