<?php

namespace CleanPhp\Invoicer\Domain\Repository;

use CleanPhp\Invoicer\Domain\Repository\RepositoryInterface;

interface OrderRepositoryInterface extends RepositoryInterface
{
    public function getUninvoicedOrders();
}
