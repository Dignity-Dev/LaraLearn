<?php

$greet = function ($name) {
    return "Hello, $name";
};

echo $greet("Basheer") . "\n";


$numbers = [1, 2, 3, 4, 5];
$squared = array_map(function ($number) {
    return $number * $number;
}, $numbers);

echo "Squared numbers: " . implode(", ", $squared) . "\n";
