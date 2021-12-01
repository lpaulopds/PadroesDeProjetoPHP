<?php
// Página 362

require_once('Creator.php');
require_once('Product.php');

class HungerFactory extends Creator
{
    private $country;

    protected function factoryMethod(Product $product)
    {
        $this->country = $product;
        return($this->country->getProperties());
    }
}
