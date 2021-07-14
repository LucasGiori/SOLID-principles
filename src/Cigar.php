<?php


namespace App;


use DateTime;

class Cigar extends TaxItem
{
    public const MONTH_OF_JANUARY_NUMBER = 1;

    public function __construct(string $description, float $price)
    {
        parent::__construct(category: "Cigar",description: $description,price: $price);
    }

    public function getTax(DateTime $date): float
    {
        if(intval(value: $date->format(format: "m")) === self::MONTH_OF_JANUARY_NUMBER) {
            return 0.1;
        }
        return 0.2;
    }
}