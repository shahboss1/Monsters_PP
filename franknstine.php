<?php
/**
 * Created by PhpStorm.
 * User: Shahbaz Iqbal & Bobby
 * Date: 2/8/18
 * Time: 1:49 PM
 */
ini_set('error_reporting', E_ALL);
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
    function attack()
    {
        echo "shoots fire";
    }

}