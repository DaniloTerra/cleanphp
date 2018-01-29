<?php

namespace CleanPhp\Invoicer\Tests\Domain\Entity;

use CleanPhp\Invoicer\Domain\Entity\Customer;

class CustomerTest extends \PHPUnit\Framework\TestCase
{
    public function testInstantiation()
    {
        $obj = new Customer();

        $this->assertInstanceOf(Customer::class, $obj);
    }

    public function testGettersAndSetters()
    {
        $obj = new Customer();

        $obj->setId(1);
        $obj->setName('Test Name');
        $obj->setEmail('test@email.com');

        $this->assertEquals(1, $obj->getId());
        $this->assertEquals('Test Name', $obj->getName());
        $this->assertEquals('test@email.com', $obj->getEmail());
    }
}
