<?php
namespace App;

abstract class Product
{
    public const TAX = 0.2;
    private static int $count = 0;

    public function __construct(
        public readonly string $title, 
        protected float $price
    ) {
        self::$count++;
    }

    abstract public function getFinalPrice(): float;

    public function getInfo(): string
    {
        return "{$this->title}: базовая цена = {$this->price}, конечная цена = {$this->getFinalPrice()}";
    }

    public static function getCount(): int
    {
        return self::$count;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}