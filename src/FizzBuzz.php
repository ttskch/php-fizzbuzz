<?php

namespace Ttskch\FizzBuzz;

use Ttskch\FizzBuzz\Iterator\NumberIterator;
use Ttskch\FizzBuzz\Resolver\ResolverInterface;

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
