<?php
// Página 307

function autoload($pClassName)
{
    include(__DIR__ . "/" . $pClassName . ".php");
}
spl_autoload_register("autoload");

$trigger = new Client();
$trigger->showAll();
