<?php

namespace CleanPhp\Invoicer\Tests\Domain\Service;

use CleanPhp\Invoicer\Domain\Service\InvoicingService;
use CleanPhp\Invoicer\Domain\Repository\OrderRepositoryInterface;
use CleanPhp\Invoicer\Domain\Factory\InvoiceFactory;
use CleanPhp\Invoicer\Domain\Entity\Order;
use CleanPhp\Invoicer\Domain\Entity\Invoice;

/**
 * @coversDefaultClass \CleanPhp\Invoicer\Domain\Service\InvoicingService
 */
class InvoicingServiceTest extends \PHPUnit\Framework\TestCase
{
    private function getOrderRepositoryMock()
    {
        return $this->createMock(OrderRepositoryInterface::class);
    }

    private function getInvoiceFactoryMock()
    {
        return $this->createMock(InvoiceFactory::class);
    }

    /**
     * @covers ::__construct
     */
    public function testInstantiation()
    {
        $obj = new InvoicingService(
            $this->getOrderRepositoryMock(),
            $this->getInvoiceFactoryMock()
        );

        $this->assertInstanceOf(InvoicingService::class, $obj);
    }

    /**
     * @covers ::generateInvoices
     */
    public function testSuccessGenerateInvoices()
    {
        $return = [
            (new Order())->setTotal(100.00),
            (new Order())->setTotal(200.00),
            (new Order())->setTotal(300.00)
        ];

        $orderRepository = $this->getOrderRepositoryMock();
        $orderRepository->method('getUninvoicedOrders')->willReturn($return);

        $obj = new InvoicingService(
            $orderRepository,
            new InvoiceFactory()
        );

        $this->assertCount(count($return), $obj->generateInvoices());
        $this->assertInstanceOf(Invoice::class, $obj->generateInvoices()[0]);
    }
}
