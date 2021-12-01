<?php
// Página 331

class DataEntry implements IStrategy
{
    private $tableMaster;
    private $dataPack;
    private $hookup;
    private $sql;
    public function algorithm(Array $dataPack)
    {
        $this->dataPack = $dataPack;
        $comval = $this->dataPack[0];
        $devdesval = $this->dataPack[1];
        $langval = $this->dataPack[2];
        $platval = $this->dataPack[3];
        $styleval = $this->dataPack[4];
        $deviceval = $this->dataPack[5];

        $this->tableMaster = IStrategy::TABLENOW;
        $this->hookup = new UniversalConnect();

        $this->sql = $this->hookup->prepare("INSERT INTO $this->tableMaster(company, devdes, lang, plat, style, device) VALUES ('$comval', '$devdesval', '$langval', '$platval', '$styleval', '$deviceval')");
        $this->sql->execute();

        printf("Company: <b>$comval</b> added.");

        $this->hookup = NULL;
    }
}
