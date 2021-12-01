<?php
// Página 248

class Context
{
    private $offState;
    private $onState;
    private $currentState;

    public function __construct()
    {
        // O ($this) é um tipo de recursão conhcecido como autorreferência (self-referral). Que é uma referência a própria classe.
        $this->offState = new OffState($this);
        $this->onState = new OnState($this);
        // Estado inicial é Off (apagado)
        $this->currentState = $this->offState;
    }

    // Chama o método de Estado--acionadores
    public function turnOnLight()
    {
        $this->currentState->turnLightOn();
    }

    public function turnOffLight()
    {
        $this->currentState->turnLightOff();
    }

    // Define o estado corrente
    public function setState(IState $state)
    {
        $this->currentState = $state;
    }

    // Obtém os estados
    public function getOnState()
    {
        return $this->onState;
    }

    public function getOffState()
    {
        return $this->offState;
    }
}
