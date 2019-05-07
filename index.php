<?php

require_once "./class/character.php";

$michel = new Personnage(10, 27, 527, 3);
$monique = new Personnage(8, 40, 400, 2);


echo $michel->getHealth();