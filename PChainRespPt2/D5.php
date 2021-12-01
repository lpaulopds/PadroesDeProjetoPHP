<?php
// Fora do escopo do livro

require_once('Handler.php');

class D5 extends Handler
{
    public function setSuccessor($nextService)
    {
        $this->successor = $nextService;
    }

    public function handleRequest($request)
    {
        $dateCheck = $request->getService();
        $this->monthNow = intval($dateCheck['mon']);
        $this->dayNow = intval($dateCheck['mday']);
        
        // $this->handleNow é um booleano baseado em uma expressão booleana com intervalos de datas
        $this->handleNow = ($this->monthNow == 5 && $this->dayNow >= 1) && ($this->monthNow == 5 && $this->dayNow <= 31);

        if ($this->handleNow)
        {
            $this->hungerFactory = new HungerFactory();
            echo $this->hungerFactory->feedFactory(new C5());
        }
        elseif ($this->successor != NULL)
        {
            $this->successor->handleRequest($request);
        }
    }
}
