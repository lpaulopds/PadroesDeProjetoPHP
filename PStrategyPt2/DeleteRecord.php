<?php
// Página 337

class DeleteRecord implements IStrategy
{
    private $tableMaster;
    private $dataPack;
    private $hookup;
    private $sql;

    public function algorithm(array $dataPack)
    {
        $this->tableMaster = IStrategy::TABLENOW;
        $this->hookup = new UniversalConnect();

        $this->dataPack = $dataPack;
        $destroy = $this->dataPack[0];
        $destroy = intval($destroy);
        
        $this->sql = $this->hookup->prepare("DELETE FROM $this->tableMaster WHERE id='$destroy'");
        $this->sql->execute();
        printf("Record #$destroy removed from table: <b>$this->tableMaster</b>");

        $this->hookup = NULL;
    }
}
