<?php

namespace CleanPhp\Invoicer\Tests\Domain\Factory;

use CleanPhp\Invoicer\Domain\Factory\InvoiceFactory;
use CleanPhp\Invoicer\Domain\Entity\Invoice;
use CleanPhp\Invoicer\Domain\Entity\Order;

class InvoiceFactoryTest extends \PHPUnit\Framework\TestCase
{
    private function getOrderObj()
    {
        $obj = new Order();

        $obj->setId(10);
        $obj->setCustomer('customer');
        $obj->setOrderNumber(123456);
        $obj->setDescription('order description');
        $obj->setTotal(150.00);

        return $obj;
    }

    private function getInvoiceFactoryObj()
    {
        $obj = new InvoiceFactory();

        return $obj;
    }

    public function testReturnFromCreateFromOrderMethod()
    {
        $order = $this->getOrderObj();
        $factory = $this->getInvoiceFactoryObj();

        $this->assertInstanceOf(Invoice::class, $factory->createFromOrder($order));
    }

    public function testGetTotal()
    {
        $order = $this->getOrderObj();
        $factory = $this->getInvoiceFactoryObj();

        $this->assertEquals(
            $order->getTotal(),
            $factory->createFromOrder($order)->getTotal()
        );
    }

    public function testGetOrder()
    {
        $order = $this->getOrderObj();
        $factory = $this->getInvoiceFactoryObj();

        $this->assertEquals(
            $order,
            $factory->createFromOrder($order)->getOrder()
        );
    }

    public function testGetInvoiceDate()
    {
        $order = $this->getOrderObj();
        $factory = $this->getInvoiceFactoryObj();

        $this->assertEquals(
            new \DateTime(),
            $factory->createFromOrder($order)->getInvoiceDate(),
            '',
            1
        );
    }
}
