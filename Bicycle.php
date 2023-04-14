<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{
    private bool $vechicleLights;

    public function switchOn(): mixed
    {
        if ($this->currentSpeed >=10){
        return "lights on : ". true;
        }

        return "<br> Vitesse trop faible pour allumer les lumières. <br>";
    }

    public function switchOff(bool $lights=false): bool
    {
        return $this->vechicleLights = $lights;
    }
}