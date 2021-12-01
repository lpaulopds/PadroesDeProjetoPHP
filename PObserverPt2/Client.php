<?php
// Página 384

function my_autoload($pClassName)
{
    include(__DIR__ . "/" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");

class Client
{
    public function __construct()
    {
        $sub = new ConcreteSubject();

        $ob1 = new ConcreteObserverPhone();
        $ob2 = new ConcreteObserverTablet();
        $ob3 = new ConcreteObserverDT();

        $sub->attachObser($ob1);
        $sub->attachObser($ob2);
        $sub->attachObser($ob3);

        $sub->setState("decoCar.png");
    }
}

$worker = new Client();
