<?php
// Página 383

class ConcreteObserverTablet implements Observer
{
    private $currentState;

    public function update(Subject $subject)
    {
        $this->currentState = $subject->getState();
        echo "<img src='$this->currentState'><br />";
    }
}
