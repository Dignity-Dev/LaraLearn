<?php

function greet($name) {
    return "Hello, " . $name . "!";
}


echo greet("Haadi");


function greetWithTime($time = "day", $name){
    return "Good " . $time . ", " . $name . "!";
}

echo greetWithTime("morning", "Haadi");
