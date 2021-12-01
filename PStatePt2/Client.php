<?php
// Página 261

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
        $this->context->turnOffLight();
        $this->context->turnOnLight();
        $this->context->turnBrighterLight();
        $this->context->turnBrightestLight();
        $this->context->turnOffLight();
        // $this->context->turnBrightestLight();
    }    
}

$worker = new Client();
