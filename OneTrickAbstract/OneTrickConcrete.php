<?php
// Página 45
// Como implementar uma classe abstrata

require_once('OneTrickAbstract.php');

class OneTrickConcrete extends OneTrickAbstract
{
    public function trick($whatever)
    {
        // $this->storeHere = "An abstract property";
        // return $whatever . $this->storeHere;

        // Todos os códigos a seguir são implementações legítimas do método trick()
        // echo $whatever;

        // $whatever = 5; // Fora do escopo do livro
        // $half = $whatever/2;
        // return $half;

        $whatever = 5;  // Fora do escopo do livro
        $this->storehere = 25;
        $quarter = $whatever * 100;

        return ($quarter / $this->storehere);
    }
}


$worker = new OneTrickConcrete();
echo $worker->trick("From an abstract origin...");
