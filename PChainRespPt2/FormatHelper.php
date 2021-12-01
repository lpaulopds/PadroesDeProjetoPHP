<?php
// Página 366

class FormatHelper
{
    private $topper;
    private $bottom;

    public function addTop()
    {
        $this->topper = "<!DOCTYPE html>
        <html>
        <head>
        <link rel='stylesheet' type='text/css' href='products.css'/>
        <meta charset = 'UTF-8'>
        <title>Map Factory</title>
        </head>
        <body>
        <header>Hunger Country</header>";
        return $this->topper;
    }

    public function closeUp()
    {
        $this->bottom = "<br/><a href='Answer.html' target='_blank'>Click for credit</a>";
        $this->bottom .= "</body></html>";
        return $this->bottom;
    }
}
