<?php
//php 4.1_Print_figure.php 6
$base = $argv[1];

if (ctype_digit($argv[1]) == false) {
    echo "Value mast be a positive integer";
    echo PHP_EOL;
    die;
}

for ($i = 1; $i < $base; $i++) {
    for ($j = $i; $j < $base; $j++)
        echo " ";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo("*");
    echo PHP_EOL;
}

for ($i = $base; $i > 0; $i--) {
    for ($j = $base - $i; $j > 0; $j--)
        echo " ";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo("*");
    echo PHP_EOL;
}
