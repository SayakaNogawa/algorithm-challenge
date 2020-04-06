<?php

// Complete the staircase function below.
function staircase($n) {
    foreach (range(1, $n) as $i) {
        $hash = str_repeat("#", $i);
        echo str_pad($hash, $n, ' ', STR_PAD_LEFT);
        echo "\r\n";
    }
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);
