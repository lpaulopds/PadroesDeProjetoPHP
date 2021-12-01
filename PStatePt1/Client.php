<?php
// Página 254

function my_autoload($pClassName)
{
    include(__DIR__ . "/" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");

class Client
{
    private $context;

    public function __construct()
    {
        $this->context = new Context();
        $this->context->turnOnLight();
        $this->context->turnOnLight();
        $this->context->turnOffLight();
        $this->context->turnOffLight();
    }    
}

$worker = new Client();
