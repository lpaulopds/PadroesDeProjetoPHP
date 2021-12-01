<?php
// Página 118

require_once('Product.php');

class GraphicProduct implements Product
{
    private $mfgProduct;
    public function getProperties()
    {
        // $this->mfgProduct = "This is a graphic.<3";
        // return $this->mfgProduct;

        /* Acrescentando elementos gráficos - Página 119 */
        // $this->mfgProduct = "<!doctype html><html><head><meta charset='UTF-8' />";
        // $this->mfgProduct.= "<tittle>Map Factory</tittle>";
        // $this->mfgProduct.= "</head><body>";
        // $this->mfgProduct.= "<img src='mapa.jpeg'/>";
        // $this->mfgProduct.= "</body></html>";

        /* Alterando elemento gráfico - Página 124 */
        $this->mfgProduct = "<img style='padding: 10px 10px 10px 0px';
        src='mapa.jpeg' align='left' width='368' height='288'>";

        return $this->mfgProduct;
    }
}
