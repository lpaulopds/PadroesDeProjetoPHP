<?php
// Página 256

require_once('IState.php');

class OffState implements IState
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function turnLightOn()
    {
        echo "<img src='lights/LampadaAcesa.png'>";
        $this->context->setState($this->context->getOnState());
    }

    public function turnBrighter()
    {
        echo "<img src='lights/nada.png'>";
    }

    public function turnBrightest()
    {
        echo "<img src='lights/nada.png'>";
    }

    public function turnLightOff()
    {
        echo "<img src='lights/LampadaApagada.png'>";
    }
}
