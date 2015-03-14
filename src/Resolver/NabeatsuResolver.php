<?php

namespace Qck\FizzBuzz\Resolver;

use Qck\FizzBuzz\Exception\RuntimeException;
use Qck\FizzBuzz\Value\Number;
use Qck\FizzBuzz\Value\Result;

class NabeatsuResolver implements ResolverInterface
{
    public function resolve(Number $number)
    {
        $three = new Number(3);

        if ($number->contains($three) || $number->isMultiplesOf($three)) {
            return new Result($this->crazify($number));
        }

        return new Result($number);
    }

    private function crazify(Number $number)
    {
        if ($number->getValue() > 40) {
            throw new RuntimeException('Sorry, cannot crazify the number larger than 40.');
        }

        $crazies = require __DIR__ . '/../Resources/Nabeatsu/crazies.php';

        return $crazies[$number->getValue()];
    }
}
