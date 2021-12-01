<?php
// Página 311

interface IStrategy
{
    // public function algorithm();
    const TABLENOW = "survey";
    public function algorithm(Array $dataPack);
}
