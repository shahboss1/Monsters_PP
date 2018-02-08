<?php
/**
 * Created by PhpStorm.
 * User: SHABOSS
 * Date: 2/8/18
 * Time: 1:49 PM
 */

class franknstine extends Monster
{
    protected $fire;

    function __construct($fire)
    {
        $this->fire = false;
    }

    function franknstine(){
        Monster.$this->setName("Bob");
    }

    function lightFire(){
        $this->fire = true;
        echo "$this->name says AHHHHHHHH";
    }
    function getFire(){
        return $this->fire;
    }

}