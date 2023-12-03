<?php

/**
 * @param $value
 * @param $part
 * @return array
 */
function splitInteger1($value, $part): array
{
    $result = [];
    $dividedValue = $value/$part;

    if (is_float($dividedValue)) {
        $roundUpDividedValue = floor($dividedValue);
        $remainder = $value - ($roundUpDividedValue * $part);

        for ($i = 0; $i < $part; $i++) {
            if ($remainder > 0) {
                $result[] = $roundUpDividedValue + 1;
                $remainder -= 1;
            } else {
                $result[] = $roundUpDividedValue;
            }
        }
        sort($result);
    } else {
        for ($i = 0; $i < $part; $i++) {
            $result[] = $dividedValue;
        }
    }

    return $result;
}

function splitInteger($value, $part): array
{
    $result = [];
    $dividedValue = $value/$part;
    $remainder = 0;

    if (is_float($dividedValue)) {
        $dividedValue = floor($dividedValue);
        $remainder = $value - ($dividedValue * $part);
    }
    for ($i = 0; $i < $part; $i++) {
        if ($remainder > 0) {
            $result[] = $dividedValue + 1;
            $remainder -= 1;
        } else {
            $result[] = $dividedValue;
        }
    }
    sort($result);
    return $result;
}

splitInteger(16, 3);
splitInteger(10, 2);
splitInteger(11, 3);
