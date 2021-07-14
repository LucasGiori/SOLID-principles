<?php


namespace App;


class Eletronic extends Item
{
    public function __construct(string $description, float $price)
    {
        parent::__construct(category: "Cigar",description: $description,price: $price);
    }

    public function getTax(): float
    {
        return 0.5;
    }
}