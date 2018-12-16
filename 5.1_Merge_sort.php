<?php

//$A = $argv;
//unset($A[0]);
//$length = count($A);
//
//for ($i = 1; $i <= $length; $i++) {
//    if (is_numeric($A[$i]) == false) {
//        echo "Each value mast be a positive integer";
//        echo PHP_EOL;
//        die;
//    }
//}

$A = [3, 5, 2, 4, 7, 1, 3, 2, 6];
function merge(&$A, $p, $q, $r)
{
    $n1 = $q - $p + 1;
    $n2 = $r - $q;
    $L = [];
    $R = [];
    for ($i = 1; $i <= $n1; $i++) {
        $L[$i] = $A[$p + $i - 1];
    }
    for ($j = 1; $j <= $n2; $j++) {
        $R[$j] = $A[$q + $j];
    }
    $L[$n1 + 1] = 10000000;
    $R[$n2 + 1] = 10000000;
    $i = 1;
    $j = 1;
    for ($k = $p; $k <= $r; $k++ ) {
        if($L[$i] <= $R[$j]) {
            $A[$k] = $L[$i];
            $i = $i + 1;
        }
        else {
            $A[$k] = $R[$j];
            $j = $j + 1;
        }
    }
}
function mergeSort(&$A, $p, $r) {
    if($p < $r) {
        $q = floor(($p + $r) / 2 );
        mergeSort($A, $p, $q);
        mergeSort($A, $q + 1, $r);
        merge($A, $p, $q, $r);
    }
}
mergeSort($A, 0, count($A) - 1);
echo json_encode($A);
echo PHP_EOL;



/**
// sort array and print
print_r(mergeRec($InputArr));
// Recrusive mergesort function
function mergeRec($list)
{
    // base case
    if (sizeof($list) == 1) {
        return $list;
    }
    // find middle index
    $middle = sizeof($list) / 2;
    $leftList = mergeRec(array_slice($list, 0, $middle));
    $rightList = mergeRec(array_slice($list, $middle));

    return merge($leftList, $rightList);
}

// merge 2 sorted arrays
function merge($leftList, $rightList)
{
    $mergedArr = [];
    // while both arrays are still full
    while (sizeof($rightList) > 0 && sizeof($leftList)) {
        if ($leftList[0] < $rightList[0]) {
            array_push($mergedArr, array_shift($rightList));
        } else {
            array_push($mergedArr, array_shift($leftList));
        }
    }
    while (sizeof($rightList) > 0) {
        array_push($mergedArr, array_shift($rightList));
    }
    while (sizeof($leftList) > 0) {
        array_push($mergedArr, array_shift($leftList));
    }

    return $mergedArr;
}

 */
