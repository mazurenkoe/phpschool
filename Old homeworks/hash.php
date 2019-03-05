<?php

$data = [
    'ada',
    'tim',
    'joe',
    'qwe',
    'zxc',
    'tye'
];

function hashFunction($row, $n){
    $count = strlen($row);
    $result = 0;
    for ($i = 0; $i < $count; $i++){
        $result += ord($row[$i]);
    }

    return $result % $n;
};


for ($i = 0; $i < count($data); $i++){
    echo hashFunction($data[$i], count($data)).PHP_EOL;
}

$hashTable = [
  0 => null,
  1 => null,
  2 => null,
  3 => null,
  4 => null,
  5 => null,
];

for ($i = 0; $i < count($data); $i++) {
    $index = hashFunction($data[$i], $count($data));
    if(empty($hashTable[$index])) {
        $hashTable[$index] = $data[$i];
    }
    else {
        if ($hashTable[$index] instanceof LinkedList){

        }
        else{
            //converte simple value to separate obj
        }
    }

};

echo json_encode($hashTable);
