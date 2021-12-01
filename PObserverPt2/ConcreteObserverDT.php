<?php
// Página 383

class ConcreteObserverDT implements Observer
{
    public function update(Subject $subject)
    {
        $this->currentState = $subject->getState();
        echo "<img src='$this->currentState'><br/>";
    }
}
