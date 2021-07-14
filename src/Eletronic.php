<?php


namespace App;


use DateTime;

class Eletronic extends TaxItem
{
    public function __construct(string $description, float $price)
    {
        parent::__construct(category: "Cigar",description: $description,price: $price);
    }

    public function getTax(DateTime $date): float
    {
        return 0.5;
    }
}