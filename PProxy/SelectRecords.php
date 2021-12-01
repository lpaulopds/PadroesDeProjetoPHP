<?php
// Fora do escopo do livro

require_once('UniversalConnect.php');

class SelectRecords
{
    private $tableMaster;
    private $hookup;

    public function __construct()
    {
        $this->tableMaster = "proxyLog";
        $this->hookup = new UniversalConnect();

        $sql = "SELECT * FROM $this->tableMaster";
        $stmt = $this->hookup->prepare($sql);
        $stmt->execute();

        if ($stmt->fetch(PDO::FETCH_OBJ))
        {
            require_once('records.php');
        }
        else
        {
            echo "Error in data selection";
            die();
        }

        $this->hookup = NULL;
    }
}

$worker = new SelectRecords();
