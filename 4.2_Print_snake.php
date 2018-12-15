<?php
$size = $argv[1];

$myArray = [];
$start = 1;
for ($i = 1; $i <= $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        if ($i % $size == 0) {
            $myArray[$i][$j] = $start++;
        } else {
            $myArray[$i][$size - $j - 1] = $start++;
        }
    }

}

$myArrayT = array_transpose($myArray);

for ($i = 0; $i < $size; $i++) {
    $string = implode($myArrayT[$i]);
    print_r($string);
    echo PHP_EOL;
}

function array_transpose(array $arr)
{
    $keys = array_keys($arr);
    $sum = array_values(array_map('count', $arr));

    $transposed = [];

    for ($i = 0; $i < max($sum); $i++) {
        $item = [];
        foreach ($keys as $key) {
            $item[$key] = array_key_exists($i, $arr[$key]) ? $arr[$key][$i] : NULL;
        }
        $transposed[] = $item;
    }

    return $transposed;
}
