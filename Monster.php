<?php
/**
 * Created by PhpStorm.
 * User: Shahbaz Iqbal & Bobby
 * Date: 2/8/18
 * Time: 1:09 PM
 */
ini_set('error_reporting', E_ALL);
class Monster
{
    protected $name;

    function __construct($name = "No name")
    {
        $this->name = $name;

    }

    function setName($name)
    {
        $this->name = $name;

    }

    function getName()
    {
        return $this->name;

    }

    function attack()
    {
        //echo "$this->name is attacking";
        echo "<p>" . $this->name . " attacks!</p>";

    }
}