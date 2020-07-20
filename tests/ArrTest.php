<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Arr;

class ArrTest extends TestCase
{
    function testSum(): void
    {
        $arr = new Arr();

        $this->assertIsInt(
            $arr->sum([1,2,3,4])
        );


        $this->assertEquals(
            10,
            $arr->sum([1,2,3,4])
        );

    }

    function testMul(): void
    {
        $arr = new Arr();

        $this->assertIsInt(
            $arr->sum([1,2,3,4])
        );


        $this->assertEquals(
            24,
            $arr->sum([1,2,3,4])
        );

    }

    function testUmn(): void
    {
        $arr = new Arr();

        $this->assertIsInt(
            $arr->sum([1,2,3], 2)
        );


        $this->assertEquals(
            [2,4,6],
            $arr->sum([1,2,3], 2)
        );

    }

}