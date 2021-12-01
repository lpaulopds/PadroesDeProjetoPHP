<?php
// Página 336

class UpdateData implements IStrategy
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
        $changeField = $this->dataPack[0];
        $oldData = $this->dataPack[1];
        $newData = $this->dataPack[2];

        $this->sql = $this->hookup->prepare("UPDATE $this->tableMaster SET $changeField = '$newData' WHERE $changeField = '$oldData'");
        $this->sql->execute();

        printf("$changeField changed from <b>$oldData</b> to: <b>$newData</b>");

        $this->hookup = NULL;
    }
}
