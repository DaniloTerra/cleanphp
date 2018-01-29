<?php

namespace CleanPhp\Invoicer\Tests\Domain\Entity;

use CleanPhp\Invoicer\Domain\Entity\Order;

class OrderTest extends \PHPUnit\Framework\TestCase
{
    public function testInstantiation()
    {
        $obj = new Order();

        $this->assertInstanceOf(Order::class, $obj);
    }

    public function testGettersAndSetters()
    {
        $obj = new Order();

        $obj->setId(1);
        $obj->setCustomer('customer');
        $obj->setOrderNumber('orderNumber');
        $obj->setDescription('description');
        $obj->setTotal(110.00);

        $this->assertEquals(1, $obj->getId());
        $this->assertEquals('customer', $obj->getCustomer());
        $this->assertEquals('orderNumber', $obj->getOrderNumber());
        $this->assertEquals('description', $obj->getDescription());
        $this->assertEquals(110.00, $obj->getTotal());
    }
}
