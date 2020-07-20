<?php

namespace App;

class Arr
{

    public function sum(array $arr): int
    {
        return array_sum($arr);
    }

    public function mul(array $arr): int
    {
        return array_product($arr);
    }

    public function uml(array $arr, int $num): array
    {
        for ($i=0; $i < count($arr); $i++) { 
            $arr[$i] = $arr[$i] * $num;
        }

        return $arr;
    }
}
