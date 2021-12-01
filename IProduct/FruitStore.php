<?php
// Página 51

require_once('IProduct.php');

class FruitStore implements IProduct
{
    public function apples()
    {
        return "FruitStore sez--We have apples." . PHP_EOL . "<br>";
    }

    public function oranges()
    {
        return "FruitStores sez--We have no citrus fruit." . PHP_EOL . "<br>";
    }
}
