<?php
// Return_money -n 124

$inputValue = getopt("n:");
$n = $inputValue["n"];
$a = [1, 2, 5, 10, 20, 50, 100, 200, 500];
$k = count($a);
$maxValue = 100000;

$F[0] = 0;
for ($m = 1; $m <= $n; ++$m) {
    $F[$m] = $maxValue;
    for ($i = 0; $i < $k; ++$i) {
        if ($m >= $a[$i] && $F[$m - $a[$i]] + 1 < $F[$m]) {
            $F[$m] = $F[$m - $a[$i]] + 1;
        }
    }
}
if ($n > $maxValue) {
    echo "Sorry, we don't have so much money\r\n";
} else {
    while ($n > 0) {
        for ($i = 0; $i < $k; ++$i) {
            if ($F[$n - $a[$i]] == $F[$n] - 1) {
                print_r($a[$i] . "\n");
                $n -= $a[$i];
                break;
            }
        }
    }
}
