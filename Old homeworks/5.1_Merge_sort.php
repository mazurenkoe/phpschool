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

$inputArray = [4, 7, 1, 3, 2, 6]; 

function mergeRec($inputArray)
{
    // base case
    if (sizeof($inputArray) == 1) {
        return $inputArray;
    }
    // find middle index
    $middle = sizeof($inputArray) / 2;
    $leftList = mergeRec(array_slice($inputArray, 0, $middle));
    $rightList = mergeRec(array_slice($inputArray, $middle));

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


print_r($mergedArr);
