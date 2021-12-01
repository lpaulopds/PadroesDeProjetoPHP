<?php
// Padrão Prototype - Página 139

abstract class CloneMe
{
    public $name;
    public $picture;
    abstract function __clone();
}

class Person extends CloneMe
{
    public function __construct()
    {
        $this->picture = "cloneMan.png";
        $this->name = "Original";
    }

    public function display()
    {
        echo "<img src='$this->picture' width='162px'>";
        echo "<br /><p>$this->name <p />";
    }

    function __clone() {}
}

$worker = new Person;
$worker->display();

$slacker = clone $worker;
$slacker->name="Cloned";
$slacker->display();
