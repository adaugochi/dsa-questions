<?php

function expanded_form(int $n): string {
    $result = [];
    $arr= str_split($n);
    foreach ($arr as $i => $a) {
        $v = $a . str_repeat("0", count($arr) - ($i + 1));
        if ((int)$v !== 0) {
            $result[] = $v;
        }
    }
    return implode(" + ", $result);
}