<?php

namespace App;

use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function testOrderCalculateSubTotal(): void
    {
        $order = new Order();
        $order->addItem(new Item(category: "Cigar",description: "marlboro",price: 10));
        $order->addItem(new Item(category: "Beer",description: "Itaipava",price: 5));
        $order->addItem(new Item(category: "Water",description: "Crystal 300ml",price: 2));

        $subTotal = $order->getSubTotal();

        $this->assertEquals(expected: 17,actual: $subTotal);
    }

    public function testOrderCalculateTaxes(): void
    {
        $order = new Order();
        $order->addItem(new Item(category: "Cigar",description: "marlboro",price: 10)); // 0.2 = 2
        $order->addItem(new Item(category: "Beer",description: "Itaipava",price: 5)); // 0.1 = 0.5
        $order->addItem(new Item(category: "Water",description: "Crystal 300ml",price: 2)); // 0 = 0

        $taxes = $order->getTaxes();

        $this->assertEquals(expected: 2.5,actual: $taxes);
    }

}