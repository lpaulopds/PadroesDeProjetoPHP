<?php
// Página 388

require_once('UniversalConnect.php');

class CreateTable
{
    private $tableMaster;
    private $hookup;

    public function __construct()
    {
        $this->tableMaster = 'infos';
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
            $sql = "CREATE TABLE $this->tableMaster(id SERIAL, dpHeader NVARCHAR(50), textBlock TEXT, imageURL NVARCHAR(60), PRIMARY KEY (id))";
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
