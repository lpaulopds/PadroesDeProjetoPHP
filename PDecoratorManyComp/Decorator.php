<?php
// Página 203
// Participante Decorator

require_once('IComponent.php');

abstract class Decorator extends IComponent
{
    public function setAge($ageNow)
    {
        $this->ageGroup = $ageNow;
    }

    public function getAge()
    {
        return $this->ageGroup;
    }
}
