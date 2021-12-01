<?php
// Novas factories - Página 127

require_once('FormatHelper.php');
require_once('Product.php');

class KyrgyzstanProduct implements Product
{
    private $mfgProduct;
    private $formatHelper;

    public function getProperties()
    {
        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct .= <<<KYRGYZSTAN
        <img src='mapa.jpeg' class='pixRight' width='368' height='288'>
        <header>Kyrgyzstan</header>
        <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
        KYRGYZSTAN;
        $this->mfgProduct .= $this->formatHelper->closeUp();
        return $this->mfgProduct;
    }
}
