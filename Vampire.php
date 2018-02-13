<?php
/**
 * Created by PhpStorm.
 * User: SHABOSS
 * Date: 2/8/18
 * Time: 1:30 PM
 */
ini_set('error_reporting', E_ALL);
class Vampire extends Monster
{
    protected $victims;


    function __construct($name="Default", $victims=0)
    {
        $this->name = $name;
        $this->victims = $victims;
    }

    function attack()
    {
        echo "<p>" . $this->name . " attacks!</p>";
        $this->victims++;
    }

    function getVictims(){
        return $this->victims;
    }
}