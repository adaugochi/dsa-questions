<?php

function find_uniq($a) {
    sort($a);
    return current($a) == next($a) ? end($a) : prev($a);
}