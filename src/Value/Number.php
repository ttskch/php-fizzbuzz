<?php

namespace Qck\FizzBuzz\Value;

use Qck\FizzBuzz\Exception\RuntimeException;

class Number implements ValueInterface
{
    private $value;

    public function __construct($value)
    {
        if (!is_int($value)) {
            throw new RuntimeException('"value" must be an integer.');
        }

        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function __toString()
    {
        return (string)$this->value;
    }

    public function isMultiplesOf(Number $number)
    {
        return $this->value % $number->getValue() === 0;
    }
}
