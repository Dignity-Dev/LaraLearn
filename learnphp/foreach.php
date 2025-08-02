<?php

$basket = [
    "Apple" => 3,
    "Banana" => 4
];

$total = 0;
foreach($basket as $item => $quantity) {
    echo "Item: $item, Quantity: $quantity\n";
    $total += $quantity;
}
