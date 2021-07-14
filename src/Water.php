<?php


namespace App;


class Water extends Item
{
    public function __construct(string $description, float $price)
    {
        parent::__construct(category: "Water",description: $description,price: $price);
    }
}