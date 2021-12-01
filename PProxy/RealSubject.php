<?php
// Página 294

require_once('ISubject.php');

class RealSubject implements ISubject
{
    public function request()
    {
        // O REQUEST como descrito no livro não funcionou.
        require_once('listaPOO.html');
        require_once('SelectRecords.php');
    }
}
