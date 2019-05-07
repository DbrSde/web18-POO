<?php

date_default_timezone_set('Europe/Paris');

require_once './functions/classAutoLoader.php';

log::logWrite("Mets des commentaires !");

require_once "./class/character.php";
require_once "./class/Magicien.php";


$michel = new Personnage(10, 27, 527, 3);
$monique = new Personnage(8, 40, 400, 2);


$merlin = new Magicien(50, 80, 800, 1);
var_dump($merlin);