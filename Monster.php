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

    function _construct($name)
    {
        $this->$name = $name;

    }

    function Monster()
    {

    }

    function setName()
    {

    }

    function getName()
    {

    }

    function attack()
    {
        echo "$this->name is attacking";

    }
}