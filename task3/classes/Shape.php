<?php
abstract class Shape
{
    abstract public function area(): float;
    abstract public function perimeter(): float;
    abstract public function getName(): string;

    public function describe(): string
    {
        return "{$this->getName()}: площадь = " . round($this->area(), 2) . 
               ", периметр = " . round($this->perimeter(), 2);
    }
}