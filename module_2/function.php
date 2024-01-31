<?php

function sum($word) {
    echo " Zhanibekuly " . $word;
}

//sum('Sanzhar');


function add_five(&$value)
{
    $value = $value + 5;
}
//$value = 90 ;
//add_five($value);
//echo $value;


$b = array(56,29,10,'hello',true);
$b[] = 'apple';
array_push($b ,'banana');
print_r($b);

