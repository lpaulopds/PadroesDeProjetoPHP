<?php
// Página 293

require_once('ISubject.php');
require_once('RealSubject.php');
require_once('UniversalConnect.php');

class Proxy implements ISubject
{
    private $tableMaster;
    private $hookup;
    private $logGood;
    private $realSubject;

    public function login($uNow, $pNow)
    {
        // Filtrado pelo Client; cria senha e hash
        $uname = $uNow;
        $pw = md5($pNow);
        $this->logGood = false;

        // Seleciona a tabela e faz a conexão
        $this->tableMaster = "proxyLog";
        $this->hookup = new UniversalConnect();

        // Cria instrução MySQL
        $sql = "SELECT pw FROM $this->tableMaster WHERE uname='$uname'";
        $stmt = $this->hookup->prepare($sql);

        if ($stmt->execute())
        {
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            if ($row->pw == $pw)
            {
                $this->logGood = true;
            }
        }
        elseif (!$stmt->execute())
        {
            echo $stmt->execute->error_reporting;
        }

        $this->hookup = NULL;

        if ($this->logGood = true)
        {
            $this->request();
        }
        else
        {
            require_once('login.html');
        }
    }

    public function request()
    {
        $this->realSubject = new RealSubject();
        $this->realSubject->request();
    }
}
