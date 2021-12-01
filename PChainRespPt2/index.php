<?php
// Página 357
// Arquivo de acionamento
// Este arquivo poder ser substituído, colocando este código para encapsular a classe Client

function my_autoload($pClassName)
{
    include(__DIR__ . "/" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");

$worker = new Client();
