<?php
// Página 207

/** Age groups:
 *  18-29: Group 1
 *  30-39: Group 2
 *  40-49: Group 3
 *  50+ : Group 4
 */

function my_autoload($pClassName)
{
    include(__DIR__ . "/" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");

class Client
{
    //  $hotDate é instância de componente
    private $hotDate;

    public function __construct()
    {
        $this->hotDate = new Female();
        $this->hotDate->setAge("Age Group 4");
        echo $this->hotDate->getAge();
    
        $this->hotDate = $this->wrapComponent($this->hotDate);
        echo $this->hotDate->getFeature();
    }

    private function wrapComponent(IComponent $component)
    {
        $component = new ProgramLang($component);
        $component->setFeature("php");

        $component = new Hardware($component);
        $component->setFeature("lin");

        $component = new Food($component);
        $component->setFeature("veg");

        $component = new Films($component);
        $component->setFeature("sf");

        return $component;
    }
}

$worker = new Client();
