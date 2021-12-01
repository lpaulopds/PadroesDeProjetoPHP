<?php
// Página 319

require_once('UniversalConnect.php');

class CreateTable
{
    private $tableMaster;
    private $hookup;

    public function __construct()
    {
        $this->tableMaster = "survey";
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
            $sql = "CREATE TABLE $this->tableMaster(
                id SERIAL,
                company NVARCHAR(40),
                devdes NVARCHAR(10),
                lang NVARCHAR(15),
                plat NVARCHAR(15),
                style NVARCHAR(20),
                device NVARCHAR(10),
                PRIMARY KEY (id)
            )";
            $this->hookup->exec($sql);
            echo "Table $this->tableMaster has been created successfully.<br>";
        }
        catch (PDOException $e)
        {
            echo $sql . $e->getMessage();
        }

        $this->hookup = NULL;
    }
}

$worker = new CreateTable();
