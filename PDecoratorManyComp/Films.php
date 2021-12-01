<?php
// Página 217 - Exercício
// Decorador concreto

require_once('Decorator.php');

class Films extends Decorator
{
    private $filmNow;

    public function __construct(IComponent $dateNow)
    {
        $this->date = $dateNow;
    }

    private $movies = array
    (
        "act" => "Action",
        "rmc" => "Romance",
        "sf" => "Science Fiction",
        "msc" => "Musicals"
    );

    public function setFeature($mvs)
    {
        $this->filmNow = $this->movies[$mvs];
    }

    public function getFeature()
    {
        $output = $this->date->getFeature();
        $fmat = "<br/>&nbsp;&nbsp;";
        $output .= "$fmat Favorite Film: ";
        $output .= $this->filmNow . "<br/>";

        return $output;
    }
}
