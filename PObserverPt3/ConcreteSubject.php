<?php
// Página 400

require_once('UniversalConnect.php');

class ConcreteSubject extends Subject
{
    private $hookup;
    private $tableMaster;
    private $designPattern;
    private $stateSet = array();

    public function setState($dpNow)
    {
        $this->designPattern = strtolower($dpNow);
        $this->tableMaster = "infos";
        $this->hookup = new UniversalConnect();
        
        // Cria instrução para consulta
        $sql = "SELECT * FROM $this->tableMaster WHERE dpHeader = '$this->designPattern'";
        $stmt = $this->hookup->prepare($sql);

        // Adiciona dados apropriados da tabela MySQL ao array $stateSet
        if ($stmt->execute())
        {
            while($row = $stmt->fetch(PDO::FETCH_OBJ))
            {
                $this->stateSet[0] = $row->dpHeader;
                $this->stateSet[1] = $row->textBlock;
                $this->stateSet[2] = $row->imageURL;
            }

            $stmt = NULL;
        }

        $this->hookup = NULL;
        // O método update() faz parte de notify(), implementado em Subject como método concreto
        $this->notify();
    }

    public function getState()
    {
        return $this->stateSet;
    }
}
