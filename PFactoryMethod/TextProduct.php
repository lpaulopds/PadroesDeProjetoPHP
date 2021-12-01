<?php
// Página 117

require_once('Product.php');

class TextProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        // $this->mfgProduct = "This is text.";
        // return $this->mfgProduct;

        /*  Acrescentando produto do tipo texto (não foi utilizado heredoc) - Página 123 */
        // Começa a formatação heredoc
        $this->mfgProduct = "<!doctype html><html><head><meta charset='UTF-8' />";
        $this->mfgProduct .= "<style>
            body { margin: 0; padding: 32px; }
            header { color: #900; font-weight: bold; font-size: 24px; margin-top: 8px; }
            p { font-size: 14px; letter-spacing: 1px; line-height: 24px; max-width: 860px; }
        </style>";
        $this->mfgProduct .= "</head><body>";
        $this->mfgProduct .= "<header>Brazil</header>";
        $this->mfgProduct .= "<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>";
        $this->mfgProduct .= "</body></html>";

        return $this->mfgProduct;
    }
}
