<?php
// Página 61

require_once('FurryPets.php');

class Dogs extends FurryPets
{
    function __construct()
    {
        echo "Dogs " . $this->fourlegs() . PHP_EOL;
        echo $this->makeSound("Woof, woof") . PHP_EOL;
        echo $this->guardsHouse() . PHP_EOL;
    }

    private function guardsHouse()
    {
        return "Grrrr" . PHP_EOL;
    }
}
