<?php

require_once "./class/character.php";

$michel = new Personnage();
$michel->level = 10;
$michel->health = 27;
$michel->strong = 527;
$michel->maxSpeed = 3;

$monique = new Personnage();
$monique->level = 8;
$monique->health = 40;
$monique->strong = 400;
$monique->maxSpeed = 2;

echo $michel->getHealth();