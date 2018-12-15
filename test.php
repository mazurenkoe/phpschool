<?PHP
$n = $m = 4;

  $z=array();
    $k=1;
    for ($i=0; $i<$n; $i++)
    {
        for ($j=0; $j<$m; $j++)
        {
            if ($i%2 == 0)
            {
                $z[$i][$j]=$k++;
            }
            else
            {
                $z[$i][$m-$j-1]=$k++;
            }
        }

    }
    print_r ($z);

$myArrayT = array_transpose($z);

for ($i = 0; $i < $n; $i++) {
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
