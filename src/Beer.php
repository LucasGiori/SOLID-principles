<?php


namespace App;


use DateTime;

class Beer extends TaxItem
{
    public function __construct(string $description, float $price)
    {
        parent::__construct(category: "Beer",description: $description,price: $price);
    }

    public function getTax(DateTime $date): float
    {
        return 0.1;
    }
}