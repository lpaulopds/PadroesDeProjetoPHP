<?php
// Página

require_once('IMatrix.php');

class Cell7State implements IMatrix
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function goLeft()
    {
        // Movimento não permitido
    }

    public function goRight()
    {
        echo "<img src='cells/eight.png'>";
        $this->context->setState($this->context->getCell8State());
    }

    public function goUp()
    {
        echo "<img src='cells/four.png'>";
        $this->context->setState($this->context->getCell4State());
    }

    public function goDown()
    {
        // Movimento não permitido
    }
}
