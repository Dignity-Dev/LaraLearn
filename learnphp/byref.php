<?php

function doubleValue(int &$number): int{
    $number *= 2;
    return $number;
}


$original = 5;
doublevalue($original);
var_dump($original); // int(5)
