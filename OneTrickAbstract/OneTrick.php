<?php
// Página 43
// Para tornar uma classe abstrata ela precisa ter pelo meno um método abstrato
// Inclua 'abstract public function trick($whatever);' e a classe se torna abstrata

class OneTrick
{
    private $storeHere;

    public function trick($whatever)
    {
        $this->storeHere = $whatever;
        return $this->storeHere;
    }
}

$doIt = new OneTrick();
$dataNow = $doIt->trick("This is perfect.");
echo $dataNow;
