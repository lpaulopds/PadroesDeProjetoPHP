<?php
// Página 191
// Participante Decorator

require_once('IComponent.php');

abstract class Decorator extends IComponent
{
    // Herda getSite() e getPrice()
    // Esta continua sendo uma classe abstrata e não há necessidade de implemntar nenhum dos métodos abstratos aqui
    // Seu trabalho consiste em manter referência a Component

    public function getSite() { }
    public function getPrice() { }
}
