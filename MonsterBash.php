<?php
/**
 * Created by PhpStorm.
 * User: Shahbaz Iqbal & Bobby
 * Date: 2/8/18
 * Time: 1:26 PM
 */
ini_set('error_reporting', E_ALL);
error_reporting(3);
include ('Monster.php');
include ('franknstine.php');
include ('Vampire.php');

$monster = new Monster("MikeBrosowski");
echo "<h5>Monsters name is: " .$monster->getName() . "</h5>";
echo "<h5>Changing monster name to Slender Man</h5>";
$monster->setName("Slender Man");
$monster->attack();

$vampire = new Vampire("Tom");
echo "<h5>Vampire name is: " .$vampire->getName() . "</h5>";
echo "<h5> Victims name is: " .$vampire->getVictims() . "</h5>";
$vampire->attack();
echo "<h5>Number of Victims: " .$vampire->getVictims() . "</h5>";
$vampire->getVictims();

$franknstine = new franknstine(false);
$franknstine->lightFire();
$franknstine->getFire();
echo "<br>";
echo "<br>";
$franknstine->attack();