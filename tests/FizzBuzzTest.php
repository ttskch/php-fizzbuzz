<?php

namespace Tch\FizzBuzz;

use Tch\FizzBuzz\Iterator\NumberIterator;
use Tch\FizzBuzz\Resolver\FizzBuzzResolver;
use Tch\FizzBuzz\Resolver\NabeatsuResolver;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FizzBuzz
     */
    protected $fizzbuzz;

    /**
     * @var FizzBuzz
     */
    protected $nabeatsu;

    protected function setUp()
    {
        parent::setUp();
        $this->fizzbuzz = new FizzBuzz(new FizzBuzzResolver);
        $this->nabeatsu = new FizzBuzz(new NabeatsuResolver);
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

    public function testNabeatsu()
    {
        $numbers = new NumberIterator(range(1, 40));
        $results = $this->nabeatsu->run($numbers);

        $actual = implode(PHP_EOL, $results);
        $expected = trim(file_get_contents(__DIR__ . '/Data/Nabeatsu/expected40.txt'));

        $this->assertEquals($expected, $actual);
    }
}
