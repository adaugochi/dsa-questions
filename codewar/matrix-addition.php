<?php

function matrix_addition(array $a, array $b): array {
    // Your code here
    $result = [];
    for($i = 0; $i < count($a); $i++) {
        $arrA = $a[$i];
        $arrB = $b[$i];
        $output = [];
        for($j = 0; $j < count($arrA); $j++) {
            $output[] = (int)$arrA[$j] + (int)$arrB[$j];
        }
        $result[] = $output;
    }
    return $result;
}