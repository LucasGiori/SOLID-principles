<?php


namespace App;


use DateTime;

abstract class TaxItem extends Item
{
    public function __construct(string $category, string $description, float $price)
    {
        parent::__construct(category: $category, description: $description, price: $price);
    }

    public function calculateTaxes(DateTime $date): float
    {
        return $this->price * $this->getTax(date: $date);
    }

    public abstract function getTax(DateTime $date): float;
}