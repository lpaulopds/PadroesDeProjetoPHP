<?php
// Fora do escopo do livro

require_once('Product.php');

class C8 implements Product
{
    private $mfgProduct;
    private $formatHelper;
    private $countryNow;

    public function getProperties()
    {
        // Carrega o texto a partir de um arquivo de texto externo
        $this->countryNow = file_get_contents("clue.txt");
        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();

        // Carrega imagens
        $this->mfgProduct .= "<img src='map.png'>";
        $this->mfgProduct .= "<img class='pixLeft' src='pic.png'>";
        $this->mfgProduct .= "<p>$this->countryNow</p>";
        $this->mfgProduct .= $this->formatHelper->closeUp();
        
        return $this->mfgProduct;
    }
}
