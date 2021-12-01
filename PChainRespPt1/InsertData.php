<?php
// Página 346

require_once('UniversalConnect.php');

class InsertData
{
    private $tableMaster;
    private $hookup;
    private $sql;

    public function __construct()
    {
        $this->tableMaster = "helpdesk";
        $this->hookup = new UniversalConnect();

        $chain = $_POST['chain'];
        $response = $_POST['response'];

        if (empty($_POST['chain']) || empty($_POST['response']))
        {
            die('Preencha todos os campos de formulário');
        }

        $parametros = [
            ':chain' => filter_var($chain, FILTER_SANITIZE_SPECIAL_CHARS),
            ':response' => filter_var($response, FILTER_SANITIZE_SPECIAL_CHARS)
        ];

        $this->sql = $this->hookup->prepare("INSERT INTO $this->tableMaster VALUES (0, :chain, :response)", $parametros);

        try
        {
            $this->sql->execute($parametros);
            printf("Chain query: %s <br/>Response %s <br/> have been inserted into %s.", $chain, $response, $this->tableMaster);
        }
        catch (PDOException $e)
        {
            printf("Invalid query: %s <br/> Whole query: %s <br/>", $this->sql->error ,$e);
        }

        $this->hookup = NULL;
    } 
}

$worker = new InsertData();
