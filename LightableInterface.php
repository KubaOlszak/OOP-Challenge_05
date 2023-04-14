<?php

interface LightableInterface
{
    public function switchOn(): mixed;
    public function switchOff(): bool;
}