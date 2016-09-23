<?php

namespace Ttskch\FizzBuzz\Iterator;

use Ttskch\FizzBuzz\Value\Number;

class NumberIterator implements \IteratorAggregate
{
    private $numbers;

    public function __construct(array $input)
    {
        $numbers = [];
        foreach ($input as $number) {
            $numbers[] = new Number($number);
        }

        $this->numbers = $numbers;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->numbers);
    }
}
