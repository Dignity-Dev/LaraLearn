<?php

function sum(...$numbers){
    $sum =0 ;
    var_dump($numbers);
    foreach($numbers as $number){
        $sum += $number;
    }
    return $sum;
}


var_dump(sum());
var_dump(sum(5));
