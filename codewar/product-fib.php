<?php

function productFib($prod): array
{
    $a = 0; $b = 1;
    while ($a * $b < $prod) {
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
    return [$a, $b, $a * $b == $prod];
}