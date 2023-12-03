<?php

function getCount($str): int
{
    $vowelsCount = 0;

    // enter your magic here
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], ['a','e','i','o','u'])) {
            $vowelsCount++;
        }
    }

    return $vowelsCount;
}