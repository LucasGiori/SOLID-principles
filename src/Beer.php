<?php


namespace App;


class Beer extends Item
{
    public function __construct(string $description, float $price)
    {
        parent::__construct(category: "Beer",description: $description,price: $price);
    }

    public function getTax(): float
    {
        return 0.1;
    }
}