<?php
// Página 146

function my_autoload($pClassName)
{
    include(__DIR__ . "/" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");

class Client
{
    // Para instanciação direta
    private $fly1;
    private $fly2;

    // Para clonagem
    private $c1Fly;
    private $c2Fly;
    private $updatedCloneFly;

    public function __construct()
    {
        // Instancia
        $this->fly1 = new MaleProto();
        $this->fly2 = new FemaleProto();

        // Clone
        $this->c1Fly = clone $this->fly1;
        $this->c2Fly = clone $this->fly2;
        $this->updatedCloneFly = clone $this->fly2;

        // Atualiza clone
        $this->c1Fly->mated = "true";
        $this->c2Fly->fecundity = "186";
        $this->updatedCloneFly->eyeColor = "purple";
        $this->updatedCloneFly->wingBeat = "220";
        $this->updatedCloneFly->unitEyes = "750";
        $this->updatedCloneFly->fecundity = "92";

        // Envia por meio de método que usa indução de tipo
        $this->showFly($this->c1Fly);
        $this->showFly($this->c2Fly);
        $this->showFly($this->updatedCloneFly);
    }

    private function showFly(IPrototype $fly)
    {
        echo "Eye color: " . $fly->eyeColor . "<br/>" . PHP_EOL;
        echo "Wing Beats/second: " . $fly->wingBeat . "<br/>" . PHP_EOL;
        echo "Eye units: " . $fly->unitEyes . "<br/>" . PHP_EOL;

        $genderNow = $fly::gender;
        echo "Gender: " . $genderNow . "<br/>" . PHP_EOL;

        if ($genderNow == "FEMALE")
        {
            echo "Number of eggs: " . $fly->fecundity . "<p/>" . PHP_EOL;
        }
        else
        {
            echo "Mated: " . $fly->mated . "<p/>" . PHP_EOL;
        }
    }
}

$worker = new Client();
