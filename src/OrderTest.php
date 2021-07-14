<?php

namespace App;

use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function testOrderCalculateSubTotal(): void
    {
        $order = new Order();
        $order->addItem(new Cigar(description: "marlboro",price: 10));
        $order->addItem(new Beer(description: "Itaipava",price: 5));
        $order->addItem(new Water(description: "Crystal 300ml",price: 2));

        $subTotal = $order->getSubTotal();

        $this->assertEquals(expected: 17,actual: $subTotal);
    }

    public function testOrderCalculateTaxes(): void
    {
        $order = new Order();
        $order->addItem(new Cigar(description: "marlboro",price: 10));
        $order->addItem(new Beer(description: "Itaipava",price: 5));
        $order->addItem(new Water(description: "Crystal 300ml",price: 2));

        $taxes = $order->getTaxes();

        $this->assertEquals(expected: 2.5,actual: $taxes);
    }

    public function testOrderCalculateTotal(): void
    {
        $order = new Order();
        $order->addItem(new Cigar(description: "marlboro",price: 10));
        $order->addItem(new Beer(description: "Itaipava",price: 5));
        $order->addItem(new Water(description: "Crystal 300ml",price: 2));
        $order->addItem(new Eletronic(description: "Celular J5",price: 10));

        $total = $order->getTotal();

        $this->assertEquals(expected:34.5,actual: $total);
    }
}