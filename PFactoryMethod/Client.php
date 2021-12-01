<?php
// Página 118

// require_once('GraphicFactory.php');
// require_once('TextFactory.php');

// class Client
// {
//     private $someGraphicObject;
//     // private $someTextObject;

//     public function __construct()
//     {
//         $this->someGraphicObject = new GraphicFactory();
//         echo $this->someGraphicObject->startFactory() . PHP_EOL;

//         $this->someTextObject = new TextFactory();
//         echo $this->someTextObject->startFactory() . PHP_EOL;
//     }
// }

// $worker = new Client();

// Novas factories - Página 130
require_once('CountryFactory.php');
require_once('KyrgyzstanProduct.php');
require_once('MoldovaProduct.php'); // MoldovaProduct - Página 134

class Client
{
    private $countryFactory;

    public function __construct()
    {
        $this->countryFactory = new CountryFactory();

        echo $this->countryFactory->doFactory(new KyrgyzstanProduct());
        echo $this->countryFactory->doFactory(new MoldovaProduct()); // MoldovaProduct - Página 134
    }
}

$worker = new Client();
