<?php

namespace Qck\FizzBuzz;

use Qck\FizzBuzz\Iterator\NumberIterator;
use Qck\FizzBuzz\Resolver\ResolverInterface;

class FizzBuzz
{
    private $resolver;

    public function __construct(ResolverInterface $resolver)
    {
        $this->resolver = $resolver;
    }

    public function run(NumberIterator $numbers)
    {
        $results = [];
        foreach ($numbers as $number) {
            $results[] = $this->resolver->resolve($number);
        }

        return $results;
    }
}
