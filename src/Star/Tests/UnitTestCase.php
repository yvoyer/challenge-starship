<?php
/**
 * This file is part of the starship project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Tests;

use Star\StarShip;

/**
 * Class UnitTestCase
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Tests
 */
class UnitTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @return \PHPUnit_Framework_MockObject_MockObject|StarShip
     */
    protected function getMockStarShip()
    {
        return $this->getMock('Star\StarShip');
    }
}
 