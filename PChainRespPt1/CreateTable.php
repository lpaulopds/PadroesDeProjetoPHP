<?php
// Página 344
include_once('UniversalConnect.php');

class CreateTable
{
    private $tableMaster;
    private $hookup;

    public function __construct()
    {
        $this->tableMaster = 'helpdesk';
        $this->hookup = new UniversalConnect();
        $drop = "DROP TABLE IF EXISTS $this->tableMaster";

        try
        {
            $this->hookup->exec($drop);
            echo 'Old table: '. $this->tableMaster. ' has dropped.<br>'; 
        }
        catch (PDOException $e)
        {
            echo $drop . $e->getMessage();
        }

        try
        {
            $sql = "CREATE TABLE $this->tableMaster(id SERIAL, chain NVARCHAR(50), response TEXT, PRIMARY KEY (id))";
            $this->hookup->exec($sql);
            echo "Table $this->tableMaster has been created successfully.<br>";
        }
        catch (PDOException $e)
        {
            echo $sql . $e->getMessage();
        }

        $this->hookup = null;
    }
}

$worker = new CreateTable();
