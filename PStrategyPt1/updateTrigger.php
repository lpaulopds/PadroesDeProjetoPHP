<?php
// Página 308

function my_autoload($pClassName)
{
    include(__DIR__ . "/" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");

$trigger = new Client();
$trigger->changeData();
