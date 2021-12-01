<?php
// Página 314

class UniversalConnect
{
    private $server = 'localhost';
    private $currentDB = 'strategytwo';
    private $user = 'user_strategytwo';
    private $pass = 'hnHAU2897doKOknj';
    private $hookup;

    public function __construct()
    {
        try 
        {
            $this->hookup = new PDO("mysql:host=".$this->server.";dbname=".$this->currentDB ."", $this->user, $this->pass);
            $this->hookup->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Debug
            // echo "connected" . "<br>";
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

// Debug
// $worker = new UniversalConnect();
