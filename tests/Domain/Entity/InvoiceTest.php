<?php

namespace CleanPhp\Invoicer\Tests\Domain\Entity;

use CleanPhp\Invoicer\Domain\Entity\Invoice;

class InvoiceTest extends \PHPUnit\Framework\TestCase
{
    public function testInstantiation()
    {
        $obj = new Invoice();

        $this->assertInstanceOf(Invoice::class, $obj);
    }

    public function testGettersAndSetters()
    {
        $obj = new Invoice();

        $obj->setId(1);
        $obj->setOrder('order');
        $obj->setInvoiceDate('invoiceDate');
        $obj->setTotal(100.00);

        $this->assertEquals(1, $obj->getId());
        $this->assertEquals('order', $obj->getOrder());
        $this->assertEquals('invoiceDate', $obj->getInvoiceDate());
        $this->assertEquals(100.00, $obj->getTotal());
    }
}
