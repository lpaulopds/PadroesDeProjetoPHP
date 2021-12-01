<?php
// Página 285
// Primeiro faça uma conexão com banco de dados.
// Em seguida, execute este script antes de submeter o formulário da página 287, ele vai criar a tabela no banco de dados conectado.
 
require_once('UniversalConnect.php');

class CreateTable
{
    private $tableMaster;
    private $hookup;

    public function __construct()
    {
        $this->tableMaster = "proxyLog";
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
            $sql = "CREATE TABLE $this->tableMaster(id INT(10) AUTO_INCREMENT, uname NVARCHAR(15), pw NVARCHAR(120), PRIMARY KEY(id))";
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
