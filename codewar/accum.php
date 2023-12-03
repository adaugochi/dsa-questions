<?php

function accum($s): string
{
    $counter = 1;
    $result = [];
    for ($i = 0; $i < strlen($s); $i++) {
        $result[] = ucfirst(str_repeat(strtolower("$s[$i]"), $counter++));
    }
    return implode("-", $result);
}