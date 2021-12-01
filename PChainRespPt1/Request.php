<?php
// Página 353

class Request
{
    private $value;

    public function __construct($service)
    {
        $this->value = $service;
    }

    public function getService()
    {
        return $this->value;
    }
}
