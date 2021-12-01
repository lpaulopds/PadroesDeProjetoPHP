<?php
// Página 182

require_once('IFormat.php');
require_once('Mobile.php');

class MobileAdapter implements IFormat
{
    private $mobile;

    public function __construct(IMobileFormat $mobileNow)
    {
        $this->mobile = $mobileNow;
    }

    public function formatCss()
    {
        $this->mobile->formatCSS();
    }

    public function formatGraphics()
    {
        $this->mobile->formatGraphics();
    }

    public function horizontalLayout()
    {
        $this->mobile->verticalLayout();
    }
}
