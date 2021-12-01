<?php
// Fora do escopo do livro

require_once('Desktop.php');

class ClientDesk
{
    private $desktop;

    public function __construct()
    {
        $this->desktop = new Desktop();
        $this->desktop->formatCSS();
        $this->desktop->formatGraphics();
        $this->desktop->horizontalLayout();
        $this->desktop->closeHTML();
    }
}

$worker = new ClientDesk();
