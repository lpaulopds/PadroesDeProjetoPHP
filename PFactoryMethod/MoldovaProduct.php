<?php
// Novas factories - Página 134

require_once('FormatHelper.php');
require_once('Product.php');

class MoldovaProduct implements Product
{
    private $mfgProduct;
    private $formatHelper;
    private $countryNow;

    public function getProperties()
    {
        // Carrega o texto apartir de um arquivo de texto externo
        $this->countryNow = file_get_contents("Moldova.txt");
        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct .= "<img src='mapa.jpeg' class='pixRight' width='368' height='288'>";
        $this->mfgProduct .= "<header>Moldova</header>";
        $this->mfgProduct .= "<p>$this->countryNow</p>";
        $this->mfgProduct .= $this->formatHelper->closeUp();

        return $this->mfgProduct;
    }
}
