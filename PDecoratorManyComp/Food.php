<?php
// Página 206
// Decorador concreto

require_once('Decorator.php');

class Food extends Decorator
{
    private $showNow;

    public function __construct(IComponent $dateNow)
    {
        $this->date = $dateNow;
    }

    private $snacks = array
    (
        "piz" => "pizza",
        "burg" => "Burgers",
        "nach" => "Nacho",
        "veg" => "Veggies"
    );

    public function setFeature($yum)
    {
        $this->showNow = $this->snacks[$yum];
    }

    public function getFeature()
    {
        $output = $this->date->getFeature();
        $fmat = "<br/>&nbsp;&nbsp;";
        $output .= "$fmat Favorite food: ";
        $output .= $this->showNow;

        return $output;
    }
}
