<?php
// Página 214

function my_autoload($pClassName)
{
    include(__DIR__ . "/" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");

class ClientH
{
    // $hotDate é uma instância de componente
    private $hotDate;
    private $progLang;
    private $hardware;
    private $food;
    private $film;

    public function __construct()
    {
        $gender = $_POST["gender"];
        $age = $_POST["age"];

        $this->progLang = $_POST["progLang"];
        $this->hardware = $_POST["hardware"];
        $this->food = $_POST["food"];
        $this->film = $_POST["film"];

        $this->hotDate = new $gender();
        $this->hotDate->setAge($age);
        echo $this->hotDate->getAge();
    
        $this->hotDate = $this->wrapComponent($this->hotDate);
        echo $this->hotDate->getFeature();
    }

    private function wrapComponent(IComponent $component)
    {
        $component = new ProgramLang($component);
        $component->setFeature($this->progLang);

        $component = new Hardware($component);
        $component->setFeature($this->hardware);

        $component = new Food($component);
        $component->setFeature($this->food);

        $component = new Films($component);
        $component->setFeature($this->film);

        return $component;
    }
}

$worker = new ClientH();
