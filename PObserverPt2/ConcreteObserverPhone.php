<?php
// Página 384

require_once('ConcreteSubject.php');

class ConcreteObserverPhone implements Observer
{
    private $currentState;

    public function update(Subject $subject)
    {
        $this->currentState = $subject->getState();
        echo "<img src='$this->currentState'><br />";
    }
}
