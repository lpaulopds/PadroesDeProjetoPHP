<?php
// Página 269

require_once('IMatrix.php');

class Cell3State implements IMatrix
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function goLeft()
    {
        echo "<img src='cells/two.png'>";
        $this->context->setState($this->context->getCell2State());
    }

    public function goRight()
    {
        // Movimento não permitido
    }

    public function goUp()
    {
        // Movimento não permitido
    }

    public function goDown()
    {
        echo "<img src='cells/six.png'>";
        $this->context->setState($this->context->getCell6State());
    }
}
