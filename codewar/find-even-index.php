<?php

function find_even_index($arr): int|string
{
    foreach ($arr as $index => $a) {
        $firstArr = array_slice($arr, 0, $index);
        $secArr = array_slice($arr, $index + 1);
        if (array_sum($firstArr) == array_sum($secArr)) {
            return $index;
        }
    }
    return -1;
}