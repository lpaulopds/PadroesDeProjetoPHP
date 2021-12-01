<?php
// Página 62

require_once('FurryPets.php');

class Cats extends FurryPets
{
    function __construct()
    {
        echo "Cats " . $this->fourlegs() . PHP_EOL;
        echo $this->makeSound("Meow, purr") . PHP_EOL;
        echo $this->ownHouse() . PHP_EOL;
    }

    private function ownHouse()
    {
        return "I'll just walk on this keyboard." . PHP_EOL;
    }
}
