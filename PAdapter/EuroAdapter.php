<?php
// Página 173

require_once('EuroCalc.php');
require_once('ITarget.php');

class EuroAdapter extends EuroCalc implements ITarget
{
    public function __construct()
    {
        $this->requester();
    }

    function requester()
    {
        $this->rate = .8111;
        return $this->rate;
    }
}
