<?php

namespace App;

class Order
{
    public string $code;
    public array $items;

    public function __construct()
    {
        $this->code = floor(num: rand() * 100000);
        $this->items = [];
    }

    public function addItem(Item $item): void
    {
        array_push($this->items, $item);
    }

    public function getSubTotal()
    {
        return array_reduce(
            array: $this->items,
            callback: function (float $total,Item $item) {
                $total += $item->price;

                return $total;
            },
            initial: 0
        );
    }
}