<?php

namespace Qck\FizzBuzz\Value;

class NumberTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @group test
     */
    public function testContains()
    {
        $numbers = [
            0 => new Number(0),
            123 => new Number(123),
            100 => new Number(100),
            333 => new Number(333),
        ];

        $this->assertTrue($numbers[0]->contains(new Number(0)));
        $this->assertTrue($numbers[123]->contains(new Number(2)));
        $this->assertTrue($numbers[100]->contains(new Number(0)));
        $this->assertTrue($numbers[333]->contains(new Number(3)));

        $this->assertFalse($numbers[0]->contains(new Number(1)));
        $this->assertFalse($numbers[123]->contains(new Number(4)));
        $this->assertFalse($numbers[100]->contains(new Number(2)));
        $this->assertFalse($numbers[333]->contains(new Number(1)));
    }
}
