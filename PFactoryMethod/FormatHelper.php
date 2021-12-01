<?php
// Novas factories - Página 132
// Classe auxiliar

class FormatHelper
{
    private $topper;
    private $bottom;

    public function addTop()
    {
        $this->topper = "<!doctype html><html><head>
        <link rel='stylesheet' type='text/css' href='products.css'/>
        <meta charset='UTF-8'>
        <tittle>Map Factory</tittle>
        </head>
        <body>";
        return $this->topper;
    }

    public function closeUp()
    {
        $this->bottom = "</body></html>";
        return $this->bottom;
    }
}
