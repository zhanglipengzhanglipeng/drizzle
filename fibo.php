<?php
function fibo($n)
{
    $arr    = [];
    $arr[2] = $arr[1] = 1;

    for ($i = 3; $i <= $n; $i++) {
        $arr[$i] = $arr[$i - 1] + $arr[$i - 2];
    }

    return $arr;
}

echo '<pre>';
print_r(fibo(100));
