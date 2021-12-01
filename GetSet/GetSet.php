<?php
// Página 59

class GetSet
{
    private $dataWarehouse;

    function __construct()
    {
        $this->setter(200);
        $got = $this->getter();
        echo $got;
    }

    private function getter()
    {
        return $this->dataWarehouse;
    }

    private function setter($setValue)
    {
        $this->dataWarehouse = $setValue;
    }
}

$worker = new GetSet();
