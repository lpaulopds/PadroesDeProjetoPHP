<?php
// Página 77

require_once('IAbstract.php');

class NorthRegion extends IAbstract
{
    // Deve retorar um valor decimal
    protected function giveCost()
    {
        return 210.54;
    }

    // Deve retornar uma string
    protected function giveCity()
    {
        return "Moose Breath";
    }
}
