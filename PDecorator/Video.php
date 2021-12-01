<?php
// Página 194
// Decorador concreto

require_once('Decorator.php');

class Video extends Decorator
{
    public function __construct(IComponent $siteNow) 
    {
        $this->site = $siteNow;
    }

    public function getSite()
    {
        $fmat = "<br/>&nbsp;&nbsp; Video ";
        return $this->site->getSite() . $fmat;
    }

    public function getPrice()
    {
        return 350 + $this->site->getPrice();
    }
}
