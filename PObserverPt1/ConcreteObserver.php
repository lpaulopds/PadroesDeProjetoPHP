<?php
// Página 378

require_once('ConcreteSubject.php');

class ConcreteObserver implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo $subject->getData() . "<br />" . PHP_EOL;
    }
}
