<?php

namespace App;

abstract class Item
{
    public function __construct(
        public string $category,
        public string $description,
        public float $price
    ){}

    public function calculateTaxes(): float
    {
        return $this->price * $this->getTax();
    }

    public abstract function getTax(): float;
}