<?php
// Página 78

require_once('NorthRegion.php');
require_once('WestRegion.php');
require_once('EastRegion.php');
require_once('SouthRegion.php');

class Client
{
    public function __construct()
    {
        $north = new NorthRegion();
        $west = new WestRegion();
        $east = new EastRegion();
        $south = new SouthRegion();

        $this->showInterface($north);
        $this->showInterface($west);
        $this->showInterface($east);
        $this->showInterface($south);
    }

    private function showInterface(IAbstract $region)
    {
        echo $region->displayShow() . PHP_EOL . "<br>";
    }
}

$worker = new Client();
