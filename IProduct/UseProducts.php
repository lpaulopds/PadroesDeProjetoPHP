<?php
// Página 52

require_once('FruitStore.php');
require_once('CitrusStore.php');

// O resultado de UseProducts são diferentes
// implementações da interface IProduct.
// No método doInterface, a indução de tipo para IProduct
// faz com ambas as classes que implementam a interface 
// IProduct sejam reconhecidas.
class UseProducts
{
    public function __construct()
    {
        $appleSauce = new FruitStore();
        $orangeJuice = new CitrusStore();
        $this->doInterface($appleSauce);
        $this->doInterface($orangeJuice);
    }

    function doInterface(IProduct $product)
    {
        echo $product->apples();
        echo $product->oranges();
    }
}

$worker = new UseProducts();
