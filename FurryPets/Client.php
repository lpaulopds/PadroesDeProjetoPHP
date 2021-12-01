<?php
// Página 62

require_once('Dogs.php');
require_once('Cats.php');

class Client
{
    function __construct()
    {
        $dogs = new Dogs();
        $cats = new Cats();
    }
}

$worker = new Client();
