<?php
// Página 191
// Interface Component

abstract class IComponent
{
    protected $site;
    abstract public function getSite();
    abstract public function getPrice();
}
