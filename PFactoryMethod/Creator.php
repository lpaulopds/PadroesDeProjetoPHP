<?php
// Página 115
// Tarefa da factory

abstract class Creator
{
    // protected abstract function factoryMethod();
    // public function startFactory() {
    //     $mfg = $this->factoryMethod();
    //     return $mfg;
    // }

    // Novas factories - Página 127
    protected abstract function factoryMethod(Product $product);
    public function doFactory($productNow)
    {
        $countryProduct = $productNow;
        $mfg = $this->factoryMethod($countryProduct);
        return $mfg;
    }
}
