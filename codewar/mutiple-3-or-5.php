<?php

function solution($number): float|int
{
    $result = [];

    for ($i = 0; $i < $number; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            $result[] = $i;
        }
    }

    return array_sum($result);
}