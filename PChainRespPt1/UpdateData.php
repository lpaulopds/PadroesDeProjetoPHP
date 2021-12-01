<?php
// Página 347

require_once('UniversalConnect.php');

class UpdateData
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

        $changeField = 'response';

        $this->sql = $this->hookup->prepare("UPDATE $this->tableMaster SET $changeField = :response WHERE chain = :chain", $parametros);

        try 
        {
            $this->sql->execute($parametros);
            printf("Chain query: %s <br/>Response: %s <br/> have been updated into %s.", $chain, $response, $this->tableMaster);
        }
        catch (PDOException $e)
        {
            printf("Invalid query: %s <br/> Whole query: %s <br/>", $e);
        }

        $this->hookup = NULL;
    }
}

$worker = new UpdateData();
