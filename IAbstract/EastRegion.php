<?php
// Página 79

require_once('IAbstract.php');

class EastRegion extends IAbstract
{
    // Deve retorar um valor decimal
    protected function giveCost()
    {
        $solarSarvings = 2;
        $this->valueNow = 320.41 / $solarSarvings;
        return $this->valueNow;
    }

    // Deve retornar uma string
    protected function giveCity()
    {
        return "Rocklattle City";
    }
}
