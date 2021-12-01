<?php
// Página 79

require_once('IAbstract.php');

class SouthRegion extends IAbstract
{
    // Deve retorar um valor decimal
    protected function giveCost()
    {
        return 284.87;
    }

    // Deve retornar uma string
    protected function giveCity()
    {
        return "Alabama Star";
    }
}
