<?php
// Página 33
// Instancia da classe MobileSniffer com a classe Client 
// Habilite o relatório de erros no php.ini ou no início do código

ini_set("display_errors", "1");
ERROR_REPORTING(E_ALL);

require_once('MobileSniffer.php');

class Client
{
    private $mobSniff;

    public function __construct()
    {
        $this->mobSniff = new MobileSniffer();
        echo "Device = " . $this->mobSniff->findDevice() . "<br>";
        echo "Browser = " . $this->mobSniff->findBrowser() . "<br>";
    }
}

$strigger = new Client();
