<?php

namespace CleanPhp\Invoicer\Tests\Domain\Service;

use CleanPhp\Invoicer\Domain\Service\InvoicingService;
use CleanPhp\Invoicer\Domain\Repository\OrderRepositoryInterface;
use CleanPhp\Invoicer\Domain\Factory\InvoiceFactory;

class InvoicingServiceTest extends \PHPUnit\Framework\TestCase
{
    private function getOrderRepositoryMock()
    {
        $obj = $this->getMockBuilder(OrderRepositoryInterface::class)
                    ->disableOriginalConstructor()
                    ->setMethods(['getUninvoicedOrders'])
                    ->getMock();

        $this->expects($this->once())
             ->methods('getUninvoicedOrders')
             ->will($this->returnValue($uninvoicedOrders));

        return $obj;
    }

    private function getInvoiceFactoryMock()
    {
        return $this->createMock(InvoiceFactory::class);
    }

    private function getInstance()
    {
        return new InvoicingService(
            $this->getOrderRepositoryMock(),
            $this->getInvoiceFactoryMock()
        );
    }

    public function testInstantiation()
    {
        $obj = $this->getInstance();

        $this->assertTrue(false);
    }
}
