<?php
// Página 61

class FurryPets
{
    protected $sound;

    protected function fourlegs()
    {
        return "Walk on all fours";
    }

    protected function makeSound($petNoise)
    {
        $this->sound = $petNoise;
        return $this->sound;
    }
}
