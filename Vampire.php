<?php
/**
 * Created by PhpStorm.
 * User: SHABOSS
 * Date: 2/8/18
 * Time: 1:30 PM
 */

class Vampire extends Monster
{
    protected $victims;

    function __construct($name, $victims)
    {
        $this->$name = name;
        $victims = 0;

    }

    function vampire(){
        Monster.$this->setName("drac");
    }

    function attack()
    {
        echo "$this->name attacks!";
        $this->victims++;
    }

    function getVictims(){
        return $this->victims;
    }
}