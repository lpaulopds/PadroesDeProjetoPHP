<?php
// Página 257

require_once('IState.php');

class OnState implements IState
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function turnLightOn()
    {
        echo "<img src='lights/nada.png'>";
    }

    public function turnBrighter()
    {
        echo "<img src='lights/LampadaAcesa.png'>";
        $this->context->setState($this->context->getBrighterState());
    }

    public function turnBrightest()
    {
        echo "<img src='lights/nada.png'>";
    }

    public function turnLightOff()
    {
        echo "<img src='lights/nada.png'>";
    }
}
