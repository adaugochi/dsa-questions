<?php

function anagrams(string $word, array $words): array {
    $result = [];
    foreach ($words as $value) {
        if (rearrange($word) === rearrange($value)) {
            $result[] = $value;
        }
    }
    return $result;
}

function rearrange($str): string
{
    $arr = str_split($str);
    sort($arr);
    return implode('', $arr);
}