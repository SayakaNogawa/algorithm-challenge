<?php

// Complete the miniMaxSum function below.
function miniMaxSum($arr) {
    $min = array_sum($arr) - max($arr);
    $max = array_sum($arr) - min($arr);
    echo $min ." ". $max;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
