<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Media Buying
 * Date: 20/05/13
 * Time: 11:30 PM
 * To change this template use File | Settings | File Templates.
 */

namespace testApp;

/**
 * Class NewClass
 * @package testApp
 */
/**
 * Class NewClass
 * @package testApp
 */
class NewClass
{
    /**
     * @var int
     */
    var $t;
    /**
     * @var int
     */
    var $y;
    /**
     * @var float
     */
    var $x;


    /**
     *
     */
    const C =9;

    /**
     * @param int $t
     * @param int $y
     */
    function __construct($t = 4, $y = 9)
    {
        $this->t = $t;
        $this->y = $y;
    }


    /**
     * @return float
     */
    function divide()
    {
        $this->x = $this->t / $this->y;
       return $this->x;
    }


    /**
     * @param int $i
     * @param int $r
     * @return int
     */
    function multi($i =0, $r=3)
    {
        return $r;
    }

}