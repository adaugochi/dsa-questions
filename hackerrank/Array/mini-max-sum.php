<?php

function miniMaxSum($arr) {
    // Write your code here
    $min = array_sum($arr);
    $max = 0;
    $len = 5;

    for($i = 0; $i < $len; $i++) {
        $val = array_sum($arr) - $arr[$i];

        if($min > $val) $min = $val;

        if($max < $val) $max = $val;
    }

    return $min . ' ' . $max;
}