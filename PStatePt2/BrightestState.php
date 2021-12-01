<?php
// Página 258

require_once('IState.php');

class BrightestState implements IState
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
        echo "<img src='lights/nada.png'>";
    }

    public function turnBrightest()
    {
        echo "<img src='lights/nada.png'>";
    }

    public function turnLightOff()
    {
        echo "<img src='lights/LampadaApagada.png'>";
        $this->context->setState($this->context->getOffState());
    }
}
