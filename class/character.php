<?php

// Nous créons une classe « Personnage ».
class Personnage
{
    public $level;
    public $health;
    public $strong;
    public $maxSpeed;

    public function __construct($a, $b,$c, $d) {
        $this->level = $a;
        $this->health = $b;
        $this->strong = $c;
        $this->maxSpeed = $d;
    }

    public function getHealth() {
        return $this->health;
    }
};

