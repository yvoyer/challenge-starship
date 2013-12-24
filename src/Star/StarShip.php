<?php
/**
 * This file is part of the starship project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star;

/**
 * Class StarShip
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star
 */
interface StarShip
{
    /**
     * @return int
     */
    public function hitPoint();

    /**
     * @param int $damage
     */
    public function takeDamage($damage);
}
 