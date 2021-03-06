<?php
// Página 160

interface IPrototypeBd
{
    const PROTO = "IPrototypeBd";
    function __clone();
}

class DynamicObjectNaming implements IPrototypeBd
{
    const CONCRETE = " [Concrete] DynamicObjectNaming";

    public function __construct()
    {
        echo "This was dynamically created.<br/>";
    }

    public function doWork()
    {
        echo "<br/>This is the assigned task.<br/>";
    }

    function __clone() {}
}

$employeeData = array('DynamicObjectNaming', 'Tess', 'mar', 'John', 'eng', 'Olivia', 'man' );
$don = $employeeData[0];
$employeeData[6] = new $don;
echo $employeeData[6]::CONCRETE;

$employeeData[6]->doWork();
$employeeName = clone $employeeData[6];
echo $employeeName->doWork();
echo "This is a clone of " . $employeeName::CONCRETE . "<br/>";
echo "Child of: " . $employeeName::PROTO;
