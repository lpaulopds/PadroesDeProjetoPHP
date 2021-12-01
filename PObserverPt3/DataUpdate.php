<?php
// Página 391

require_once('UniversalConnect.php');

class DataUpdate
{
    private $tableMaster;
    private $hookup;
    private $sql;

    public function __construct()
    {
        $this->tableMaster = "infos";
        $this->hookup = new UniversalConnect();

        if (empty($_POST['dpUpdate']) || empty($_POST['newData'])) {
            die('Preencha todos os campos de formulário');
        }

        $parametros = [
            ':dpUpdate' => filter_var($_POST['dpUpdate'], FILTER_SANITIZE_SPECIAL_CHARS),
            ':newData' => filter_var($_POST['newData'], FILTER_SANITIZE_SPECIAL_CHARS)
        ];

        $changeField = "textBlock";

        $this->sql = $this->hookup->prepare("UPDATE $this->tableMaster SET $changeField = :newData WHERE dpHeader = :dpUpdate", $parametros);
        $this->sql->execute($parametros);

        echo "<b>Design Pattern Name:</b><br>" . $_POST['dpUpdate'] . "<hr><br>";
        echo "<b>Wirte up for desgin pattern:</b><br>" . $_POST['newData'] . "<hr><br>";

        $this->hookup = null;
    }
}

$worker = new DataUpdate();
