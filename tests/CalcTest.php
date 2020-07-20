<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Calc;


class CalcTest extends TestCase
{
    function testSum(): void
    {
        $calc = new Calc();

        $this->assertIsInt(
            $calc->sum(2, 3)
        );


        $this->assertEquals(
            5,
            $calc->sum(2, 3)
        );

    }

    function testDif(): void
    {
        $calc = new Calc();

        $this->assertIsInt(
            $calc->dif(5, 3)
        );


        $this->assertEquals(
            2,
            $calc->dif(5, 3)
        );
    }

    function testMul(): void
    {
        $calc = new Calc();

        $this->assertIsInt(
            $calc->mul(5, 3)
        );


        $this->assertEquals(
            15,
            $calc->mul(5, 3)
        );
    }

    function testDiv(): void
    {
        $calc = new Calc();

        $this->assertIsFloat(
            $calc->div(5, 3)
        );

        $this->assertEquals(
            2.5,
            $calc->div(5, 2)
        );
    }
}
