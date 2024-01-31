<?php

$a = 5;
function getFactorial(int $a) : int
{
    $result = 1;
    for($i=1; $i<=$a; $i++) { // тут можно  начинать сразу $i = 2 чтобы один круг не запускать по тому что первый круг результат будет 1
        $result *= $i;
    }
    return $result;
}
$result = getFactorial($a);
echo " Факториал число $a: $result ";


