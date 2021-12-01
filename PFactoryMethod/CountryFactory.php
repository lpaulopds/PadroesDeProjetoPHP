<?php
// Novas factories - Página 127

require_once('Creator.php');
require_once('Product.php');

class CountryFactory extends Creator
{
    private $country;
    protected function factoryMethod(Product $product)
    {
        $this->country = $product;
        return ($this->country->getProperties());
    }
}
