<?php
// Página 275

/**A figura 10.7 mostra o caminho seguido pelo Client;
 * ao observar o código do Client, procure visualizar os estados
 * em termos de movimentos pela matriz.
 * 
 * Começando na célula 5, o caminho inclui os seguintes movimentos:
 * 1.Para cima
 * 2.Para direita
 * 3.Para baixo
 * 4.Para baixo
 * 5.Para esquerda
 * 6.Para cima
 * 
 * O Client segue esses movimentos (transições de estado) para
 * criar o caminho indicado. Estabelecendo a Célula 5 como
 * padrão na classe Context, o Client faz os mesmos movimentos:
 */

function my_autoload($pClassName)
{
    include(__DIR__ . "/" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");

class Client
{
    private $context;

    public function __construct()
    {
        $this->context = new Context();
        $this->context->doUp();
        $this->context->doRight();
        $this->context->doDown();
        echo "<br/>";
        $this->context->doDown();
        $this->context->doLeft();
        $this->context->doUp();
    }
}

$worker = new Client();
