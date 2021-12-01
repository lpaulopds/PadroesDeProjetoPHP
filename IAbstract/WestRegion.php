<?php
// Página 77

require_once('IAbstract.php');

class WestRegion extends IAbstract
{
    // Deve retornar um valor decimal
    protected function giveCost()
    {
        $solarSarvings = 2;
        $this->valueNow = 210.54 / $solarSarvings;
        return $this->valueNow;
    }

    // Deve retornar uma string
    protected function giveCity()
    {
        return "Rattlesnake Gulch";
    }
}
