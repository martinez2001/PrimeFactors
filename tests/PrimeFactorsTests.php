<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTests extends TestCase
{
    /**
     * @test
     */
    function integer_1_returns_empty_array(){
        $factors = new PrimeFactors();

        $this->assertEquals([],$factors->generate(1));
    }

}