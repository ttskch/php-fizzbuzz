<?php

namespace Tch\FizzBuzz\Resolver;

use Tch\FizzBuzz\Value\Number;

interface ResolverInterface
{
    public function resolve(Number $number);
}
