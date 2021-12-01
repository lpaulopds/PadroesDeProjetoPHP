<?php
// Página 202
// Componente Male (Masculino) concreto

require_once('IComponent.php');

class Male extends IComponent
{
    public function __construct()
    {
        $this->date = "Male";
        $this->setFeature("<br/>Dude programmer features: ");
    }

    public function getAge()
    {
        return $this->ageGroup;
    }

    public function setAge($ageNow)
    {
        $this->ageGroup = $ageNow;
    }

    public function getFeature()
    {
        return $this->feature;
    }

    public function setFeature($fea)
    {
        $this->feature = $fea;
    }
}
