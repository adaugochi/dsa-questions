<?php

function sumDigPow($a, $b)
{
    $result = [];

    for ($i = $a; $i <= $b; $i++) {
        $str = (string)$i;
        $len = strlen($str);
        if ($len == 1) {
            $result[] = $i;
        } else {
            $cal = 0;
            for ($j = 0; $j < $len; $j++) {
                $pow = $j + 1;
                $num = (int)$str[$j];
                $cal += pow($num, $pow);
            }
            if ($cal == $i) {
                $result[] = $i;
            }
        }
    }

    return $result;
}

print_r(sumDigPow(10, 1000));