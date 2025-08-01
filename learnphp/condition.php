<?php

$x = 10;
if ($x > 5) {
    echo "x is greater than 5\n";
}

$score = 85;

if ($score >= 90) {
    echo "Grade: A";
}else if ($score >= 80) {
    echo "Grade: B";
}else if ($score >= 70) {
    echo "Grade: C";
}   else if ($score >= 60) {
    echo "Grade: D";
}else {
    echo "Grade: F";
}


// nexted if
$num = 15;
if ($num > 0){
    if($num % 2 == 0){
        echo "\nPositive even number\n";
    }else{
        echo "\nodd number\n";
    }
}else{
    echo "\nNumber is not positive\n";
}

// real world example
$username = "admin";
$password = "Password123";

if ($username == "admin" && $password == "Password123") {
    echo "\nLogin successful!";
}else{
    echo "\nLogin failed. Please check your username and password.";
}
