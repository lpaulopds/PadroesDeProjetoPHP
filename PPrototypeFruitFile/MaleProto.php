<?php
// Página 144

require_once('IPrototype.php');

class MaleProto extends IPrototype
{
    const gender='MALE';
    public $mated;

    public function __construct()
    {
        $this->eyeColor = "red";
        $this->wingBeat = "200";
        $this->unitEyes = "760";
    }

    function __clone(){}
}
