<?php

function breakChocolate ($n, $m): float|int
{
    $rm = $m - 1;
    $rn = ($n - 1) * $m;
    return $rm + $rn;
};