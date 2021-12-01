<?php
// Página 387

class UniversalConnect 
{
    private $server = 'localhost';
    private $currentDB = 'cms';
    private $user = 'uname';
    private $pass = 'password';
    private $hookup;

    public function __construct()
    {
        try 
        {
            $this->hookup = new PDO("mysql:host=".$this->server.";dbname=".$this->currentDB ."", $this->user, $this->pass);
            $this->hookup->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connected" . "<br>";
        }
        catch (PDOException $ex)
        {
            echo ('Here is why failed: ' . $ex->getMessage());
        }
    } 

    public function exec($query)
    {
        return $this->hookup->exec($query);
    }

    public function prepare($prep)
    {
        return $this->hookup->prepare($prep);
    }
}
