<?php

namespace Qck\FizzBuzz\Resolver;

use Qck\FizzBuzz\Value\Number;

interface ResolverInterface
{
    public function resolve(Number $number);
}
