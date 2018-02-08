<?php
/**
 * Created by PhpStorm.
 * User: Shahbaz Iqbal
 * Date: 2/8/18
 * Time: 1:09 PM
 */

class Monster
{
    protected $name;

    function __construct()
    {
        $this->name = "default";

    }

    function Monster($name)
    {
        $this->$name = $name;

    }

    function setName($name)
    {
        $this->Monster($name);

    }

    function getName()
    {
        return "$this->name";

    }

    function attack()
    {
        echo "$this->name is attacking";

    }
}