<?php
// Limitação da função __clone - Página 141

class HelloClone
{
    private $builtInConstructor;

    public function __construct()
    {
        echo "Hello, clone!<br />" . PHP_EOL;
        $this->builtInConstructor = "Constructor creation<br />" . PHP_EOL;
    }
    public function doWork()
    {
        echo $this->builtInConstructor;
        echo "I'm doing the work!<p />";
    }
}

// Executa o construtor
$original = new HelloClone();
$original->doWork();

echo PHP_EOL;

// Clonagem não executa o construtor
$cloneIt = clone $original;
$cloneIt->doWork();
