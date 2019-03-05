<?php
// to run: php 5.2_Bubble_sort.php 5 60 3 4.4 1.1 34
unset($argv[0]);
$array = array_values($argv);
$length = count($array);

for ($i = 0; $i < $length; $i++) {
    if (is_numeric($array[$i]) == false) {
        echo "Each value mast be a positive integer";
        echo PHP_EOL;
        die;
    }
}

for ($i = 0; $i < $length; $i++) {
    for ($j = ($i + 1); $j < $length; $j++) {
        if ($array[$i] > $array[$j]) {
            $c = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $c;
        }
    }
}

print_r($array);
