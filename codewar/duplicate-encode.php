<?php

function duplicate_encode($word): string
{
    $result = [];
    $arrWords = str_split(strtolower($word));
    foreach($arrWords as $arrWord) {
        if (substr_count(strtolower($word), $arrWord) > 1) {
            $result[] = ")";
        } else {
            $result[] = "(";
        }
    }
    return implode("", $result);
}