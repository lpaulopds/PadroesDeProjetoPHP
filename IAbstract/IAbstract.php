<?php
// Página 76

abstract class IAbstract
{
    // Propriedade disponível a todas as implementações
    protected $valueNow;

    // Todas as implementações devem incluir os métodos a seguir:
    // Deve retonar um valor decimal
    abstract protected function giveCost();

    // Deve retornar um string
    abstract protected function giveCity();

    // Esta função concreta está disponível e todas as implementações da classe sem sobrescrita do conteúdo
    public function displayShow()
    {
        $stringCost = $this->giveCost();
        $stringCost = (string)$stringCost;
        $allTogether = ("Cost: $" . $stringCost . " for " . $this->giveCity());
        return $allTogether;
    }
}
