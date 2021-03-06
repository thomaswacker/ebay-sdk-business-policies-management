<?php

use DTS\eBaySDK\BusinessPoliciesManagement\Types\ShippingProfileDiscountInfo;

class ShippingProfileDiscountInfoTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ShippingProfileDiscountInfo();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\ShippingProfileDiscountInfo', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
