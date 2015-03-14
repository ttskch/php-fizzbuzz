<?php

namespace Qck\FizzBuzz;

use Qck\FizzBuzz\Iterator\NumberIterator;
use Qck\FizzBuzz\Resolver\FizzBuzzResolver;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FizzBuzz
     */
    protected $fizzbuzz;

    protected function setUp()
    {
        parent::setUp();
        $this->fizzbuzz = new FizzBuzz(new FizzBuzzResolver);
    }

    public function test30()
    {
        $numbers = new NumberIterator(range(1, 30));
        $results = $this->fizzbuzz->run($numbers);

        $actual = implode(PHP_EOL, $results);
        $expected = trim(file_get_contents(__DIR__ . '/Data/FizzBuzz/expected30.txt'));

        $this->assertEquals($expected, $actual);
    }

    public function test100()
    {
        $numbers = new NumberIterator(range(1, 100));
        $results = $this->fizzbuzz->run($numbers);

        $actual = implode(PHP_EOL, $results);
        $expected = trim(file_get_contents(__DIR__ . '/Data/FizzBuzz/expected100.txt'));

        $this->assertEquals($expected, $actual);
    }
}
