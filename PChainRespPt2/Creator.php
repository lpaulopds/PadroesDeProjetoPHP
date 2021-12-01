<?php
// Página 362

abstract class Creator
{
    protected $countryProduct;

    protected abstract function factoryMethod(Product $product);

    public function feedFactory(Product $productNow)
    {
        $this->countryProduct = $productNow;
        $mfg = $this->factoryMethod($this->countryProduct);
        return $mfg;
    }
}
