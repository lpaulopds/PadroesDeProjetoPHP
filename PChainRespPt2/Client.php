<?php
// Página 358
// index.php atua como acionador

class Client
{
    private $queryNow;
    private $dateNow;

    public function __construct()
    {
        // Obtém a data e fuso horário selecionado
        // Consulta php.net/manual/en/timezones.php
        $tz = 'America/New_York';
        date_default_timezone_set($tz);
        $this->queryNow = getdate();
        $d1 = new D1();
        $d2 = new D2();
        $d3 = new D3();
        $d4 = new D4();
        $d5 = new D5();
        $d6 = new D6();
        $d7 = new D7();
        $d8 = new D8();
        $d9 = new D9();
        $d10 = new D10();
        $d11 = new D11();
        $d12 = new D12();
        $d1->setSuccessor($d2);
        $d2->setSuccessor($d3);
        $d3->setSuccessor($d4);
        $d4->setSuccessor($d5);
        $d5->setSuccessor($d6);
        $d6->setSuccessor($d7);
        $d7->setSuccessor($d8);
        $d8->setSuccessor($d9);
        $d9->setSuccessor($d10);
        $d10->setSuccessor($d11);
        $d11->setSuccessor($d12);
        $d12->setSuccessor($d1);
        
        // Gera e processa as solicitações carregadas
        $loadup = new Request($this->queryNow);
        $d1->handleRequest($loadup);
    }
}
