<?php
function findMax($testCase, $x) {
    $arr = $testCase;
    $chunk = array_splice($arr, 0, $x);
    $min = min($chunk);
    $max = $min;
    for ($i = 0; $i < count($testCase) - $x; $i++) {
        array_shift($chunk);
        $chunk[] = $testCase[$i + $x];
        $max = max($max, min($chunk));
    }
    return $max;
}