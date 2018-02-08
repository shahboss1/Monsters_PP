<?php
/**
 * Created by PhpStorm.
 * User: SHABOSS
 * Date: 2/8/18
 * Time: 1:26 PM
 */

include ('franknstine.php');
include ('Vampire.php');

$monster = new Monster();
$monster->setName("Slender Man");
$monster->attack();

$vampire = new Vampire("Drac");
$vampire->attack();
$vampire->getVictims();

$franknstine = new franknstine(false);
$franknstine->lightFire();
$franknstine->getFire();







