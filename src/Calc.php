<?php

namespace App;

class Calc
{

    public function sum(int $first, int $second): int
    {
        return $first + $second;
    }

    public function dif(int $first, int $second): int
    {
        return $first - $second;
    }

    public function mul(int $first, int $second): int
    {
        return $first * $second;
    }

    public function div(int $first, int $second): float
    {
        return $first / $second;
    }
}
