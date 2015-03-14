<?php

namespace Qck\FizzBuzz\Resolver;

use Qck\FizzBuzz\Value\Number;
use Qck\FizzBuzz\Value\Result;

class FizzBuzzResolver implements ResolverInterface
{
    public function resolve(Number $number)
    {
        $result = '';
        $result .= $number->isMultiplesOf(new Number(3)) ? 'Fizz' : '';
        $result .= $number->isMultiplesOf(new Number(5)) ? 'Buzz' : '';

        $result = $result ?: (string)$number;

        return new Result($result);
    }
}
