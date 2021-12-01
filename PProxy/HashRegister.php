<?php
// Página 286

require_once('UniversalConnect.php');

class HashRegister
{
    private $tableMaster;
    private $hookup;
    private $sql;

    public function __construct()
    {
        $this->tableMaster = "proxyLog";                                                                   
        $this->hookup = new UniversalConnect();

        if (empty($_POST['uname']) || empty($_POST['pw']))
        {
            die('Preencha todos os campos de formulário');
        }

        $parametros = [
            ':uname' => filter_var($_POST['uname'], FILTER_SANITIZE_SPECIAL_CHARS),
            ':pw' => filter_var($_POST['pw'], FILTER_SANITIZE_SPECIAL_CHARS)
        ];

        $this->sql = $this->hookup->prepare("INSERT INTO $this->tableMaster VALUES (0, :uname, md5(:pw))", $parametros);
        $this->sql->execute($parametros) / require_once('insertedRecord.php') ?: require_once('registration.html');
        $this->hookup = NULL;
    }
}

$worker = new HashRegister();
