<?php

class Order
{
    private User $user;
    private array $products;

    public function __construct(User $user, array $products)
    {
        $this->user = $user;
        $this->products = $products;
    }

    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }

    public function getUserInfo(): string
    {
        return $this->user->getInfo();
    }

}