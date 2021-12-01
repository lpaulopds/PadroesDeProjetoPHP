<?php
// Página 252

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
        echo "Lights on! Now I can see!<br/>";
        $this->context->setState($this->context->getOnState());
    }

    public function turnLightOff()
    {
        echo "Light is already off -> take no action<br/>";
    }
}
