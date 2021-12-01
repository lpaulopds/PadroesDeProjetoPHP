<?php
// Página 291

require_once('Proxy.php');
// require_once('ISubject.php');

class Client
{
    private $proxy;
    private $un;
    private $pw;

    public function __construct()
    {
        $this->tableMaster = "proxyLog";
        $this->hookup = new UniversalConnect();
        $this->un = $this->hookup = $_POST['uname'];
        $this->pw = $this->hookup = $_POST['pw'];
        $this->getIface($this->proxy = new Proxy());
    }

    private function getIface(ISubject $proxy)
    {
        $this->proxy->login($this->un, $this->pw);
    }
}

$worker = new Client();
