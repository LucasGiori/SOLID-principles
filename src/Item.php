<?php

namespace App;

abstract class Item
{
    public function __construct(
        public string $category,
        public string $description,
        public float $price
    ){}
}