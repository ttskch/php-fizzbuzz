<?php

namespace Ttskch\FizzBuzz\Resolver;

use Ttskch\FizzBuzz\Value\Number;

interface ResolverInterface
{
    public function resolve(Number $number);
}
