<?php

namespace Qck\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FizzBuzz
     */
    protected $skeleton;

    protected function setUp()
    {
        parent::setUp();
        $this->skeleton = new FizzBuzz;
    }

    public function testNew()
    {
        $actual = $this->skeleton;
        $this->assertInstanceOf('\Qck\FizzBuzz\FizzBuzz', $actual);
    }

    public function testException()
    {
        $this->setExpectedException('\Qck\FizzBuzz\Exception\LogicException');
        throw new Exception\LogicException;
    }
}
